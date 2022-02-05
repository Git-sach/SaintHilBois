<?php

namespace  MyPortfolio\Controller\skills;

use core\Controller\Controller;

class SkillsController extends \MyPortfolio\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
    }

    public function skills(){
        $this->render('skills');
    }
}