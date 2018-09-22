<?php
require_once("Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT members.pseudo, comments.id, comments.comment, comments.status, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM members INNER JOIN comments ON members.id = comments.member_id WHERE comments.post_id = ? ORDER BY comments.comment_date DESC');
        $comments->execute(array($postId));
        return $comments;
    }

    public function postComment($post_id, $member_id, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(post_id, member_id, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($post_id, $member_id, $comment));
        return $affectedLines;
    }

    public function getAllComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT members.pseudo, comments.id, comments.post_id, comments.comment, comments.status, DATE_FORMAT(comments.comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM members INNER JOIN comments ON members.id = comments.member_id ORDER BY comments.comment_date DESC');
        return $comments;
    }

    public function warnedCom($comId)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('UPDATE comments SET status="warning" WHERE id='.$comId);
        $affectedLines = $comment->execute(array($comId));
        return $affectedLines;
    }

    public function getComment($comId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, comment, status FROM comments WHERE id = ?');
        $req->execute(array($comId));
        $comment = $req->fetch();
        return $comment;
    }

    public function getPostByComment($comId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT post_id FROM comments WHERE id = ?');
        $req->execute(array($comId));
        $postId = $req->fetch();
        return $postId;
    }

    public function commentEdit($id, $comment, $status)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE comments SET id = ?, comment = ?, status = ? WHERE id ='.$id);
        $affectedLines = $req->execute(array($id, $comment, $status));
        return $affectedLines;
    }

    public function commentDelete($comId)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare("DELETE FROM comments WHERE id=".$comId);
        $affectedLines = $comment->execute(array($comId));
        return $affectedLines;
    }

}