<?php return ["body" => function ($opt) { ?>
    <ul>
        <?php foreach ($opt["posts"] as $post) { ?>
            <li>
                <a href="/posts/view/<?= e($post["id"]) ?>"><?= e($post["content"]) ?></a>
                <button class="delete-post" data-id="<?= e($post["id"]) ?>">Delete</button>
            </li>
        <?php } ?>
    </ul>



    <script>
        $(".delete-post").click(function() {
            var id = $(this).data("id");

            Z.Request.action('delete-post', {
                postId: id
            }, (res) => {
                if (res.result == 'success') {
                    location.reload();
                    return;
                }
                alert("An error occurred");
            });
        });
    </script>
<?php }]; ?>