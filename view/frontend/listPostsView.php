<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>

    <h1>Découvrez mon nouveau roman " Billet simple pour l'Alaska"</h1>
    <p>Derniers chapitres de mon nouveau roman :</p>


<?php
while ($data = $posts->fetch())
{
    ?>
    <div class="card mb-4">
        <div class="card-body">
            <h3 class="card-title"><?= htmlspecialchars($data['title']) ?></h3>
            <p class="card-text"><?= nl2br($data['post_summary'])?>...</p>
            <a href="index.php?action=post&amp;id=<?= $data['id'] ?>" class="btn btn-primary">Lire la suite</a>
        </div>
    </div>

    <?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>