<?php

namespace app\Controller\creation\admin;


use core\HTML\Form;
use core\auth\DBAuth;
use app\Help;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index(){
        $posts = $this->Post->all();
        $this->render('creation.admin.posts.index', compact('posts'));
    }

    public function add(){
        if(!empty($_FILES)){
            if(!$_FILES['file']['error']){
                move_uploaded_file($_FILES['file']['tmp_name'], 'imgdata/' . $_FILES['file']['name']);
            }
        }
        if(!empty($_POST)){
            $result = $this->Post->create([
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'category_id' => $_POST['category_id'],
                'img' => $_FILES['file']['name']
            ]);
            if($result){
                return $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->list('id', 'title');
        $form = new Form($_POST);
        $this->render('creation.admin.posts.add', compact('categories', 'form'));
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
        $this->render('creation.admin.posts.edit', compact('categories', 'form', 'post'));
    }

    public function delete(){
        if(!empty($_POST)){
            $post = $this->Post->find($_POST['id']);
            $result = $this->Post->delete($_POST['id']);
            if($post->img != null){
                unlink("imgdata/$post->img");
            }
            return $this->index();
        }
    }

}