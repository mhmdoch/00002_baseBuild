<?php

class PostsController extends z_controller
{

    public function action_index(Request $req, Response $res)
    {
        $posts = $req->getModel("Posts")->getPosts();


        if ($req->isAction("delete-post")) {
            //$req->checkPermission("post.delete");

            $postId = $req->getPost("postId");

            $req->getModel("Posts")->deletePost($postId);
            return $res->success();
        }


        return $res->render("posts/index", [
            "posts" => $posts,
        ]);
    }


    public function action_view(Request $req, Response $res)
    {
        //$req->checkPermission("employee.view");

        // Retrives URL parameters (Offset, Length)
        $postId = $req->getParameters(0, 1);

        $post = $req->getModel("Posts")->getById($postId);

        return $res->render("posts/view.php", [
            "content" => $post['content']
        ]);
    }
}
