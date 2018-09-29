<?php $title = 'Création d\'un chapitre'; ?>

<?php ob_start(); ?>
<h1>Création d'un nouveau chapitre</h1>

<form action="index.php?action=newPost" method="post">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titre du chapitre"  required>
    </div>
    <div class="form-group">
        <label>Contenu du chapitre</label><br>
        <textarea id="postContent" class="form-control" name="content" rows="15"></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Créer le chapitre</button>
    </div>
</form>

<?php
$content = ob_get_clean();

require('view/backend/template.php'); ?>
