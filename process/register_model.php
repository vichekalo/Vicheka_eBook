<?php
    require_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        register($_POST);
        header('location: http://localhost/vicheka_ebook/?page=login_view');
    }