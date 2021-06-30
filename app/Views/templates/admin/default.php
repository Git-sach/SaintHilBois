<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/faviconLP.ico">
    <link rel="stylesheet" href="style/style.css">
    <title><?= App::getInstance()->title ?></title>

</head>

    <nav class="menu">
        <ul>
            <li><a class="<?= App::getMenu() == 'home' ? 'active' : ''?>" href="?p=home.admin.index">Home</a></li>
            <li><a class="<?= App::getMenu() == 'creation' ? 'active' : ''?>" href="?p=creation.admin.posts.index">Cration</a></li>
            <li><a class="<?= App::getMenu() == 'about' ? 'active' : ''?>" href="?p=about.admin.index">About</a></li>
            <li><a class="<?= App::getMenu() == 'contact' ? 'active' : ''?>" href="?p=contact.admin.index">Contact</a></li>
        </ul>
    </nav>

    <hr>

    <body>
    
        <?= $content; ?>

    </body>
</html>