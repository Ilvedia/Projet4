<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
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
</body>
</html>