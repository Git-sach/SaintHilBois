<?php

namespace core\table;

use core\database\Database;

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