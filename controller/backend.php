<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function newPost($title, $content)
{
    $PostManager = new PostManager();
    $affectedLines = $PostManager->writePost($title, $content);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter un chapitre');
    }
    else {
        header('Location: index.php?action=admin');
    }
}

function editPost ($id, $title, $content)
{
    $PostManager = new PostManager();
    $affectedLines = $PostManager->postEdit($id, $title, $content);
    if ($affectedLines === false) {
        throw new Exception('Impossible de modifier le chapitre');
    }
    else{
        header('location: index.php?action=post&id='.$id);
    }
}