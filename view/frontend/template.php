<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="public/css/style.css" rel="stylesheet" />
</head>
<header>
    <?php include("include/menu.php"); ?>
    <?php include("include/authArea.php"); ?>
    <?php include("include/login.php");?>
</header>
<body>
    <?= $content ?>
</body>
</html>