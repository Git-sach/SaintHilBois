<?php

namespace  MyPortfolio\Controller\home;

use core\Controller\Controller;

class HomeController extends \MyPortfolio\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
    }

    public function home(){
        $this->render('home');
    }
}