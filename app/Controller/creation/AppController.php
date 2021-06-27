<?php

namespace app\Controller\creation;

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

}