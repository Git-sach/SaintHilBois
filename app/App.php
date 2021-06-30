<?php

use app\Help;
use core\Config;
use core\database\MysqlDatabase;

class App{

    public $title = "SaintHilBois";
    private $db_instance;
    private static $_instance;

    //singleton --> class a instancier une unique fois
    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new App();
        }
        return self::$_instance;
    }

    public static function load(){
        session_start();
        require ROOT . '/app/Autoloader.php';
        app\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        core\Autoloader::register();
    }

    //Factory
    public function getTable($name){
        $class_name = '\\app\\table\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }

    //Factory
    public function getDb(){
        $config = Config::getInstance(ROOT . '/config/config.php');
        if(is_null($this->db_instance)){
            $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
        }
        return $this->db_instance;
    }

    public static function getMenu(){
        return explode('.', $_GET['p'])[0];
    }

    public static function getMenuCreationAdmin(){
        return explode('.', $_GET['p'])[2];
    }

    public static function getCateID(){
        return $_GET['id'];
    } 
}