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
            <li class="home"><a class="<?= App::getMenu() == 'home' ? 'active' : ''?>" href="?p=home.index">Home</a></li>
            <li><a class="<?= App::getMenu() == 'creation' ? 'active' : ''?>" href="?p=creation.posts.index">Cration</a></li>
            <li><a class="<?= App::getMenu() == 'about' ? 'active' : ''?>" href="?p=about.index">About</a></li>
            <li><a class="<?= App::getMenu() == 'contact' ? 'active' : ''?>" href="?p=contact.index">Contact</a></li>
        </ul>
    </nav>

    <hr>

    <div class="admin">
        <a href="?p=creation.admin.posts.index">[Admin space]</a>
    </div>

    <body>
    
        <?= $content; ?>

    </body>
</html>