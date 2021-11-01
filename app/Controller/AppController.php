<?php

namespace app\Controller;

use core\Controller\Controller;
use \app;

class AppController extends Controller{

    protected $template = 'default';

    public function __construct(){
        $this->viewPath = ROOT . '/app/Views/';
    }

    protected function loadModel($model_name){
        $this->$model_name = App::getInstance()->getTable($model_name);
    }

    public function building(){
        $this->render('templates.building');
    }

    public function pagination($nbrPerPage){

    }
}