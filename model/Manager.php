<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=xxxxxxxxxxx;dbname=xxxxxxxxxxx;charset=utf8', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxx');
        return $db;
    }
}
