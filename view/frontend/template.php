<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <link href="public/css/style.css" rel="stylesheet" />
</head>
<header>
    <form method="link" action="view/frontend/connexion.php"> <input type="submit" value="Connexion"></form>
    <form method="link" action="view/frontend/inscription.php"> <input type="submit" value="Inscription"></form>
</header>
<body>
    <?= $content ?>
</body>
</html>