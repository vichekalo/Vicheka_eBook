<?php require_once('partial/header.php'); ?>
    <div class="container p-0" >
        <div  id="welcome">
           <h1 class="welcome">Welcome To Our Khmer-eBook</h1> 
           <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
           <br><form action="" method="post" id="search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search places" name="search">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        
        
        <div class="allcard pt-3 row" >
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
                <div class="col-3">
                    <div class="card mb-2 ml-4 shadow-lg  bg-white rounded " style="width: 17rem;">
                        <div class="card-body">
                            <div class="card-image mr-5">
                                <img class="img-fluid" width="200" src="./assets/image/<?=$book['image'] ?>" alt="">
                            </div>  <br>
                            <a href="readmore/detail.php?id=<?= $book['book_id'] ?>">
                                <h5><strong class="card-title text-dark" >Book: <?= $book['title'] ?></strong></h5>
                            </a> <br>
                            <div class="d-flex" id="reaction" >
                                <i class="fa fa-heart fa-2x" style="width: 5rem;" aria-hidden="true"></i> 
                                <i class="fa fa-comment fa-2x" style="width: 5rem;" aria-hidden="true"></i> 
                                <i class="fa fa-eye fa-2x" style="width: 5rem;" aria-hidden="true"></i> 
                                <i class="fa fa-download fa-2x" style="width: 5rem;"  aria-hidden="true"></i> 
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            <?php endforeach; ?>
        </div>
    </div>
<?php require_once('partial/footer.php'); ?>

