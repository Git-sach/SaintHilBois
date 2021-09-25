<link rel="stylesheet" href="style/creation/admin/posts/index.css">

<div class="contentCreativAdmin">

    <div class="navCreationAdmin">
        <ul>
            <li><a class="<?= App::getMenuCreationAdmin() == 'posts' ? 'active' : ''?>" href="?p=creation.admin.posts.index">Articles</a></li>
            <li><a class="<?= App::getMenuCreationAdmin() == 'categories' ? 'active' : ''?>" href="?p=creation.admin.categories.index">Categories</a></li>
        </ul>
    </div>
    <h1>Administration des <span class="red">Articles</span></h1>

    <div class="creationArticleAdmin">
        <?= $alert ?>
        <div class="space"></div>
        
        <p>
            <?= $posts[0]->btn('?p=creation.admin.posts.add' , 'btn_success', 'Ajouter');?>
        </p>

        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Titre</td>
                    <td>Contenu</td>
                    <td>Date</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($posts as $post): ?>
                    <tr>
                        <td><?= $post->id ?></td>
                        <td><?= $post->title ?></td>
                        <td><?= substr($post->content,1,125) . '...' ?> </td> <!--TODO-->
                        <td><?= $post->getdate()->format('d-m-y') ?></td> <!--TODO-->
                        <td>
                            <div class="actions">
                                <?= $post->btn('?p=creation.admin.posts.edit&id=' . $post->id, 'btn_primary', 'Editer');?>
                                <form action="?p=creation.admin.posts.delete" method="post">
                                    <input type="hidden" name="id" value="<?= $post->id ?>">
                                    <button type="submit" class="btn_danger">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>