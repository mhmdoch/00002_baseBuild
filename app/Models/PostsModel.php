<?php

class PostsModel extends z_model
{



    public function getPosts(): array
    {
        $sql = "SELECT * FROM `posts`";
        return $this->exec($sql)->resultToArray();
    }


    public function getById($postId): array
    {
        $sql = "SELECT *
                    FROM `posts`
                    WHERE `id` = ?";
        return $this->exec($sql, "i", $postId)->resultToLine();
    }


    public function deletePost($postId)
    {
        $sql = "DELETE 
                    FROM `posts` 
                    WHERE `id` = ?";
        $this->exec($sql, "i", $postId);
    }
}
