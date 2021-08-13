<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Img/faviconLP.ico">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="img/logo.png">
    <title><?= App::getInstance()->title ?></title>
</head>

    <nav class="menu">
        <ul>
            <li class="logo"><a href="http://localhost:8000/index.php?p=home.index">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 139 139" fill="none">
                <path d="M69.5323 0C83.2717 3.00424e-07 96.7026 4.0761 108.126 11.7129C119.55 19.3496 128.454 30.204 133.712 42.9035C138.97 55.603 140.346 69.5771 137.665 83.0588C134.985 96.5404 128.369 108.924 118.653 118.644C108.938 128.364 96.5602 134.983 83.0848 137.665C69.6094 140.346 55.6417 138.97 42.9482 133.71C30.2546 128.449 19.4052 119.541 11.772 108.112C4.1388 96.6829 0.0645884 83.2458 0.0645864 69.5H31.2795C31.2795 77.0692 33.523 84.4684 37.7262 90.762C41.9295 97.0555 47.9038 101.961 54.8936 104.857C61.8834 107.754 69.5747 108.512 76.995 107.035C84.4154 105.559 91.2314 101.914 96.5811 96.5614C101.931 91.2091 105.574 84.39 107.05 76.9662C108.526 69.5424 107.769 61.8475 104.873 54.8545C101.978 47.8614 97.075 41.8844 90.7844 37.6792C84.4938 33.4739 77.098 31.2294 69.5323 31.2294V0Z" fill="#CF2E06"/>
                <path d="M44.6029 0.44834H0V46.6107H31.2733L31.2397 31.7025H44.6029V0.44834Z" fill="#CF2E06"/>
                <path d="M50.755 50.714C50.755 50.714 75.1044 50.1407 81.9865 57.026C88.8686 63.9114 88.8686 75.0748 81.9865 81.9601C75.1044 88.8454 63.9462 88.8454 57.064 81.9601C50.1819 75.0748 50.755 50.714 50.755 50.714Z" fill="#CF2E06"/>
                </svg>
            </a></li>
            <li><a class="<?= App::getMenu() == 'home' ? 'active' : ''?>" href="?p=home.index">Home</a></li>
            <li><a class="<?= App::getMenu() == 'creation' ? 'active' : ''?>" href="?p=creation.posts.index">Creation</a></li>
            <li><a class="<?= App::getMenu() == 'about' ? 'active' : ''?>" href="?p=about.index">About</a></li>
            <li><a class="<?= App::getMenu() == 'contact' ? 'active' : ''?>" href="?p=contact.index">Contact</a></li>
        </ul>
    </nav>

    <hr>

    <!--
    <div class="admin">
        <a href="?p=creation.admin.posts.index">[Admin space]</a>
    </div>
    -->

    <body>
    
        <?= $content; ?>

    </body>

    <footer>

    </footer>
</html>