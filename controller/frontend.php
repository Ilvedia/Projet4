<?php

// Chargement des classes
require_once('model\PostManager.php');
require_once('model\CommentManager.php');
require_once('model\NewMemberManager.php');

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view\frontend\listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view\frontend\postView.php');
}

function addComment($postId, $memberId, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $memberId, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function addMember($pseudo, $email, $pass, $pass2)
{
    try
    {
        $userManager = new UserManager();
        //Vérification de l'existance ou non du pseudo dans la bdd et verification sur les champs du formulaire
        $checkMember = $userManager->checkPseudo($pseudo);
        if(!$checkMember){
            if(preg_match('#[a-zA-Z0-9_]#', $pseudo)){
                if($pass == $pass2){
                    if(preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)){
                        $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
                        //envoi au modele pour insertion dans BDD
                        $push = $userManager->pushMember($pseudo, $pass_hash, $email);
                        throw new Exception('Votre compte a été créé avec succès');
                    }else{
                        throw new Exception('veuillez vérifier votre adresse email');
                    }
                }else{
                    throw new Exception('Les mots de passe ne correspondent pas');
                }
            }else{
                throw new Exception('Un ou plusieurs caractères non autorisé dans le mot de passe');
            }
        }else{
            throw new Exception('Ce pseudo est déjà utilisé');
        }
    }
    catch(Exception $e){
        $info = $e->getMessage();
        require('view/frontend/newAccountView.php');
    }
}