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

function viewEditPost ($postId)
{
    $postManager = new postManager();
    $post = $postManager->getPost($postId);
    require ('view/backend/editPostView.php');
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

function listPostsBack ()
{
    $PostManager = new PostManager();
    $posts = $PostManager->getPosts();
    require('view/backend/managePostsView.php');
}

function deletePost($post_id)
{
    $postManager = new PostManager();
    $affectedLines = $postManager->postDelete($post_id);
    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer le chapitre');
    }
    else {
        header('Location: index.php?action=managePosts');
    }
}

function listCommentsBack ()
{
    $commentManager = new CommentManager();
    $comments = $commentManager->getAllComments();
    require('view/backend/manageCommentsView.php');
}

function signalCom($comId)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->warnedCom($comId);
    try{
        if ($affectedLines === false) {
            throw new Exception('Impossible de signaler le commentaire');
        }else {
            throw new Exception('Commentaire signalé avec succès ! ');
        }
    }

    catch(Exception $e){
        $message = $e->getMessage();
        //On récupère l'id de l'article correspondant au commentaire
        $affectedLines = $commentManager->getPostByComment($comId);
        $post_id = $affectedLines[0];
        //On envoi à la fonction post l'id de l'article qui récupère le chapitre et les com liés
        post($post_id, $message);
    }
}

function viewEditCom($comId)
{
    $commentManager = new CommentManager();
    $comment = $commentManager->getComment($comId);
    require('view/backend/editCommentView.php');
}

function editCom($id, $comment, $status)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->commentEdit($id, $comment, $status);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'éditer le commentaire');
    }
    else {
        header('location:index.php?action=manageComments');
    }
}
function deleteCom($comId)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->commentDelete($comId);
    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer le chapitre');
    }
    else {
        header('location:index.php?action=manageComments');
    }
}
function listUsers()
{
    $userManager = new UserManager();
    $users = $userManager->listUsers();
    require('view/backend/manageUsersView.php');
}

function deleteUser($userId)
{
    $userManager = new UserManager();
    $affectedLines = $userManager->userDelete($userId);
    if ($affectedLines === false) {
        throw new Exception('Impossible de supprimer ce membre');
    }
    else {
        header('Location: index.php?action=manageUsers');
    }
}

