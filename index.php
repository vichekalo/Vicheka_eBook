<?php
include_once('partial/header.php'); 
include_once('partial/navbar.php');
if (isset($_GET['page'])){
    if($_GET['page']=='home'){
        include_once('pages/home.php');
    }elseif ($_GET['page']=='author'){
        include_once('pages/author.php');
    }elseif ($_GET['page']=='category'){
        include_once('pages/category.php');
    }
    else{
        include_once('pages/login.php');
    }
}else{
    include_once('pages/home.php');
}
include_once('partial/footer.php'); 