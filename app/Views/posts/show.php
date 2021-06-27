<h1><?= $post->title; ?></h1>

<p><em> <?= $category == null ? "Autre" : $category->title ?> </em></p>
<p><?= $post->content; ?></p>