<!DOCTYPE html>
<html lang="fr" class="h-100">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Img/faviconLP.ico">
        <link rel="stylesheet" href="stylePortfolio/navbar.css">
        <title> My Portfolio </title>
    </head>
    <body>
        <div class="body">
            <?= $content; ?>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="#">ACCUEIL</a></li>
                <li><a href="#">EXPERIENCES</a></li>
                <li><a href="#">PROJET</a></li>
                <li><a href="#">COMPETENCES</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>

        <script type="text/javascript" src="stylePortfolio/javaScript/navbar.js"></script>
    </body>
</html>