<?php
//Si Mmembre connecté
if (isset($_SESSION['pseudo']))
{
    if($_SESSION['userLevel'] == 'admin' ){
        ?>
        Connecté en tant qu'administrateur :<strong> <?php echo htmlspecialchars($_SESSION['pseudo']);
    }else{
        ?></strong>
        Vous êtes connecté en tant que membre : <strong><?php echo htmlspecialchars($_SESSION['pseudo']);
    }
    ?></strong>
    <p><a href="index.php?action=logout">Se déconnecter</a></p>
    <?php
}
else{
    //Si pas de variable de session on affiche la creation de compte et le form de login
    include('login.php');
    include('accountCreation.php');
}