<?php

namespace app\Controller\creation;

use core\Controller\Controller;

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
        $this->render('creation.posts.index', compact('posts', 'categories'));
        //compact('posts', 'categories') -> crée un tableau [posts=>$posts, categories=>$categories]
    }

    public function category(){
        $category = $this->Category->find($_GET['id']);
        if($category === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('creation.posts.category', compact('articles', 'categories', 'category'));
    }

    public function show(){
        if(!empty($_POST)){
            $result = $this->Comment_post->create([
                'post_id' => $_GET['id'],
                'comment' => $_POST['comment'],
                'name' => $_POST['name'],
                'mail' => $_POST['mail']
                //'date' => $_POST[$dateNow->format('Y-m-d H:i:s')]
            ]);
        }
        $post = $this->Post->find($_GET['id']);
        $category = $this->Category->find($post->category_id);
        $cards = $this->Post->SeeAsWell($category->title);
        $this->render('creation.posts.show', compact('post', 'category', 'cards'));
    }

}