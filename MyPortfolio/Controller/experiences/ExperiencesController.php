<?php

namespace  MyPortfolio\Controller\experiences;

use core\Controller\Controller;

class ExperiencesController extends \MyPortfolio\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
    }

    public function experiences(){
        $this->render('experiences');
    }
}