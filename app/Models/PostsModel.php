<?php

class PostsModel extends z_model
{

    public function getPosts(): array
    {
        $sql = "SELECT * FROM `posts` ORDER BY `published_at` DESC";
        return $this->exec($sql)->resultToArray();
    }

    public function getById($postId): array
    {
        $sql = "SELECT *
                FROM `posts`
                JOIN `z_user` AS u
                ON z_user_id = u.id
                WHERE `posts`.id = ?";
        return $this->exec($sql, "i", $postId)->resultToLine();
    }

    public function getPostsByYear($year): array
    {
        $sql = "SELECT * 
                FROM `posts`
                JOIN `z_user` u ON z_user_id = u.id
                WHERE YEAR(`published_at`) = ? and `is_published` = 1
                ORDER BY `published_at` DESC";
        return $this->exec($sql, "i", $year)->resultToArray();
    }

    public function getPostsByYearAndMonth($year, $month): array
    {
        $sql = "SELECT * 
                FROM `posts`
                JOIN `z_user` u ON z_user_id = u.id
                WHERE YEAR(`published_at`) = ? and MONTH(`published_at`) = ? and `is_published` = 1
                ORDER BY `published_at` DESC";
        return $this->exec($sql, "ii", $year, $month)->resultToArray();
    }

    public function getPostsForSidebarArchive(): array
    {
        $sql = "SELECT * 
                FROM `posts`
                WHERE `is_published` = 1
                ORDER BY `published_at` DESC";
        return $this->exec($sql)->resultToArray();
    }

    public function deletePost($postId)
    {
        $sql = "DELETE 
                    FROM `posts` 
                    WHERE `id` = ?";
        $this->exec($sql, "i", $postId);
    }

    public function getSidebar()
    {
        $sql = "SELECT
                    COUNT(*) AS amount,
                    YEAR(`published_at`) AS `year`,
                    MONTH(`published_at`) AS `month`,
                    `published_at`
                FROM `posts`
                WHERE `is_published` = 1
                GROUP BY YEAR(`published_at`), MONTH(`published_at`)
                ORDER BY `published_at` DESC";

        return array_map(function (array $post): array {
            $publishedAt = strtotime($post["published_at"]);
            $post["month_formatted"] = date("F", $publishedAt);
            $post["month"] = date("m", $publishedAt);
            return $post;
        }, $this->exec($sql)->resultToArray());
    }
}
