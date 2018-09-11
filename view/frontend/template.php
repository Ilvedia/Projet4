<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="public/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<!--début nav-->
<?php include("include/navbar.php"); ?>
<!-- fin nav-->
    <div id="content" class="container-fluid">
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