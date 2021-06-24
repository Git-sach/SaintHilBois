<?php

namespace app\table;

use app\App;

class Table{

    protected static $table;

    public static function getAll(){
        return static::query("SELECT * FROM " . static::$table . "");
    }   

    /*lorsque que l'on fait appel a un attribut non defini: 
     --> fonction fait appel au geteur qui correspond */
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public static function find($id){
        return static::query('SELECT * FROM ' . static::$table . ' WHERE id = ?', [$id], get_called_class() , true);
    }

    public static function query($statement, $attributes = null, $one = false){
        if($attributes){
            return App::getDb()->prepare($statement, $attributes, get_called_class(), $one);
        } else {
            return App::getDb()->query($statement, get_called_class(), $one);
        }
    }
}