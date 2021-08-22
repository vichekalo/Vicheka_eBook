<?php
//connect to database
    // session_start();

function database() {
    return new mysqli('localhost','root','','ebook_cambodia');
}

function selectAllAuthor() {
    return database()->query("SELECT * FROM authors");
    
}
function selectOneAuthor($id) {
    return database()-> query("SELECT * FROM authors WHERE author_id=$id");
    
}
/////--------Book--------//////////////////////////////////////////////////
function selectAllBook() {
    return database()->query("SELECT * FROM books INNER JOIN categories ON categories.category_id = books.category_id 
    INNER JOIN authors ON authors.author_id = books.author_id  ");
}
function selectOneBook($id) {
    return database()-> query("SELECT * FROM books WHERE book_id=$id");
}
function deleteBook($id){
    database()->query("DELETE FROM books WHERE book_id=$id");
    header("Location:http://localhost/vicheka_ebook/?page=home");
}
function updateBook($value) {
    $id=$value['bookId'];
    $title=$value['title'];
    $price=$value['price'];
    $isbn=$value['isbn'];
    $publish=$value['publish'];
    $description=$value['description'];
    $image=$value['image'];
    database()->query("UPDATE books SET title='$title',price='$price',isbn='$isbn',publish='$publish',description='$description',image='$image' Where book_id=$id");
    header("Location: http://localhost/vicheka_ebook/?page=home");
}
function createBook($value, $image) {
    $title=$value['title'];
    $price=$value['price'];
    $isbn=$value['isbn'];
    $publish=$value['publish'];
    $description=$value['description'];
    $category_id = 1;
    $author_id = 1;
    if ($title !="" && $price !="" && $isbn !="" && $publish !="" && $description !="" ){
        database()->query("INSERT INTO books(title,price,isbn,publish,description,image,category_id,author_id) VALUES('$title','$price','$isbn','$publish','$description','$image','$category_id','$author_id')");
        header("Location: http://localhost/vicheka_ebook/?page=home");
    }
    
}
function searchByTitle($title){
    $title = $title['search'];
    return database()->query("SELECT * FROM books INNER JOIN categories ON categories.category_id = books.category_id
    INNER JOIN authors ON authors.author_id = books.author_id AND title LIKE '%$title%'");
}
function readMore($text,$number){
    return substr($text,0,$number);
}

//start session Login Loout Regester

function getUser() {
    return database()->query("SELECT * FROM users");
}

function login($value){
    session_start();
    $username = trim($value['username']);
    $password=trim($value['password']);

    $users = getUser();
    $isTrue = false;
    foreach ($users as $user){
        if ($password===$user['password'] && $username===$user['username'] && !$isTrue){
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user['role'];
            $_SESSION['message'] = "Login successful";
            $isTrue = true;
        }
    }
    if ($isTrue) {
        header("Location: http://localhost/vicheka_ebook/?page=home");
    }else{
        $_SESSION['message'] = "Login failed";
        header("Location: http://localhost/vicheka_ebook/?page=login_view");
    }
}

function logout() {
    session_start();
    session_destroy();
    header("Location: http://localhost/vicheka_ebook/?page=login_view");
}

function register($value) {
    $username = trim($value['username']);
    // $password = password_hash(trim($value['password']), PASSWORD_DEFAULT);
    $password=trim($value['password']);
    $role = $value['role'];

    return database()->query("INSERT INTO users(username, password, role) VALUES('$username', '$password', '$role')");   
  }