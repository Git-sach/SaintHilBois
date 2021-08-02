<div class="contentCreationEdit">
    <form method="post" enctype="multipart/form-data">
        <img src=<?= $post->img == null ? "http://via.placeholder.com/200x120" : "imgdata/$post->img"?>
        class="image"
        alt="Image">
        <label for="file">Image de l'article</label>
        <input type="file" id="file" name="file">
        
        <div class="flexRow">
            <?= $form->input('title', 'Titre de l\'article') ?>
            <div class="spaceVer"> </div>
            <?= $form->select('category_id', 'Catégorie', $categories) ?>
        </div>
        <?= $form->input('content', 'Contenu', ['type' => 'textarea']) ?>
        <button class="btn_primary">Sauvegarder</button>
    </form>
</div> 