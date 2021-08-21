<?php require_once('partial/header.php'); ?>
    <div class="container p-4" >
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
                // $description=readMore($book['description'],200);
        ?>
        <div class="col-3">
            <div class="card mb-2 ml-4 shadow-lg  bg-white rounded " style="width: 17rem; ">
                <div class="card-body">
                    <div class="card-image mr-3">
                        <img class="img-fluid" width="200" src="./assets/image/<?=$book['image'] ?>" alt="">
                    </div>
                    <a href="readMore/detail.php?postID=<?= $book['book_id'] ?>">
                        <h5 class="card-title"><?= $book['title'] ?></h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="pictureCard">
            
        </div>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>