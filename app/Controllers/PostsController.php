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

    public function action_archive(Request $req, Response $res)
    {
        // also klar, es fetched das $year, aber mhm, verstehe nicht, was es tut
        $year = $req->getParameters(0, 1);

        $posts = $req->getModel("Posts")->getPostsByYear($year);

        return $res->render("posts/archive", [
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
            "post" => $post
        ]);
    }


    // works now and always worked, double saves were caused by Live Server
    public function action_add(Request $req, Response $res)
    {
        //$req->checkPermission("posts.add");

        if ($req->hasFormData()) {

            $formResult = $req->validateForm([
                (new FormField("title"))->required()->length(3, 255),
                (new FormField("subtitle"))->length(0, 500),
                (new FormField("language"))->required()->length(2, 2),
                (new FormField("content"))->required()->length(5, 10000),
                (new FormField("z_user_id"))->required(),
            ]);


            if ($formResult->hasErrors) {
                return $res->formErrors($formResult->errors);
            }

            $res->insertDatabase("posts", $formResult);
            return $res->success();
        }
        return $res->render("posts/add");
    }
}
