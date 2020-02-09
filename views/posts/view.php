<!-- Title -->
<h1 class="mt-4"><?= $post['title'] ?></h1>

<!-- Author -->
<p class="lead">
    by
    <a href="#">Author</a>
</p>

<hr>

<!-- Date/Time -->
<p>Posted on <?= $post['created_at'] ?></p>

<hr>

<!-- Preview Image -->
<img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

<hr>

<!-- Post Content -->
<p class="lead">
    <?= $post['text'] ?>
</p>

<hr>

<a href="/blog/posts/edit/<?= $post['id'] ?>" class="btn btn-primary">Edit</a>


