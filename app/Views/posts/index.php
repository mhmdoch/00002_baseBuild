<?php return ["body" => function ($opt) { ?>


    <div>
        <?php foreach ($opt["posts"] as $post) { ?>

            <div>
                <a href="/posts/view/<?= e($post["id"]) ?>"><?= e($post["title"]) ?></a>
                <button class="delete-post" data-id="<?= e($post["id"]) ?>">Delete</button>
            </div>

        <?php } ?>
    </div>


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