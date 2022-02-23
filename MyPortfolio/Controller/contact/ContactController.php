<?php

namespace  MyPortfolio\Controller\contact;

use core\Controller\Controller;

class ContactController extends \MyPortfolio\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
    }

    public function contact(){
        if(!empty($_POST)){
            file_put_contents('comentairesPortfolio.txt', "\n\nCommentaire de " . $_POST["name"] . " à: " . date("d-m-Y H:i:s") . "\n\n" . $_POST["comment"] . "\n\nEmail: " . $_POST["email"], FILE_APPEND);
            file_put_contents('comentairesPortfolio.txt', "\n\n--------------------------------------------------------------------------------------------------------------------------", FILE_APPEND);
        }
        $this->render('contact');
    }
}