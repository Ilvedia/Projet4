<?php $title = htmlspecialchars($post['title']); ?>

<?php ob_start(); ?>
    <h1>Découvrez mon nouveau roman</h1>
    <p><a href="index.php">Retour à la liste des chapitres</a></p>

    <div id="chapters">
        <h3>
            <?= htmlspecialchars($post['title']) ?>
            <em>le <?= $post['creation_date_fr'] ?></em>
        </h3>

        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </p>
    </div>

    <h2>Commentaires</h2>

<?php
if(isset($_SESSION['pseudo']))
{
    ?>
    <!--FORMULAIRE D'ENVOI DE COMMENTAIRE SI USER CONNECTER-->
    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <!-- Comments Form -->
        <div>
            <h5>Commenter cet article</h5>
            <div class="form-group">
                <label for="pseudo" class="col-md-6 col-form-label">Pseudo</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="member_id" name="author" value="<?php if(isset($_SESSION['pseudo'])) echo $_SESSION['pseudo'] ?>" readonly >
                </div>
            </div>
            <div>
                <div class="form-group">
                    <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Mon commentaire"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Commenter</button>
            </div>
        </div>
    </form>
    <?php
}else{
    ?>
    <div>
        <p>Veuillez vous authentifier pour pouvoir commenter ce chapitre.</p>
        <p>Si vous n'avez pas encore de compte vous pouvez en créer un <a href="index.php?action=creationUser">ici</a>.</p>
    </div>
    <?php
}
while ($comment = $comments->fetch())
{
    ?>
    <p><strong><?= htmlspecialchars($comment['pseudo']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
    <?php
}
$content = ob_get_clean();

require('template.php'); ?>
