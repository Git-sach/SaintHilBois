<?php

namespace app\Controller\creation;

use core\HTML\Form;
use core\auth\DBAuth;
use \App;

class UsersController extends AppController{

    public function login(){
        $errors = false;
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                header('Location: index.php?p=creation.admin.posts.index');
            } else {
                $errors = true;
            }
        }
        $form = new Form($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

}