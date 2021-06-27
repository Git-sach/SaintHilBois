
<form method="post">
    <?= $form->input('title', 'Titre de l\'article') ?>
    <?= $form->input('content', 'Contenu', ['type' => 'textarea']) ?>
    <?= $form->select('category_id', 'Catégorie', $categories) ?>
    <button>Sauvegarder</button>
</form>