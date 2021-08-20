<?php require_once('partial/header.php'); ?>
    <div class="container p-4">
        <?php 
            require_once('database/database.php');
            $id=$_GET['id'];
            $author=selectOneAuthor($id);
            foreach ($author as $row):
        ?>
        <form action="update_model.php" method="post">
            <input type="hidden" value="<?=$row['author_id'] ?>" name="authorId">
            <div class="form-group">
                <input type="text" value="<?=$row['author_name'] ?>" class="form-control" placeholder="Author Name" name="author_name">
            </div>
            <div class="form-group">
                <input type="date" value="<?=$row['birthday']?>" class="form-control"  name="birthday">
            </div>
            <div class="form-group">
                <input type="text" value="<?=$row['picture']?>" class="form-control" placeholder="IMG" name="picture">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>