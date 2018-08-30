<?php $title = 'Billet simple pour l\'Alaska'; ?>

<?php ob_start(); ?>
    <h1>Page d'administration</h1>
    <p>Veuillez choisir le menu souhaité:</p>

    <table>
        <tr>
            <th>Chapitres</th>
        </tr>
        <tr>
            <td>Liste des chapitres</td>
            <td>Ajout d'un chapitre</td>
            <td>Modification d'un chapitre</td>
            <td>Suppression d'un chapitre</td>
        </tr>
        <tr>
            <th>Membres</th>
        </tr>
        <tr>
            <td>Liste des membres</td>
            <td>Modification d'un membre</td>
            <td>Suppression d'un membre</td>
        </tr>
        <tr>
            <th>Commentaires</th>
        </tr>
        <tr>
            <td>Liste des commentaires</td>
            <td>Suppression d'un commentaire</td>
        </tr>
    </table>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>