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
    <?php include("include/navbar.php"); ?>
    <div id="content" class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-11">
                <?= $content ?>
            </div>
        </div>
    </div>
    <!--footer-->
    <?php include("include/footer.php"); ?>
    <!--fin footer-->
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js "></script>
</html>