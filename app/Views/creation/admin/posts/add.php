<div class="contentCreationAdd">
    <form method="post" enctype="multipart/form-data">
        <div class="flexRow">
            <?= $form->input('title', 'Titre de l\'article') ?>
            <div class="spaceVer"></div>
            <?= $form->select('category_id', 'Catégorie', $categories) ?>
        </div>
        <?= $form->input('content', 'Contenu', ['type' => 'textarea']) ?>
        <label for="file">Sélectionner une image pour l'article</label>
        <input type="file" id="file" name="file">
        <button class="btn_primary">Sauvegarder</button>
    </form>
</div>

