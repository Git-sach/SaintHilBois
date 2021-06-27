<?php

namespace core\entity;

class Entity {

    /*lorsque que l'on fait appel a un attribut non defini: 
     --> fonction fait appel au geteur qui correspond */
    public function __get($key){
        $method = 'get' . ucfirst($key);
        return $this->$method();
    }

}