<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <?php 
            require_once('../database/database.php');
            $id=$_GET['id'];
            $book=selectOneBook($id);
            foreach ($book as $row):
        ?>
        <form action="updatebook_model.php" method="post">
            <input type="hidden" value="<?=$row['book_id'] ?>" name="bookId">
            <div class="form-group">
                <input type="text" value="<?=$row['title'] ?>" class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <input type="text" value="<?=$row['price'] ?>" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="text" value="<?=$row['isbn'] ?>" class="form-control" placeholder="ISBN" name="isbn">
            </div>
            <div class="form-group">
                <input type="date" value="<?=$row['publish']?>" class="form-control"  name="publish">
            </div>
            <div class="form-group">
                <input type="text" value="<?=$row['description']?>" class="form-control" placeholder="description" name="description">
            </div>
            <div class="form-group">
                <input type="file" value="<?=$row['image']?>" class="form-control" placeholder="Image" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('../partial/footer.php'); ?>