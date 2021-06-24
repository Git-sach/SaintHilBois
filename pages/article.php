<?php

use app\table\Articles;
use app\table\Categories;
use app\App;

$post = Articles::find($_GET['id']);
if($post === false){
    App::notFound();
}

App::setTitle($post->title);

$category = Categories::find($post->category_id);

?>


<h1><?= $post->title; ?></h1>
<p><em> <?= $category->title ?> </em></p>
<p><?= $post->content; ?></p>