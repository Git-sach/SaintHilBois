<?php

use core\HTML\Form;
use core\auth\DBAuth;

if(!empty($_POST)){
    $auth = new DBAuth(App::getInstance()->getDb());
    if($auth->login($_POST['username'], $_POST['password'])){
        header('Location: admin.php');
    } else {
        ?>
        <div class="alert">
            Identifiants incorrect
        </div>
        <?php
    }
}

$form = new Form($_POST);
?>

<form method="post">
    <?= $form->input('username', 'Pseudo') ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']) ?>
    <button>Envoyer</button>
</form>