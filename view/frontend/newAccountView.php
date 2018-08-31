<?php $title = 'Création d\'un compte'; ?>

<?php ob_start(); ?>
<h1>Création d'un compte</h1>
<p><a href="../../index.php">Retour à l'accueil</a></p>

<form action="../../index.php?action=addMember" method="post">
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" />
    </div>
    <div>
        <label for="pass">Mot de passe</label>
        <input type="password" name="pass"/>
    </div>
    <div>
        <label for="pass2">Retapez votre mot de passe</label>
        <input type="password" name="pass2"/>
    </div>
    <div>
        <label for="email">Adresse email</label>
        <input type="email" name="email"/>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Créer mon compte</button>
    </div>
</form>

<?php
$content = ob_get_clean();

require('view/frontend/template.php'); ?>
