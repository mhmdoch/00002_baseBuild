<?php return ["body" => function ($opt) { ?>
    <?php foreach ($opt["posts"] as $post) { ?>




        <div class="blog-post">
            <h2 class="blog-post-title"><?= $post['title'] ?></h2>
            <?= $post['subtitle'] ? "<h3>{$post['subtitle']}</h3>" : '' ?>

            <p class="blog-post-meta"><?= dateTimeFormatter($post['published_at']) ?> by <a href="#"><?= $post['email'] ?></a></p>
            <hr>
            <p><?= $post['content'] ?></p>
        </div>
    <?php } ?>

<?php }]; ?>