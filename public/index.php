<?php

use app\Help;

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
} else {
    $page = 'home.index';
}

//Home, Creation, About, Contact

/**
 * CREATION
 */
if($page === 'creation.post.index'){
    $controller = new \app\Controller\creation\PostsController();
    $controller->index();
} elseif($page === 'creation.post.category'){
    $controller = new \app\Controller\creation\PostsController();
    $controller->category();
} elseif($page === 'creation.post.show'){
    $controller = new \app\Controller\creation\PostsController();
    $controller->show();
} elseif($page === 'login'){
    $controller = new \app\Controller\creation\UsersController();
    $controller->login();
} 

elseif($page === 'creation.admin.posts.index'){
    $controller = new \app\Controller\creation\admin\PostsController();
    $controller->index();
} elseif($page === 'creation.admin.posts.add'){
    $controller = new \app\Controller\creation\admin\PostsController();
    $controller->add();
}  elseif($page === 'creation.admin.posts.edit'){
    $controller = new \app\Controller\creation\admin\PostsController();
    $controller->edit();
}  elseif($page === 'creation.admin.posts.delete'){
    $controller = new \app\Controller\creation\admin\PostsController();
    $controller->delete();
} 
 
elseif($page === 'creation.admin.categories.index'){
    $controller = new \app\Controller\creation\admin\CategoriesController();
    $controller->index();
} elseif($page === 'creation.admin.categories.add'){
    $controller = new \app\Controller\creation\admin\CategoriesController();
    $controller->add();
}  elseif($page === 'creation.admin.categories.edit'){
    $controller = new \app\Controller\creation\admin\CategoriesController();
    $controller->edit();
}  elseif($page === 'creation.admin.categories.delete'){
    $controller = new \app\Controller\creation\admin\CategoriesController();
    $controller->delete();
}