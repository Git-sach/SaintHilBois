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
        require ROOT . '/MyPortfolio/Autoloader.php'; //MyPortfolio
        MyPortfolio\Autoloader::register(); //MyPortfolio
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

    public function alert($style, $path, $content){
        if($style == 'alert_success'){
            $fill = '#558871';
        }elseif($style == 'alert_danger'){
            $fill = '#BE7C82';
        }else{
            $fill = '#5782C1';
        }
        $svg = '<a href="' . $path . '" ><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 31 31" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M30.273 3.40629C30.4582 3.22124 30.6053 3.00149 30.7056 2.75962C30.806 2.51774 30.8577 2.25846 30.8579 1.99659C30.8581 1.73471 30.8066 1.47537 30.7066 1.23337C30.6065 0.99137 30.4598 0.771447 30.2747 0.586161C30.0896 0.400874 29.8699 0.253853 29.628 0.153489C29.3861 0.0531259 29.1269 0.00138668 28.865 0.00122573C28.6031 0.00106477 28.3438 0.0524852 28.1018 0.152551C27.8598 0.252617 27.6398 0.399369 27.4546 0.584427L15.4287 12.6103L3.40629 0.584427C3.03209 0.210225 2.52456 -3.94287e-09 1.99536 0C1.46616 3.94287e-09 0.95863 0.210225 0.584427 0.584427C0.210225 0.95863 3.94287e-09 1.46616 0 1.99536C-3.94287e-09 2.52456 0.210225 3.03209 0.584427 3.40629L12.6103 15.4287L0.584427 27.4511C0.399141 27.6364 0.252164 27.8563 0.151888 28.0984C0.0516112 28.3405 0 28.6 0 28.862C0 29.1241 0.0516112 29.3835 0.151888 29.6256C0.252164 29.8677 0.399141 30.0877 0.584427 30.273C0.95863 30.6472 1.46616 30.8574 1.99536 30.8574C2.2574 30.8574 2.51686 30.8058 2.75895 30.7055C3.00104 30.6052 3.22101 30.4582 3.40629 30.273L15.4287 18.2471L27.4546 30.273C27.8288 30.6467 28.3361 30.8565 28.865 30.8562C29.3939 30.8558 29.901 30.6454 30.2747 30.2712C30.6484 29.897 30.8582 29.3897 30.8579 28.8608C30.8576 28.3319 30.6472 27.8248 30.273 27.4511L18.2471 15.4287L30.273 3.40629Z" fill="' . $fill . '"/>
        </svg></a>';
        $content = '<div class="' . $style . '"> <p>'. $content . '</p>' . $svg . '</div>';
        return $content;
        
    }
}