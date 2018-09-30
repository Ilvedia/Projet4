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
    <!--pour éviter faille XSS avec TinyMCE-->
    <meta http-equiv="Content-Security-Policy" content="default-src 'none'; script-src 'self' *.tinymce.com; connect-src 'self' *.tinymce.com; img-src 'self' *.tinymce.com data: blob:; style-src 'self' 'unsafe-inline' *.tinymce.com; font-src 'self' *.tinymce.com;" />

    <title><?= $title ?></title>
    <link href="public/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<!--début nav-->
<?php include("include/navbar.php"); ?>
<!-- fin nav-->
    <div id="content" class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="thumbnail">
                    <img src="public/images/adventure-alaska.jpg" alt="Montagne Alaska" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--login-->
                <div class="well">
                    <h5>Espace membre</h5>
                    <div class="input-group">
                        <?php include("include/authArea.php"); ?>
                    </div>
                </div>
            </div>
            <div class="col-offset-sm-1 col-sm-8">
                <?= $content ?>
            </div>
        </div>
    </div>
<!--footer-->
<?php include("include/footer.php"); ?>
<!--fin footer-->
</body>
<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.js"></script>
</html>