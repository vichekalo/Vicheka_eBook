<?php require_once('partial/header.php'); ?>
    <div class="container p-4" >
        <div class="d-flex justify-content-end p-2">
            <a href="process/createbook_html.php" class="btn btn-primary">hide</a>
        </div>

        <div class="d-flex justify-content-end p-2">
            <a href="process/createbook_html.php" class="btn btn-primary">Add +</a>
        </div>
        <?php
            require_once('database/database.php');
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //search
                $books = searchByTitle($_POST);
            }else{
                //select
                $books=selectAllBook();
            }
            foreach ($books as $book):
                $description=readMore($book['description'],200);
        ?>
        <div class="card">
            <div class="card-body" >
               <div class="d-flex">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="250" src="./assets/image/<?=$book['image'] ?>" alt="">
                    </div>
                    <div class="info">
                        <h1 class="display-4">Title:<?=$book['title'] ?></h1>
                        <strong>Price:<?=$book['price'] ?></strong> <br>
                        <strong>ISBN:<?=$book['isbn'] ?></strong> 
                        <p>Publish:<?=$book['publish'] ?></p>

                        <p style="box-sizing: content-box;"><?=$description?></p>
                        <a href="readMore/detail.php?id=<?=$book['book_id']?> " class="btn btn-primary ">Read More</a>    
                    </div>
               </div>
                <div class="action d-flex justify-content-end">
                    <a href="process/updatebook_html.php?id=<?=$book['book_id'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                    <a href="process/deletebook.php?id=<?=$book['book_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>