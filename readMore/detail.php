<?php
    require_once('../partial/header.php');
?>
<div class="container p-4">
    <div class="d-flex justify-content-end">
        <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
    </div>
    <?php
    require_once('../database/database.php');
    $id=$_GET['id'];
    $list_book = selectOneBook($id);
    foreach ($list_book as $book) :
    ?>
    <div class="card m-2 shadow-lg  bg-white rounded">
        <div class="card-body">
            <div class="d-flex ">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="200" src="../assets/image/<?=$book['image'] ?>" alt="image">
                    </div>
                    <div class="info">
                        <h1 class="display-4">Title:<?=$book['title'] ?></h1>
                        <strong>Price:<?=$book['price'] ?></strong> <br>
                        <strong>ISBN:<?=$book['isbn'] ?></strong> 
                        <p>Publish:<?=$book['publish'] ?></p>
                        <p>Description:<?=$book['description'] ?></p>
                    </div>
            </div>  
        </div>
    </div>
    <?php endforeach; ?>
</div>