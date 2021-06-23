<h1>Je suis la home page</h1>

<p><a href="index.php?p=single">Single</a></p>

<?php
use app\Help;
use app\App;
use app\Database;
use app\table\Articles;
use app\table\Categories;
?>

<div>
    <ul>
        <?php foreach(Articles::getLast() as $post): ?>
            <h2><a href="<?= $post->URL ?>"><?= $post->title ?></a></h2>
            <p><em><?= $post->category; ?></em></p>
            <p><?= $post->Extract; ?></p>
        <?php endforeach;?>
    </ul>
</div>

<hr>

<div>
    <ul>    
        <?php foreach(Categories::getAll() as $categorie):?>
            <li>
                <p><a href="<?= $categorie->URL ?>"> <?= $categorie->title ?> </a></p>
            </li>
            <?php endforeach ?>
    </ul>
</div>

