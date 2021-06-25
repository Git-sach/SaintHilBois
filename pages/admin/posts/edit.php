<?php

use app\Help;
use core\HTML\Form;
use core\auth\DBAuth;

$postTable = App::getInstance()->getTable('Post');
if(!empty($_POST)){
    $result = $postTable->update($_GET['id'], [
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'category_id' => $_POST['category_id']
    ]);
    if($result){
        ?>
        <div class="success">L'article a bien été sauvegardé</div>
        <?php
    }
}
$post = $postTable->find($_GET['id']);
$categories = App::getInstance()->getTable('Category')->list('id', 'title');
$form = new Form($post);
?>

<form method="post">
    <?= $form->input('title', 'Titre de l\'article') ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']) ?>
    <?= $form->select('category_id', 'Catégorie', $categories) ?>
    <button>Sauvegarder</button>
</form>