<?php

namespace app\Controller\admin;


use core\HTML\Form;
use core\auth\DBAuth;

class CategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index(){
        $categories = $this->Category->all();
        $this->render('admin.categories.index', compact('categories'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Category->create([
                'title' => $_POST['title']
            ]);
            return $this->index();
        }
        $form = new Form($_POST);
        $this->render('admin.categories.add', compact('form'));
    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Category->update($_GET['id'], [
                'title' => $_POST['title']
            ]);
            return $this->index(); //redirexion vers index
        }
        $category = $this->Category->find($_GET['id']);
        $form = new Form($category);
        $this->render('admin.categories.edit', compact('form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Category->delete($_POST['id']);
            return $this->index();
        }
    }

}