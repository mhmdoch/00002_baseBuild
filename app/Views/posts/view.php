<?php return ["body" => function ($opt) { ?>














    <div class="blog-post">
        <h2 class="blog-post-title"><?= $opt['post']['title'] ?></h2>
        <?= $opt['post']['subtitle'] ? "<h3>{$opt['post']['subtitle']}</h3>" : '' ?>

        <p class="blog-post-meta"><?= dateTimeFormatter($opt['post']['published_at']) ?> by <a href="#">Mark</a></p>
        <hr>
        <p><?= $opt['post']['content'] ?></p>
    </div>
<?php }]; ?>