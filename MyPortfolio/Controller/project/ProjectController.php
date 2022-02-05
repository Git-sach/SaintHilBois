<?php

namespace  MyPortfolio\Controller\project;

use core\Controller\Controller;

class ProjectController extends \MyPortfolio\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
    }

    public function project(){
        $this->render('project');
    }
}