<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>
    <h1>Découvrez mon nouveau roman</h1>
    <p>Commentaires du chapitre</p>

<p><a href="../../index.php">Retour à la liste des chapitres</a> </p>

<div class="chapters">
    <h3>
        <?= htmlspecialchars($posts['title']) ?>
        <em> le <?= $posts['creation_date_fr'] ?></em>
    </h3>

    <p>
        <?= nl2br(htmlspecialchars($posts['content'])) ?>
    </p>
</div>

<h2>Commentaires</h2>

<?php
    while ($comment = $comments->fetch()) {
        ?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
    }
    $posts->closeCursor();
    $content = ob_get_clean();

    require('template.php');
?>