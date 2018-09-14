<?php
require_once("Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($post_id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($post_id));
        $post = $req->fetch();

        return $post;
    }

    public function writePost($title, $content)
    {
        $db = $this->dbConnect();
        $post = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
        $affectedLines = $post->execute(array($title, $content));
        return $affectedLines;
    }

    public function postEdit($id, $title, $content){
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $post = $req->execute(array($title, $content, $id ));
        return $post;
    }
}