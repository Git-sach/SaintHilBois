<?php

namespace MyPortfolio\Controller;

use core\Controller\Controller;

class AppController extends Controller{

    protected $template = 'default';

    public function __construct(){
        $this->viewPath = ROOT . '/MyPortfolio/Views/';
    }
}