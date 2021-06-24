<?php 

namespace app;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    //inclue les fichier correspondant à notre class
    static function autoload($class){
        if(strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $test = __DIR__ . '/' . $class . '.php';
            //print_r($class . ' -- ');
            require __DIR__ . '/' . $class . '.php';
        }
    }
}