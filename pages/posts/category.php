<?php

use app\Help;

$app = App::getInstance();
$category = $app->getTable('Category')->find($_GET['id']);

if($category === false){
    $app->notFound();
}
$articles = $app->getTable('Post')->lastByCategory($_GET['id']);
$categories = $app->getTable('Category')->all();

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
