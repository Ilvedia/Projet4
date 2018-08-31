<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
    <h1>Page d'administration</h1>
    <p>Veuillez choisir le menu souhaité:</p>

    <table>
        <tr>
            <th>Chapitres</th>
        </tr>
        <tr>
            <td><a href="index.php?action=writeNewPost">Ajout d'un chapitre</a></td>
            <td><a href="index.php?action=managePosts">Edition / Suppression d'un chapitre</a></td>
        </tr>
        <tr>
            <th>Membres</th>
        </tr>
        <tr>
            <td><a href="index.php?action=manageUser">Gestion des membres</a></td>
        </tr>
        <tr>
            <th>Commentaires</th>
        </tr>
        <tr>
            <td><a href="index.php?action=manageComments">Gestion des commentaires</a></td>
        </tr>
    </table>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>