<div id="menu-nav">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php?action=creationUser">Créer un compte</a> </li>
        <?php
            if(isset($_SESSION['userLevel']) && $_SESSION['userLevel'] == 'admin'){
                ?>
        <li><a href="index.php?action=admin">Administration</a></li>
        <?php
            }
        ?>
    </ul>
</div>