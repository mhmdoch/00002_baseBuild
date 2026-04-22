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
                JOIN `z_user` u ON z_user_id = u.id
                WHERE `posts`.id = ?";
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
