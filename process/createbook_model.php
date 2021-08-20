<?php
    require_once('../database/database.php');
    if (isset($_FILES['file'])){
        $imageName = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $folder = '../assets/image/';
        move_uploaded_file($tmp_name, $folder.$imageName);
        createBook($_POST, $imageName);
        header('Location:http://localhost/vicheka_ebook/?page=home');
    }else{
        echo "Fail";
    }