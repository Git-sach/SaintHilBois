<?php

namespace app\Controller\admin;


use core\HTML\Form;
use core\auth\DBAuth;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add(){
        if(!empty($_POST)){
            $result = $this->Post->create([
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'category_id' => $_POST['category_id']
            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->list('id', 'title');
        $form = new Form($_POST);
        $this->render('admin.posts.add', compact('categories', 'form'));
    }

    public function edit(){
        if(!empty($_POST)){
            $result = $this->Post->update($_GET['id'], [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'category_id' => $_POST['category_id']
            ]);
            if($result){
                return $this->index(); //redirexion vers index
            }
        }
        $post = $this->Post->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->list('id', 'title');
        $form = new Form($post);
        $this->render('admin.posts.edit', compact('categories', 'form'));
    }

    public function delete(){
        if(!empty($_POST)){
            $result = $this->Post->delete($_POST['id']);
            return $this->index();
        }
    }

}