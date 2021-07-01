
<div class="contentCreationEdit">
    <form method="post">
        <div class="flexRow">
            <?= $form->input('title', 'Titre de l\'article') ?>
            <div class="spaceVer"> </div>
            <?= $form->select('category_id', 'Catégorie', $categories) ?>
        </div>
        <?= $form->input('content', 'Contenu', ['type' => 'textarea']) ?>
        <button class="btn_primary">Sauvegarder</button>
    </form>
</div> 