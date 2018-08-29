<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="public/css/style.css" rel="stylesheet" />
</head>
<header>
    <?php include("include/login.php");?>
    <form method="link" action="view/frontend/newAccountView.php"> <input type="submit" value="Inscription"></form>
</header>
<body>
    <?= $content ?>
</body>
</html>