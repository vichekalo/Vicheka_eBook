<?php require_once('partial/header.php'); ?>
    <div>
        <div class="p-4 ">
            <?php 
                require_once("database/database.php");
                $message = "";
                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    $isLogin = login($_POST);
                    if($isLogin){
                        header('Location:http://localhost/vun-php-project/?page=places');
                    }else{
                        $message = "Email or Password not match";
                    }
                }
            ?>
            <form action="#" method="post" class="rounded-lg col-lg-5 col-md-4 m-auto bg-white p-3" >
                <div class="d-flex justify-content-end pb-2">
                    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
                </div>
                <div class="text-center">
                    <h4>Admin Login</h4>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="password" required class="form-control" id="password" placeholder="Password" length="8">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" required class="form-control" id="phone" placeholder="phone" length="8">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <a href="http://localhost/PHP_Project/index.php?page=home"><button type="submit" class="btn btn-secondary w-100">Login</button></a>
                    </div>
                    <div class="col-2 text-center">
                        <p>OR</p>
                    </div>
                    <div class="col-5">
                        <a href="register.php"><button type="button" class="btn btn-warning w-100"><i class="fa fa-user" aria-hidden="true"></i> Register </button></a>
                    </div>
                </div>
            </form>
        </div>
    </div> 
<?php require_once('partial/footer.php'); ?>