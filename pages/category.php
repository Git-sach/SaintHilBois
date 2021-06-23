<?php

use app\Help;
use app\App;
use \app\Table\Categories;
use \app\Table\Articles;

$category = Categories::find($_GET['id']);
if($category === false){
    App::notFound();
}
$articles = Articles::lastByCategory($_GET['id']);
$categories = Categories::getAll();

?>

<h1> <?= $category->title ?> </h1>

<div>
    <ul>
        <?php foreach($articles as $post): ?>
            <h2><a href="<?= $post->URL ?>"><?= $post->title ?></a></h2>
            <p><em><?= $post->category; ?></em></p>
            <p><?= $post->Extract; ?></p>
        <?php endforeach;?>
    </ul>
</div>

<hr>

<div>
    <ul>    
        <?php foreach($categories as $categorie):?>
            <li>
                <p><a href="<?= $categorie->URL ?>"> <?= $categorie->title ?> </a></p>
            </li>
            <?php endforeach ?>
    </ul>
</div>
