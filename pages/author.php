<?php require_once('partial/header.php'); ?>
    <div class="container p-4" >
        <div class="d-flex justify-content-end p-2">
            <a href="#" class="btn btn-primary">hide</a>
        </div>
        <div class="d-flex justify-content-end p-2">
            <a href="create_html.php" class="btn btn-primary">Add +</a>
        </div>
        <?php
            require_once('database/database.php');
            $authors=selectAllAuthor();
            foreach ($authors as $author):
        ?>
        <div class="card">
            <div class="card-body" >
               <div class="d-flex">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="250" src="<?=$author['picture'] ?>" alt="">
                    </div>
                    <div class="info">
                        <h1 class="display-4">Name:<?=$author['author_name'] ?></h1>
                        <span>Birthday:<?=$author['birthday'] ?></span>
                    </div>
                    
               </div>
                <div class="action d-flex justify-content-end">
                    <a href="update_html.php?id=<?=$author['author_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="delete_model.php?id=<?=$author['author_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>  
<?php require_once('partial/footer.php'); ?>