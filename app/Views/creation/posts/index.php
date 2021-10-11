<link rel="stylesheet" href="/style/commun/commun.css">
<link rel="stylesheet" href="style/creation/posts/index.css">

<div class="container">

    <form action="myservlet.do" method="POST">
        <select class="form-control" name="Test" onchange="this.form.submit()">
            <option value='test'>test</option>
            <option value='test2'>test2</option>
        </select>
    </form>

    <ul class="cards">
        <?php foreach($posts as $post): ?>
            <div class="card">
                <img class="imgCard" src=<?= $post->img == null ? "http://via.placeholder.com/200x120" : "imgdata/$post->img"?>>
                <div class="textCard">
                    <div class="titleCard"><a href="<?= $post->URL ?>"><?= $post->title ?></a></div>
                    <p class="category"><em><?= $post->category?></em></p>
                    <p><em><?= $post->getdate()->format('jS F Y') ?></em></p>
                    <p><?= $post->Extract; ?></p>
                </div>
            </div>
        <?php endforeach;?>
    </ul>

    <!-- <ul class="categories">
        <div class="contentCategories">  
            <div class="titleCategories">Categories:</div>  
            <?php foreach($categories as $categorie):?>
                <li class="category">
                    <p><em><a href="<?= $categorie->URL ?>"> <?= $categorie->title ?> </a></em></p>
                </li>
            <?php endforeach ?>
        </div>
    </ul> -->
</div>

