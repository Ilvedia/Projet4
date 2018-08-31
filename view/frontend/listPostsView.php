<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
    <h1>Découvrez mon nouveau roman</h1>
    <p>Derniers chapitres de mon nouveau roman :</p>


<?php
while ($data = $posts->fetch())
{
    ?>
    <div id="chapters">
        <h3>
            <?= htmlspecialchars($data['title']) ?>
            <em>le <?= $data['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($data['content'])) ?>
            <br />

        </p>
    </div>

    <em><a href="index.php?action=post&amp;id=<?= $data['id'] ?>">Commentaires</a></em>
    <?php
}
$posts->closeCursor();
?>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>