<?php require_once('partial/header.php'); ?>
<div class=" col-3">
    <?php
        require_once('database/database.php');
        $books=selectAllBook();
        foreach ($books as $book):
    ?>
    <div class="card mb-2 ml-4 shadow-lg  bg-white rounded " style="width: 17rem; ">
        <div class="card-body">
            <div class="card-image mr-3">
                <img class="img-fluid" width="200" src="<?=$book['image'] ?>" alt="">
            </div>
            <a href="readmore/detail.php?id=<?= $book['book_id'] ?>">
               <h5 class="card-title"><?= $book['title'] ?></h5>
            </a>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php require_once('partial/footer.php'); ?>