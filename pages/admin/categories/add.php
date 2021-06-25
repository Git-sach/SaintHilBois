<?php

use app\Help;
use core\HTML\Form;
use core\auth\DBAuth;

$table = App::getInstance()->getTable('Category');
if(!empty($_POST)){
    $result = $table->create(['title' => $_POST['title']]);
    if($result){
        header('Location: admin.php?p=categories.index');
    }
}
$form = new Form($_POST);
?>

<form method="post">
    <?= $form->input('title', 'Titre de l\'article') ?>
    <button>Sauvegarder</button>
</form>