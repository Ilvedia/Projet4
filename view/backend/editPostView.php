
<?php $title = 'Editer un chapitre'; ?>


<?php ob_start(); ?>
<form action="index.php?action=editPost&id=<?php echo $post['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Titre</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Titre de l'article" value="<?php echo $post['title']; ?>" required>
    </div>
    <div class="form-group">
        <label>Contenu du chapitre</label><br>
        <textarea id="postContent" class="form-control" name="content" rows="10"><?php echo $post['content']; ?></textarea>
    </div>
    <button id="postButton" type="submit" class="btn btn-primary">Publier</button>

</form>

<?php $content = ob_get_clean(); ?>


<?php require('view/backend/template.php'); ?>
