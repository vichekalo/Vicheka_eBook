<?php
//connect to database
function database() {
    return new mysqli('localhost','root','','ebook_cambodia');
}

function selectAllAuthor() {
    return database()->query("SELECT * FROM authors");
    
}
function selectOneAuthor($id) {
    return database()-> query("SELECT * FROM authors WHERE author_id=$id");
    
}
function deleteAuthor($id){
    database()->query("DELETE FROM authors WHERE author_id=$id");
    header("Location:index.php");
}
function updateAuthor($value) {
    $id=$value['authorId'];
    $author_name=$value['author_name'];
    $birthday=$value['birthday'];
    $picture=$value['picture'];
    database()->query("UPDATE authors SET author_name='$author_name',birthday='$birthday',picture='$picture' Where author_id=$id");
    header("Location: index.php");
}
function createAuthor($value) {
    $author_name=$value['author_name'];
    $birthday=$value['birthday'];
    $picture=$value['picture'];
    database()->query("INSERT INTO authors(author_name,birthday,picture) VALUES('$author_name','$birthday','$picture')");
    header("Location: index.php");
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

// function login($value){
//     $admin = $value['userName'];
//     $email = $value['email'];
//     $phone = $value['phone'];
//     $password = $value['password'];
//     $login = false;
//     $getUser = database()->query("SELECT * FROM users");
//     foreach ($getUser as $user){
//         if ($user["email"] == $email and $user["password"] == $password){
//             $login = true;
//         }
//     } return $login;
// }