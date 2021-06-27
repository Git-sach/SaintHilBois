<h1>adminisitrer les articles</h1>

<p>
    <a href="?p=admin.posts.add" class="btn_green">ajouter</a>
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
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->title ?></td>
                <td>
                    <a class="btn" href="?p=admin.posts.edit&id=<?= $post->id ?>">Editer</a>
                    <form action="?p=admin.posts.delete" method="post">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button type="submit" class="btn_red">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>