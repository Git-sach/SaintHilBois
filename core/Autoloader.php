<?php 

namespace core;

class Autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    //inclue les fichier correspondant à notre class
    static function autoload($class){
        if(strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $path = __DIR__ . '/' . $class . '.php';
            require str_replace('\\', '/', $path);
        }
    }
}