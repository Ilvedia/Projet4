<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Projet d'étudiant Openclassrooms.">
    <meta name="author" content="Caroline Moulin">

    <meta property="og:image" content="https://billet-simple-alaska.caroline-moulin.fr/public/images/adventure-alaska.jpg" />
    <meta property="og:url" content="https://billet-simple-alaska.caroline-moulin.fr/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Billet simple pour l'Alaska par Jean forteroche" />
    <meta property="og:description" content="Projet d'étudiant Openclassrooms." />
    <!--Vcard twitter-->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="Billet simple pour l'Alaska" />
    <meta name="twitter:creator" content="Caroline Moulin" />

    <title><?= $title ?></title>
    <link href="public/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<!--début nav-->
<?php include("include/navbar.php"); ?>
<!-- fin nav-->
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="thumbnail">
                    <img src="public/images/adventure-alaska.jpg" alt="Montagne Alaska" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <!--login-->
                <div class="well">
                    <h5>Espace membre</h5>
                    <div class="input-group">
                        <?php include("include/authArea.php"); ?>
                    </div>
                </div>
            </div>
            <div class="col-offset-md-1 col-md-8">
                <?= $content ?>
            </div>
        </div>
    </div>
<!--footer-->
<!--fin footer-->
</body>
</html>