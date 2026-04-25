<?php return ["body" => function ($opt) { ?>







    <div>
        <?php foreach ($opt["posts"] as $post) { ?>







            <div class="blog-post">
                <h2 class="blog-post-title"><?= $post['title'] ?></h2>
                <?= $post['subtitle'] ? "<h3>{$post['subtitle']}</h3>" : '' ?>

                <p class="blog-post-meta"><?= isset($post['published_at']) ? dateTimeFormatter($post['published_at']) : '<span class="color-red">not published</span>' ?> by <a href="#"><?= $post['email'] ?></a></p>
                <hr>
                <p><?= bbcode($post['content']) ?></p>
            </div>

        <?php } ?>
    </div>



    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled">Newer</a>
    </nav>




<?php }]; ?>