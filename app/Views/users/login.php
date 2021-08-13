<link rel="stylesheet" href="/style/commun/commun.css">
<link rel="stylesheet" href="style/users/login.css">

<?php if($errors): ?>
    <div class="alert">
        Identifiants incorrects.
    </div>
<?php endif ?>

<div class="contentLogin">
    <form method="post">
        <?= $form->input('username', 'Pseudo') ?>
        <?= $form->input('password', 'Mot de passe', ['type' => 'password']) ?>
        <button class="btn_success">S'identifier</button>
    </form>
</div>