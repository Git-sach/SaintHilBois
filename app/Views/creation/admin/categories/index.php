<link rel="stylesheet" href="style/creation/admin/categories/index.css">

<div class="container">
    <div class="nav">
        <ul>
            <li><a class="<?= App::getMenuCreationAdmin() == 'posts' ? 'active' : ''?>" href="?p=creation.admin.posts.index">Articles</a></li>
            <li><a class="<?= App::getMenuCreationAdmin() == 'categories' ? 'active' : ''?>" href="?p=creation.admin.categories.index">Categories</a></li>
        </ul>
    </div>

    <h1>Administration des categories</h1>

    <div class="categorys">
        <?= $alert ?>
        <div class="space"></div>
        <p>
            <?= $categories[0]->btn('?p=creation.admin.categories.add', 'btn_success', 'Ajouter');?>
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
                    <?php if($category->title != 'Autre'):?>
                        <tr>
                            <td><?= $category->id ?></td>
                            <td><?= $category->title ?></td>
                            <td>
                                <div class="actions">
                                    <?= $category->btn('?p=creation.admin.categories.edit&id=' . $category->id, 'btn_primary', 'Editer');?>
                                    <form action="?p=creation.admin.categories.delete" method="post">
                                        <input type="hidden" name="id" value="<?= $category->id ?>">
                                        <button type="submit" class="btn_danger">Supprimer</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endif ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
