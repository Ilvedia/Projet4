<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
    <h1>Page d'administration</h1>
    <p>Veuillez choisir le menu souhaité:</p>

    <table>
        <tr>
            <th>Chapitres</th>
        </tr>
        <tr>
            <td><a href="index.php?action=listPosts">Liste des chapitres</a></td>
            <td><a href="index.php?action=newPost">Ajout d'un chapitre</a></td>
            <td><a href="index.php?action=editPost">Modification d'un chapitre</a></td>
            <td><a href="index.php?action=deletePost">Suppression d'un chapitre</a></td>
        </tr>
        <tr>
            <th>Membres</th>
        </tr>
        <tr>
            <td><a href="index.php?action=listUsers">Liste des membres</a></td>
            <td><a href="index.php?action=editUser">Modification d'un membre</a></td>
            <td><a href="index.php?action=deleteUser">Suppression d'un membre</a></td>
        </tr>
        <tr>
            <th>Commentaires</th>
        </tr>
        <tr>
            <td><a href="index.php?action=listComments">Liste des commentaires</a></td>
            <td><a href="index.php?action=addComment">Ajouter un commentaire</a></td>
            <td><a href="index.php?action=deleteComment">Suppression d'un commentaire</a></td>
        </tr>
    </table>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>