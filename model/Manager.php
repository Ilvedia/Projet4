<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=project;charset=utf8', 'root', '');
        return $db;
    }

    protected function dbLink()
    {
        $link = $db->prepare('SELECT c.member_id member_id, m.id member FROM members m INNER JOIN comments c ON c.member_id = m.id');
        return $link;
    }
}