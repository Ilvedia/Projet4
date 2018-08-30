<?php
require('controller/frontend.php');

$accesdenied = 'Vous tentez d\'accéder à un espace réservé aux administrateurs !';
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'creationUser') {
            require('view\frontend\newAccountView.php');
        }
        //Login d'un membre existant
        elseif ($_GET['action'] == 'login'){
            if (isset($_POST['userPseudo']) && !empty($_POST['userPseudo']) && isset($_POST['userPass']) && !empty($_POST['userPass']))
            {
                verifyMember($_POST['userPass'], $_POST['userPseudo']);
            }else{
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        //redirection vers la View de creation de membre
        elseif ($_GET['action'] == 'creationUser') {
            require('view/frontend/newAcountView.php');
        }
        //Creation d'un nouveau membre
        elseif ($_GET['action'] == 'addMember') {
            if (isset($_POST['pseudo']) && !empty($_POST['pseudo'])
                && isset($_POST['email']) && !empty($_POST['email'])
                && isset($_POST['pass']) && !empty($_POST['pass'])
                && isset($_POST['pass2']) && !empty($_POST['pass2']))
            {
                addMember($_POST['pseudo'], $_POST['email'], $_POST['pass'], $_POST['pass2']  );
            }else {
                throw new Exception('Tous les champs ne sont pas remplis');
            }
        }
        //Acces a la zone d'administration
        elseif($_GET['action'] == 'admin'){
            if(isset($_SESSION['userLevel']) && $_SESSION['userLevel'] == 'admin'){
                require('view/backend/adminPanelView.php');
            }else{
                throw new Exception($accesdenied);
            }
        }
        //logout membre
        elseif ($_GET['action'] == 'logout'){
            logout();
        }
    }
    else {
        listPosts();
    }

}
catch(Exception $e) {
    ob_start();
    ?>

        <div id="errorPage">
            <p><?php  echo 'Erreur : ' . $e->getMessage(); ?></p>
            <p>Retour à <a href="index.php">l'accueil</a></p>
        </div>

    <?php
    $content = ob_get_clean();
    require('view/frontend/template.php');
}


