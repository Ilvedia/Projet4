<?php $title = 'Gestion des chapitres'; ?>

<?php ob_start(); ?>

    <p>Voici la liste des membres de votre blog. Vous pouvez les éditer ou les supprimer en cliquant sur le lien approprié.</p>

    <table class="table-bordered table-striped table-responsive">
        <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Niveau de l'utilisateur</th>
            <th>Date d'inscription</th>
            <th>Editer</th>
            <th>Supprimer</th>
        </tr>
        <tr>
            <?php
            while ($data = $users->fetch()) {
            ?>
            <th scope="row"><?php echo nl2br(htmlspecialchars($data['id'])); ?></th>
            <td><?php echo htmlspecialchars($data['pseudo']); ?></td>
            <td><?php echo htmlspecialchars($data['email']); ?></td>
            <td><?php echo htmlspecialchars($data['userLevel']); ?></td>
            <td><?php echo htmlspecialchars($data['inscription_date_fr']); ?></td>
            <td><a href="index.php?action=editUserView&amp;id=<?php echo $data['id']; ?>"><button type="button" class="btn btn-info">Editer</button></a></td>
            <td><a href="index.php?action=deleteUser&amp;id=<?php echo $data['id']; ?>" onclick="return confirm('Etes vous sur de vouloir supprimer cet utilisateur ?')"><button type="button" class="btn btn-danger">Supprimer</button></a></td>
        </tr>

        <?php
        }
        $users->closeCursor();
        ?>

    </table>

<?php $content = ob_get_clean();
require('view/backend/template.php'); ?>