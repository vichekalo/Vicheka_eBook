<!-- bg-secondary -->
<?php session_start() ?>
<div class="container-fluid fixed-top" >
    <div class="navbar navbar-expand-sm  bg-secondary navbar-dark">
      <i class='fas fa-book-open' style='font-size:48px;color:red'></i>
      <a href="#" class="navbar-brand text-warning " id="title" ><h1>Khmer ebook</h1></a>
      <!-- Navbar Toggler   -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="myNavbar" >
        <ul class="navbar-nav">
        <?php if (isset($_SESSION['username'])): ?>
          <li class="nav-item active">
            <a class="nav-link" href="?page=logout">Logout</a>
          </li>
          <?php else: ?>
            <li class="nav-item active">
              <a class="nav-link" href="?page=login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?page=register">Register</a>
            </li>
          <?php endif; ?>
          <?php if(isset($_SESSION['username'])): ?>
          
          <span class="material-icons" id="pic"> home </span>
          <li class="nav-item">
            <a href="?page=home" class="nav-link">Home</a>
          </li>
          <span class="material-icons" id="pic"> book </span>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navdrop" data-toggle="dropdown">Books</a>
            <div class="dropdown-menu bg-dark">
              <?php if(isset($_SESSION['role']) and $_SESSION['role']=="admin"):?>
                <a href="?page=category" class="dropdown-item">Book Add+</a>
                <?php endif;?>
                <a href="?page=author" class="dropdown-item">Authors</a>
            </div>
           
          </li>
          <li class="nav-item">
            <a href="?page=aboutus" class="nav-link" >About us</a>
          </li>
        </ul>
        
        <strong class="navbar-text" id="nameuser">
          <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
            <?= $_SESSION['username'] ?>
              </strong>
        <?php endif; ?>
        <div>
        </div>
      </div>
    </div>
  </div>