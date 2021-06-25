<?php

use app\Help;
use \core\auth\DBAuth;

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
} else {
    $page = 'home';
}

//Auth
$app = APP::getInstance();
$auth = new DBAuth($app->getDb());
if(!$auth->logged()){
    $app->forbidden();
}

if($page === 'home'){
    require ROOT . '/pages/admin/posts/index.php';
} elseif($page === 'post.edit'){
    require ROOT . '/pages/admin/posts/edit.php';
} elseif($page === 'post.add'){
    require ROOT . '/pages/admin/posts/add.php';
} elseif($page === 'post.delete'){
    require ROOT . '/pages/admin/posts/delete.php';
} elseif($page === 'categories.index'){
    require ROOT . '/pages/admin/categories/index.php';
} elseif($page === 'categories.edit'){
    require ROOT . '/pages/admin/categories/edit.php';
} elseif($page === 'categories.add'){
    require ROOT . '/pages/admin/categories/add.php';
} elseif($page === 'categories.delete'){
    require ROOT . '/pages/admin/categories/delete.php';
}

$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';