<?php $title = 'Editer un commentaire';

ob_start(); ?>

    <form action="index.php?action=editComment&id=<?php echo $comment['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Identifiant du chapitre correspondant</label>
            <input type="varchar" class="form-control" id="post_id" name="post_id" placeholder="Post ID du chapitre" value="<?php echo $comment['id'];?>" required>
        </div>
        <div class="form-group">
            <label>Contenu du commentaire</label><br>
            <textarea id="postContent" name="comment" class="form-control" rows="10"><?php echo $comment['comment']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="status">Statut du commentaire</label>
            <select class="custom-select" name="status">
                <option selected value="valid">Non signalé</option>
                <option value="warning">Signalé</option>
            </select>
        </div>
        <button id="postButton" type="submit" class="btn btn-primary">Publier</button>
    </form>
<?php $content = ob_get_clean();
require ('view/backend/template.php');?>