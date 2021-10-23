<?php

namespace app\Controller\home;

use core\Controller\Controller;

class HomeController extends \app\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->LastAccueil();
        $this->render('home.index', compact('posts'));
    }
}