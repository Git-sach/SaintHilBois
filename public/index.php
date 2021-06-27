<?php

use app\Help;

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
} else {
    $page = 'home';
}

if($page === 'home'){
    $controller = new \app\Controller\PostsController();
    $controller->index();
} elseif($page === 'post.category'){
    $controller = new \app\Controller\PostsController();
    $controller->category();
} elseif($page === 'post.show'){
    $controller = new \app\Controller\PostsController();
    $controller->show();
} elseif($page === 'login'){
    $controller = new \app\Controller\UsersController();
    $controller->login();
} 

elseif($page === 'admin.posts.index'){
    $controller = new \app\Controller\admin\PostsController();
    $controller->index();
} elseif($page === 'admin.posts.add'){
    $controller = new \app\Controller\admin\PostsController();
    $controller->add();
}  elseif($page === 'admin.posts.edit'){
    $controller = new \app\Controller\admin\PostsController();
    $controller->edit();
}  elseif($page === 'admin.posts.delete'){
    $controller = new \app\Controller\admin\PostsController();
    $controller->delete();
} 
 
elseif($page === 'admin.categories.index'){
    $controller = new \app\Controller\admin\CategoriesController();
    $controller->index();
} elseif($page === 'admin.categories.add'){
    $controller = new \app\Controller\admin\CategoriesController();
    $controller->add();
}  elseif($page === 'admin.categories.edit'){
    $controller = new \app\Controller\admin\CategoriesController();
    $controller->edit();
}  elseif($page === 'admin.categories.delete'){
    $controller = new \app\Controller\admin\CategoriesController();
    $controller->delete();
}