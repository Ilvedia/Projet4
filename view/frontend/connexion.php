<?php $title = 'Connexion à votre compte'; ?>

<?php ob_start(); ?>
<h1>Connexion à votre compte</h1>
<p><a href="index.php">Retour à l'accueil</a></p>

<form action="index.php?action=addMember&amp;id=<?= $member['id'] ?>" method="post">
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" />
    </div>
    <div>
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass"/>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php
$content = ob_get_clean();

require('template.php'); ?>
