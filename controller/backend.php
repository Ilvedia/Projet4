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

function viewEditPost ($postId)
{
    $postManager = new postManager();
    $post = $postManager->getPost($postId);
    require ('view/backend/editPostView.php');
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

function listUsers()
{
    $userManager = new UserManager();
    $users = $userManager->listUsers();
    require('view/backend/manageUsersView.php');
}