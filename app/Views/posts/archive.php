<?php return ["body" => function ($opt) { ?>
    <ul>
        <?php foreach ($opt["posts"] as $post) { ?>
            <li>
                <a href="/posts/view/<?= e($post["id"]) ?>"><?= e($post["content"]) ?></a>
                <button class="delete-post" data-id="<?= e($post["id"]) ?>">Delete</button>
            </li>
        <?php } ?>
    </ul>

<?php }]; ?>