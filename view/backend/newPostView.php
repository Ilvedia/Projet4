<?php $title = 'Création d\'un chapitre'; ?>

<?php ob_start(); ?>
<h1>Création d'un nouveau chapitre</h1>

<form action="index.php?action=newPost" method="post">
    <div>
        <label for="title">Titre</label>
        <input type="text" id="title" name="title" />
    </div>
    <div>
        <label for="content">Contenu</label>
        <input type="text" id="content" name="content"/>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Créer le chapitre</button>
    </div>
</form>

<?php
$content = ob_get_clean();

require('view/backend/template.php'); ?>
