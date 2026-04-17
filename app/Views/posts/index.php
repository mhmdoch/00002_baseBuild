<?php return ["body" => function ($opt) { ?>
    <ul>
        <?php foreach ($opt["posts"] as $post) { ?>
            <li>
                <?= e($post["content"]) ?>
            </li>
        <?php } ?>
    </ul>
<?php }]; ?>