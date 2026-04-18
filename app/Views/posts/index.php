<?php return ["body" => function ($opt) { ?>
    <ul>
        <?php foreach ($opt["posts"] as $post) { ?>
            <li>
                <a href="/posts/view/<?= e($post["id"]) ?>"><?= e($post["content"]) ?></a>
            </li>
        <?php } ?>
    </ul>
<?php }]; ?>