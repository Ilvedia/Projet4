<?php
require_once("Manager.php");

class CommentManager extends Manager
{
    public function getComments($post_id)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, member_id, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($post_id));

        return $comments;
    }

    public function postComment($post_id, $member_id, $comment)
    {
        $db = $this->dbConnect();
        $link = $db->prepare('SELECT members.pseudo, comments.comment FROM members INNER JOIN comments ON member_id = comments.member_id');
        $comments = $link->prepare('INSERT INTO comments(post_id, member_id, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($post_id, $member_id, $comment));

        return $affectedLines;
    }
}