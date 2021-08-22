<?php
require_once('partial/header.php'); 
require_once('partial/navbar.php');
if (isset($_GET['page'])){
    $hasPage=file_exists('pages/' . $_GET['page'] . '.php');
    $page="pages/" . $_GET['page'] . ".php";
    if ($hasPage){
        require_once($page);
    }
    elseif($_GET['page']=='home'){
        require_once('pages/home.php');
    }elseif ($_GET['page']=='author'){
        require_once('pages/author.php');
    }elseif ($_GET['page']=='category'){
        require_once('pages/category.php');
    }elseif ($_GET['page']=='aboutus'){
        require_once('pages/aboutus.php');
    }else{
        require_once('pages/login.php');
    }
}else{
    require_once('pages/login.php');
}
require_once('partial/footer.php'); 