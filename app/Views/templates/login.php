<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/faviconLP.ico">
    <link rel="stylesheet" href="style/style.css">
    <title><?= App::getInstance()->title ?></title>
</head>
    <body>
        <div class="loginStyle">
            <?= $content; ?>
        </div>
    </body>
</html>