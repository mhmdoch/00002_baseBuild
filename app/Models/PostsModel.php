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


    public function addPost($title, $subtitle, $language, $content, $userId)
    {
        $sql = "INSERT INTO `posts` (`title`, `subtitle`, `language`, `content`, `z_user_id`, `is_published`) 
            VALUES (?, ?, ?, ?, ?, 0)";

        $this->exec($sql, "ssssi", $title, $subtitle, $language, $content, $userId);
    }
}
