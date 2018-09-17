<?php $title = 'Gestion des commentaires'; ?>

<?php ob_start(); ?>

    <p>Voici la liste des commentaires de votre blog. Vous pouvez les éditer ou les supprimer en cliquant sur le lien approprié.</p>

    <table class="table-bordered table-striped table-responsive">
        <tr>
            <th>ID</th>
            <th>Post ID</th>
            <th>Pseudo</th>
            <th>Commentaire</th>
            <th>Date de création</th>
            <th>Statut</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
        <tr>
            <?php
            while ($data = $comments->fetch()) {
            ?>
            <th scope="row"><?php echo nl2br(htmlspecialchars($data['id'])); ?></th>
            <td><?php echo htmlspecialchars($data['post_id']); ?></td>
            <td><?php echo htmlspecialchars($data['pseudo']); ?></td>
            <td><?php echo htmlspecialchars($data['comment']); ?></td>
            <td><?php echo htmlspecialchars($data['creation_date_fr']); ?></td>
            <td><?php echo htmlspecialchars($data['status']); ?></td>
            <td><a href="index.php?action=editCommentView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
            <td><a href="index.php?action=deleteComment&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer ce commentaire ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>

        <?php
        }
        $comments->closeCursor();
        ?>

    </table>

<?php $content = ob_get_clean();
require('view/backend/template.php'); ?><?php
