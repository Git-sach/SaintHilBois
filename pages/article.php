<?php

use app\table\Articles;
use app\App;

$post = Articles::find($_GET['id']);
if($post === false){
    App::notFound();
}

?>

<h1><?= $post->title; ?></h1>

<p><?= $post->content; ?></p>