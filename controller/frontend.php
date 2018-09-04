<?php

// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/NewMemberManager.php');
require_once('model/AuthManager.php');
session_start();

function listPosts()
{
    $postManager = new PostManager(); // Création d'un objet
    $posts = $postManager->getPosts(); // Appel d'une fonction de cet objet

    require('view/frontend/listPostsView.php');
}
//Ajouter un commentaire
function addComment($post_id, $member_id, $comment)
{
    $commentManager = new CommentManager();
    $affectedLines = $commentManager->postComment($post_id, $member_id, $comment);
    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $post_id);
    }
}

//VERIFICATION DE L'EXISTENCE D'UN MEMBRE EN BDD
function verifyMember($userPass, $userPseudo)
{
    $authManager = new AuthManager();
    $member = $authManager->getMember($userPseudo);
    //comparaison du mdp saisie avec le mdp hash de la bdd
    $isPasswordCorrect = password_verify($userPass, $member['pass']);
    //Si $member=false le membre n'est pas existant en bdd
    try{
        if (!$member)
        {
            throw new Exception('Mauvais utilisateur ou mot de passe!');
        }
        else
            //Le membre existe 2 possibilité le mdp correspond
        {
            if ($isPasswordCorrect) {
                $_SESSION['id'] = $member['id'];
                $_SESSION['pseudo'] = $member['pseudo'];
                $_SESSION['pass'] = $member['pass'];
                $_SESSION['email'] = $member['email'];
                $_SESSION['userLevel'] = $member['userLevel'];
                //on redirige vers la page d'accueil qui prendra en compte les variable de session
                header('location:index.php');
            }
            //Le mdp ne correspond pas
            else {
                throw new Exception('Mauvais utilisateur ou mot de passe!');
            }
        }
    }
    catch(Exception $e){
        $authInfo = $e->getMessage();
        ob_start();
        ?>
        <div id="wrongPass">
            <p><?php  echo 'Erreur : ' . $e->getMessage(); ?></p>
            <?php include('include/login.php');?>
            <p>Pas de compte ? <a href="index.php?action=creationUser">Créer un compte</a></p>
        </div>
        <?php
        $content = ob_get_clean();
        require('view/frontend/template.php');
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

function logout()
{
    session_destroy ();
    header('location:index.php');
}