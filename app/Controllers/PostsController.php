<?php

class PostsController extends z_controller
{

    public function action_index(Request $req, Response $res)
    {
        $posts = $req->getModel("Posts")->getPosts();

        return $res->render("posts/index", [
            "posts" => $posts,
        ]);
    }


    public function action_view(Request $req, Response $res)
    {
        //$req->checkPermission("employee.view");

        // Retrives URL parameters (Offset, Length)
        $postId = $req->getParameters(0, 1);

        $post = $req->getModel("Posts")->getPostById($postId);

        return $res->render("posts/view.php", [
            "posts" => $post
        ]);
    }
}
