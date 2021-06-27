<?php

namespace app\Controller\admin;

use \app;
use core\Auth\DBAuth;

class AppController extends \app\Controller\AppController{

    public function __construct(){
        parent::__construct();
        //Auth
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()){
            $this->forbidden();
        }
    }

}