<?php

use app\Help;
use core\HTML\Form;
use core\auth\DBAuth;

$table = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $table->update($_GET['id'], [
        'title' => $_POST['title']
    ]);
    if($result){
        ?>
        <div class="success">La catégorie a bien été sauvegardé</div>
        <?php
    }
}
$category = $table->find($_GET['id']);
$form = new Form($category);
?>

<form method="post">
    <?= $form->input('title', 'Titre de la catégorie') ?>
    <button>Sauvegarder</button>
</form>