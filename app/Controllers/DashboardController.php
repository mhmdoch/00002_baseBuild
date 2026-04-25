<?php

class DashboardController extends z_controller
{

    public function action_index(Request $req, Response $res)
    {

        $posts = $req->getModel("Posts")->getPosts();


        return $res->render("example/dashboard", [
            "posts" => $posts,
        ]);
    }

    public function sidebar(Request $req, Response $res)
    {
        new App\Helper\DateHelper();

        $sideBarElements = $req->getModel("Posts")->getSidebar();
        $req->store["sideBarElements"] = $sideBarElements;
        return true;
    }
}
