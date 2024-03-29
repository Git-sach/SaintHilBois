<?php

namespace core\table;

use core\database\Database;
use app\Help;

class Table {

    protected $table; 
    protected $db;

    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = end($parts);
            $this->table = strtolower(str_replace('Table', '', $class_name) . 's');
        }
    }

    public function all(){
        return $this->query('SELECT * FROM ' . $this->table);
    }

    public function find($id){
        return $this->query('SELECT * FROM ' . $this->table . ' WHERE id = ?', [$id], true);
    }

    public function update($id, $fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->query('UPDATE ' . $this->table . ' SET ' . $sql_part . ' WHERE id = ?', $attributes, true);
    }

    public function create($fields){
        $sql_parts = [];
        $attributes = [];
        foreach($fields as $k => $v){
            $sql_parts[] = "$k = ?";
            $attributes[] = $v;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query('INSERT INTO ' . $this->table . ' SET ' . $sql_part, $attributes, true);
    }

    public function delete($id){
        // pour suprimer les articles sans categories.
        //-----------------------------------
        if($this->table === 'categories'){
            $id_autre = $this->query("SELECT id FROM categories WHERE title = 'Autre'", null, true);
            $update = $this->query('UPDATE articles SET category_id = ' . $id_autre->id . ' WHERE category_id = ' . $id);
        }
        //-----------------------------------
        return $this->query('DELETE FROM ' . $this->table . ' WHERE id = ?', [$id], true);
    }

    public function list($key, $value){
        $records = $this->all();
        $return = [];
        foreach($records as $v){
            $return[$v->$key] = $v->$value;
        }
        return $return;
    } 

    public function query($statement, $attributes = null, $one = false){
        //-> @replace -> replace table/ClassTable by entity/ClassEntity
        $replace = str_replace('table', 'entity', str_replace('Table', 'Entity', get_class($this)));
        if($attributes){
            return $this->db->prepare($statement, $attributes, $replace, $one);
        } else {
            return $this->db->query($statement, $replace, $one);
        }
    }
}