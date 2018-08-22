<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
    <h1>Découvrez mon nouveau roman</h1>
    <p>Voici les derniers chapitres de mon nouveau roman intitulé "Billet simple pour l'Alaska</p>

<?php
while ($data = $posts->fetch())
{
    ?>
    <div class="chapters">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em> le <?= $data['creation_date_fr'] ?></em>
        </h3>
        <p>
            <?= nl2br(htmlspecialchars($data['content']))?>
            <br />
            <em><a href="view/frontend/postView.php?id=<?= $data['id'] ?>">Commentaires</a> </em>
        </p>
    </div>
    <?php
}
$posts->closeCursor();
$content = ob_get_clean();
require ('view/frontend/template.php');
?>