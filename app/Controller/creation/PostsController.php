<?php

namespace app\Controller\creation;

use app\Help;
use core\Controller\Controller;
use core\HTML\Form;

class PostsController extends \app\Controller\AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
        $this->loadModel('Post');
        $this->loadModel('Category');
        $this->loadModel('Comment_post');
    }

    public function index(){
        $posts = $this->Post->last();
        $categories = $this->Category->all();
        $form = new Form($categories);
        $this->render('creation.posts.index', compact('posts', 'form'));
        //compact('posts', 'categories') -> crée un tableau [posts=>$posts, categories=>$categories]
    }

    public function category(){
        $category = $this->Category->find($_GET['id']);
        if($category === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $form = new Form($categories);
        $this->render('creation.posts.category', compact('articles', 'form', 'category'));
    }

    public function show(){	
        if(!empty($_POST)){
            $result = $this->Comment_post->create([
                'post_id' => $_GET['id'],
                'comment' =>  substr(nl2br(htmlentities(json_encode($_POST['comment']))),6,-6),
                'name' => $_POST['name'],
                'mail' => $_POST['mail']
                //'date' => $_POST[$dateNow->format('Y-m-d H:i:s')]
            ]);
            header('Location: index.php?p=creation.posts.show&id=' . $_GET['id']);
        }
        $post = $this->Post->find($_GET['id']);
        $category = $this->Category->find($post->category_id);
        $cards = $this->Post->SeeAsWell($category->title);
        $this->render('creation.posts.show', compact('post', 'category', 'cards'));
    }
}