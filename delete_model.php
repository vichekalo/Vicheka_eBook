<?php
    require_once('database/database.php');
    $id=$_GET['id'];
    deleteAuthor($id);
    