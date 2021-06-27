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
            <li><a href="#">Home</a></li>
            <li><a href="?p=creation.posts.index">Cration</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <hr>

    <div>
        <a href="?p=creation.admin.posts.index">[Admin space]</a>
    </div>

    <body>
    
        <?= $content; ?>

    </body>
</html>