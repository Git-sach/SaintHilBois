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
 * HOME
 */
if($page === 'home.index'){
    $controller = new \app\Controller\home\HomeController(); /* provisoir */
    $controller->index(); /* provisoir */

} elseif($page === 'home.admin.index'){
    $controller = new \app\Controller\creation\admin\AppController(); /* provisoir ->> car dossier a créer pour Home about et contact avec admin/appController correspondent */
    $controller->building(); /* provisoir */
/**
 * CREATION
 */
} elseif($page === 'creation.posts.index'){
    $controller = new \app\Controller\creation\PostsController();
    $controller->index();
} elseif($page === 'creation.posts.categories'){
    $controller = new \app\Controller\creation\PostsController();
    $controller->category();
} elseif($page === 'creation.posts.show'){
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

/**
 * ABOUT
 */
} elseif($page === 'about.index'){
    $controller = new \app\Controller\AppController(); /* provisoir */
    $controller->building(); /* provisoir */

} elseif($page === 'about.admin.index'){
    $controller = new \app\Controller\creation\admin\AppController(); /* provisoir ->> car dossier a créer pour Home about et contact avec admin/appController correspondent */
    $controller->building(); /* provisoir */

/**
 * CONTACT
 */
} elseif($page === 'contact.index'){
    $controller = new \app\Controller\AppController(); /* provisoir */
    $controller->building(); /* provisoir */

} elseif($page === 'contact.admin.index'){
    $controller = new \app\Controller\creation\admin\AppController(); /* provisoir ->> car dossier a créer pour Home about et contact avec admin/appController correspondent */
    $controller->building(); /* provisoir */

}