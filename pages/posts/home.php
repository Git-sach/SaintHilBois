<h1>Je suis la home page home</h1>

<?php
use app\Help;
?>

<div>
    <ul>
        <?php foreach(App::getInstance()->getTable('Post')->last() as $post): ?>
            <h2><a href="<?= $post->URL ?>"><?= $post->title ?></a></h2>
            <p><em><?= $post->category; ?></em></p>
            <p><?= $post->Extract; ?></p>
        <?php endforeach;?>
    </ul>
</div>

<hr>

<div>
    <ul>    
        <?php foreach(App::getInstance()->getTable('Category')->all() as $categorie):?>
            <li>
                <p><a href="<?= $categorie->URL ?>"> <?= $categorie->title ?> </a></p>
            </li>
            <?php endforeach ?>
    </ul>
</div>

