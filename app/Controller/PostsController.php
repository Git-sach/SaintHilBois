<?php

namespace app\Controller;

use core\Controller\Controller;

class PostsController extends AppController{

    public function __construct(){
        parent::__construct(); //-> appel le constructeur parent
        $this->loadModel('Post');
        $this->loadModel('Category');
    }

    public function index(){
        $posts = $this->Post->last();
        $categories = $this->Category->all();
        $this->render('posts.index', compact('posts', 'categories'));
        //compact('posts', 'categories') -> crée un tableau [posts=>$posts, categories=>$categories]
    }

    public function category(){
        $category = $this->Category->find($_GET['id']);
        if($category === false){
            $this->notFound();
        }
        $articles = $this->Post->lastByCategory($_GET['id']);
        $categories = $this->Category->all();
        $this->render('posts.category', compact('articles', 'categories', 'category'));
    }

    public function show(){
        $post = $this->Post->find($_GET['id']);
        $category = $this->Category->find($post->category_id);
        $this->render('posts.show', compact('post', 'category'));
    }

}