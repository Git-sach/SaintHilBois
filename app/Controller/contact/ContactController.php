<?php

namespace app\Controller\contact;

use core\Controller\Controller;

class ContactController extends \app\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
    }

    public function index(){
        $this->render('contact.index');
    }
}