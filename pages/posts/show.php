<?php

$app = App::getInstance();
$post = $app->getTable('Post')->find($_GET['id']);
if($post === false){
    $app->notFound();
}

$app->title = $post->title;

$category = $app->getTable('Category')->find($post->category_id);

?>


<h1><?= $post->title; ?></h1>
<p><em> <?= $category->title ?> </em></p>
<p><?= $post->content; ?></p>