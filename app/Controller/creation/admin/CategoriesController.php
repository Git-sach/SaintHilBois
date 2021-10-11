<?php

namespace app\Controller\creation\admin;

use core\HTML\Form;
use core\auth\DBAuth;
use \app;

class CategoriesController extends AppController{

    private $alert;
    private $url = 'index.php?p=creation.admin.categories.index';

    public function __construct(){
        parent::__construct();
        $this->loadModel('Category');
    }

    public function index(){
        $categories = $this->Category->all();
        $alert = $this->alert;
        $this->render('creation.admin.categories.index', compact('categories','alert'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Category->create([
                'title' => $_POST['title']
            ]);
            $this->alert = App::getInstance()->alert('alert_success', $this->url, 'Catégorie bien ajouté!');
            return $this->index();
        }
        $form = new Form($_POST);
        $this->render('creation.admin.categories.add', compact('form'));
    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Category->update($_GET['id'], [
                'title' => $_POST['title']
            ]);
            $this->alert = App::getInstance()->alert('alert_primary', $this->url, 'Catégorie bien sauvegardé!');
            return $this->index(); //redirexion vers index
        }
        $category = $this->Category->find($_GET['id']);
        $form = new Form($category);
        $this->render('creation.admin.categories.edit', compact('form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Category->delete($_POST['id']);
            $this->alert = App::getInstance()->alert('alert_danger', $this->url, 'Categorie bien suprimé!');
            return $this->index();
        }
    }

}