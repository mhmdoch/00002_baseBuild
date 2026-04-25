<?php return ["body" => function ($opt) { ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?= $opt['post']['title'] ?></h2>
        <?= $opt['post']['subtitle'] ? "<h3>{$opt['post']['subtitle']}</h3>" : '' ?>

        <p class="blog-post-meta"><?= isset($opt['post']['published_at']) ? dateTimeFormatter($opt['post']['published_at']) : '<span class="color-red">not published</span>' ?> by <a href="#"><?= $opt['post']['email'] ?></a></p>
        <hr>
        <p><?= bbcode($opt['post']['content']) ?></p>
    </div>
<?php }]; ?>