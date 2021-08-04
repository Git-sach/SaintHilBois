<?php

namespace app\Controller\creation\admin;

use \app;
use core\auth\DBAuth;

class AppController extends \app\Controller\AppController{

    protected $template = 'admin\default';

    public function __construct(){
        parent::__construct();
        //Auth
        $app = App::getInstance();
        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()){
            $this->login();
        }
    }
}