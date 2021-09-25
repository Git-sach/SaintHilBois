<link rel="stylesheet" href="style/creation/posts/show.css">

<div class="contentCreationShow">
    <div class="head">
        <img class="img" src=<?= $post->img == null ? "http://via.placeholder.com/200x120" : "imgdata/$post->img"?>>
        <div class="inf">
            <h1><?= $post->title; ?></h1>
            <div class="em">
                <p><em> <?= $category->title ?> </em></p>
                <p><em> <?= $post->getdate()->format('jS F Y') ?> </em></p>
            </div>
            <div class="carac">
                <div class="mention">
                    <img class="logo" src="img/hauteur.png">
                    <p>40cm</p>
                </div>
                <div class="mention">
                    <img class="logo" src="img/largeure.png">
                    <p>50cm</p>
                </div>
                <div class="mention">
                    <img class="logo" src="img/poid.png">
                    <p>45g</p>
                </div>
                <div class="mention">
                    <img class="logo" src="img/materiau.png">
                    <p>Peuplier</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <p><?= $post->content; ?></p>
    </div>

    <div class="contentTitle">
        <p class="Title">VOUS AIMEREZ AUSSI</p>
    </div>

    <div class="trioCard">
        <ul class="cards">
            <?php foreach($cards as $card): ?>
                <div class="card">
                    <img class="imgCard" src=<?= $card->img == null ? "http://via.placeholder.com/200x120" : "imgdata/$card->img"?>>
                    <div class="textCard">
                        <div class="titleCard"><a href="<?= $card->URL ?>"><?= $card->title ?></a></div>
                        <p class="category"><em><?= $card->category === null ? $card->category="Autre" : $card->category?></em></p>
                    <p><em><?= $post->getdate()->format('jS F Y') ?></em></p>
                        <p><?= $card->Extract; ?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </ul>
    </div>

    <div class="contentTitle">
        <p class="Title">LESSEZ UN COMMENTAIRE</p>
    </div>

    <div class="commenteSpace">
        <form method="post">
            <input required type="text" class="text-input" name="name" placeholder="Votre nom">
            <input required type="text" class="text-input" name="mail" placeholder="Votre mail">
            <textarea required name="comment" class="text-area" placeholder="Votre commentaire"></textarea>
            <button type="submite" class="btn_success">Envoyer</button>
        </form>   
    </div>
</div>
