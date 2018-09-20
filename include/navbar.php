<!-- Navigation -->
<nav class="navbar navbar-default navbar-expand-lg navbar-static-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">Le blog d'écriture de Jean Forteroche</a>
        <div class="collapse navbar-collapse " id="navbarResponsive">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="index.php">Accueil</a>
                </li>
                <li><a href="index.php?action=creationUser">Créer un compte</a></li>
                <?php
                if(isset($_SESSION['userLevel']) && $_SESSION['userLevel'] == 'admin'){
                    ?>
                    <li class="nav-item">
                        <a href="index.php?action=admin">Administration</a>
                    </li>
                    <?php
                }
                ?>
            </ul>

        </div>

    </div>
</nav>

