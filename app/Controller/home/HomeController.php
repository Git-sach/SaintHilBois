<?php

namespace app\Controller\home;

use core\Controller\Controller;

class HomeController extends \app\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
    }

    public function index(){
        $this->render('home.index');
    }
}