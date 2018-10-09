<?php $title = 'Page d\'administration'; ?>

<?php ob_start(); ?>

    <div class="row" id="adminCards">
        <div class="col-lg-6">
            <!-- Gestion des articles-->
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-header">Gestion des chapitres</h5>
                    <div class="input-group">
                        <ul>
                            <li><a href="index.php?action=writeNewPost">Ecrire un nouveau chapitre</a></li>
                            <li><a href="index.php?action=managePosts">Editer / supprimer un chapitre publié</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Gestion des commentaires-->
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-header">Gestion des commentaires</h5>
                    <div class="input-group">
                        <ul>
                            <li><a href="index.php?action=manageComments">Afficher les commentaires</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Gestion des Membres-->
            <div class="card my-4">
                <div class="card-body">
                    <h5 class="card-header">Gestion des membres</h5>
                    <div class="input-group">
                        <ul>
                            <li><a href="index.php?action=manageUsers">liste des membres</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php $content = ob_get_clean(); ?>

<?php require('view/backend/template.php'); ?>