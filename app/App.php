<?php

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

    public function forbidden(){
        Header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    public function notFound(){
        Header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
}