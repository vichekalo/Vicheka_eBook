<?php require_once('../partial/header.php'); ?>
    <div class="container p-4">
        <form action="createbook_model.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text"  class="form-control" placeholder="Title" name="title">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" placeholder="ISBN" name="isbn">
            </div>
            <div class="form-group">
                <input type="date"  class="form-control"  name="publish">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control" placeholder="Description" name="description">
            </div>
            <div class="form-group">
                <input type="file"  class="form-control"  name="file" id="file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" name="submit" >Create</button>
            </div>
        </form>
    </div>
<?php require_once('../partial/footer.php'); ?>