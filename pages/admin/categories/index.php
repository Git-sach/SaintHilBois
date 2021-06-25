<?php
$categories = App::getInstance()->getTable('Category')->all();
?>

<h1>adminisitrer les catégories</h1>

<p>
    <a href="?p=categories.add" class="btn_green">ajouter</a>
</p>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($categories as $category): ?>
            <tr>
                <td><?= $category->id ?></td>
                <td><?= $category->title ?></td>
                <td>
                    <a class="btn" href="?p=categories.edit&id=<?= $category->id ?>">Editer</a>
                    <form action="?p=categories.delete" method="post">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn_red">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>