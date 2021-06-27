<?php

namespace app\Controller\creation\admin;

use \app;
use core\Auth\DBAuth;

class AppController extends \app\Controller\creation\AppController{

    protected $template = 'admin\creation';

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