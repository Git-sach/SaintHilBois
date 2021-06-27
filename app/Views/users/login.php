<?php if($errors): ?>
    <div class="alert">
        Identifiants incorrects.
    </div>
<?php endif ?>

<form method="post">
    <?= $form->input('username', 'Pseudo') ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']) ?>
    <button>Envoyer</button>
</form>