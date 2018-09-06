<?php $title = 'Gestion des chapitres'; ?>

<?php ob_start(); ?>

    <p>Voici la liste des chapitres de votre blog. Vous pouvez les éditer ou les supprimer en cliquant sur le lien approprié.</p>

    <table class="table-bordered table-striped table-responsive">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Publié le</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
        <tr>
            <?php
            while ($data = $posts->fetch()) {
            ?>
            <th scope="row"><?php echo nl2br(htmlspecialchars($data['id'])); ?></th>
            <td><?php echo htmlspecialchars($data['title']); ?></td>
            <td><?php echo htmlspecialchars($data['creation_date_fr']); ?></td>
            <td><a href="index.php?action=editPostView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
            <td><a href="index.php?action=deletePost&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer ce chapitre ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>

        <?php
        }
        $posts->closeCursor();
        ?>

    </table>

<?php $content = ob_get_clean();
require('view/backend/template.php'); ?>