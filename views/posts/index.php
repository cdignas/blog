<h1 class="my-4">Check24 Blog
    <small>Posts</small>
</h1>

<?php
foreach ($posts as $post) { ?>
    <!-- Blog Post -->
    <div class="card mb-4">
        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
        <div class="card-body">
            <h2 class="card-title"><?= $post['title'] ?></h2>
            <p class="card-text"><?= substr($post['text'], 0, 150) ?></p>
            <a href="/blog/posts/view/<?= $post['id'] ?>" class="btn btn-primary">Read More &rarr;</a>
        </div>
        <div class="card-footer text-muted">
            Posted on <?= $post['created_at'] ?> by
            <a href="#">Author</a>
        </div>
    </div>

<?php } ?>

<!-- Pagination -->
<ul class="pagination justify-content-center mb-4">
    <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
    </li>
    <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
    </li>
</ul>