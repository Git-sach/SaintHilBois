<!-- <h1> <?= $category->title ?> </h1> -->
<div class="creationIndex">
    <ul class="cards">
        <?php foreach($articles as $post): ?>
            <div class="card">
                <img class="imgCard" src="http://via.placeholder.com/200x120">
                <div class="textCard">
                <div class="titleCard"><a href="<?= $post->URL ?>"><?= $post->title ?></a></div>
                    <p><em><?= $post->category; ?></em></p>
                    <p><?= $post->Extract; ?></p>
                </div>
            </div>
        <?php endforeach;?>
    </ul>

    <hr class="hrVer">

    <ul class="categories">   
        <div class="contentCategories">
            <div class="titleCategories">Categories:</div>  
            <?php foreach($categories as $categorie):?>
                <li class="category">
                    <p><a class="<?= App::getCateID() == $categorie->id ? 'active' : ''?>" href="<?= $categorie->URL ?>"> <?= $categorie->title ?> </a></p>
                </li>
            <?php endforeach ?>
        </div>
    </ul>
</div>
