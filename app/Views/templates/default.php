<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/faviconLP.ico">
    <title><?= App::getInstance()->title ?></title>

</head>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="?p=creation.post.index">Cration</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <body>
    
        <?= $content; ?>

    </body>
</html>