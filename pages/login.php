<div  id="kk" >
           <?php 
    if (isset($_SESSION['username'])):
        header('Location: http://localhost/vicheka_ebook/?page=welcome');
    else:         
?>
<div class="container p-3 mt-3" id="loginform">   
    <div class="row">
        <div class="col-4"></div>
        <h1 class="loginH">Login To Our Book Store</h1> <br><br><br>
        <div class="col-4">
            <form action="process/login_model.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" id="f" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control"  id="f" placeholder="Password">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" id="f">Login now </button>
                </div>
            </form>
            <hr>
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error !</strong> <?= $_SESSION['message'] ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-4"></div>
    </div>
    <div>
    </div>
</div>
<?php endif ?>
        
</div>

