<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projet d'étudiant Openclassrooms">
    <meta name="author" content="Caroline Moulin">

    <meta property="og:image" content="https://billet-simple-alaska.caroline-moulin.fr/public/images/adventure-alaska.jpg" />
    <meta property="og:url" content="https://billet-simple-alaska.caroline-moulin.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Billet simple pour l'Alaska par Jean forteroche" />
    <meta property="og:description" content="Projet d'étudiant Openclassrooms" />
    <!--Vcard twitter-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Billet simple pour l'Alaska" />
    <meta name="twitter:creator" content="Caroline Moulin" />

    <title><?= $title ?></title>
    <link href="public/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
    <?php include("include/navbar.php"); ?>
    <div id="content" class="container-fluid">
        <div class="row">
            <!-- Sidebar Widgets Column -->
            <div class="col-md-3">
                <!-- Login-->
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="card-header">Administrateur</h5>
                        <div class="input-group">
                            <?php include("include/authArea.php"); ?>
                        </div>
                    </div>
                </div>
                <div class="card my-4" id="quickNav">
                    <div class="card-body">
                        <h5 class="card-header">Accès rapide</h5>
                        <div class="input-group">
                            <ul>
                                <li><a href="index.php?action=admin">Accueil administration</a></li>
                                <li><a href="index.php?action=writeNewPost">Ecrire un nouveau chapitre</a></li>
                                <li><a href="index.php?action=managePosts">Gestion des chapitres</a></li>
                                <li><a href="index.php?action=manageComments">Gestion des commentaires</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Entries Column -->
            <div class="col-md-9">
                <h1 class="my-4"><strong>
                    </strong></h1>
                <h5>Vous êtes ici : <?php echo $title; ?> </h5>
                <?= $content ?>
                <p><a href="<?php echo $_SERVER["HTTP_REFERER"] ?>">Retour à la page Précédente</a></p>

            </div>
        </div>
        <!-- /.row -->
    </div>

    <!--footer-->
    <?php include("include/footer.php"); ?>
    <!--fin footer-->
</body>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=5p4fup4lu2igsx9kpwnux1w07u43qmarmzvw30gitrqyg2tl"></script>
<script>tinymce.init({ selector:'textarea' });</script>
<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.js "></script>
</html>