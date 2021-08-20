<?php require_once('partial/header.php'); ?>
    <div  style="background-image:url(../assets/images/bg.jpg); width: 100%; height: 100vh; background-size:cover; background-position: center;">
        <div class="p-4 ">
            <form action="#" method="post" class="rounded-lg col-lg-5 col-md-4 m-auto bg-white p-3" >
                <div class="d-flex jutify-content-end pb-2">
                    <button class="btn btn-info" onclick="window.history.back();">&#8592; Back</button>
                </div>
                <div class="text-center">
                    <h4>Register For Login</h4>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-row">
                    <div class="col form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" required class="form-control" id="pass" placeholder="Password" length="8">
                    </div>
                    <div class="col form-group">
                        <label for="cfpassword">Confirm password</label>
                        <input type="password" name="cfpassword" required class="form-control" id="cfpass" placeholder="Password" length="8">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <a href="http://localhost/PHP_Project/index.php?page=home"><button type="submit" class="btn btn-secondary w-100 fa fa-user"aria-hidden="true">Register</button></a>
                    </div>
                    <div class="col-2 text-center">
                        <p>OR</p>
                    </div>
                    <div class="col-5">
                        <a href="login.php"><button type="button" class="btn btn-warning w-100"> Login </button></a>
                    </div>
                </div>
            </form>
        </div>
    </div> 
<?php require_once('partial/footer.php'); ?>