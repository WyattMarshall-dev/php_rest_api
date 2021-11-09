<?php 

require_once "../../models/Post.php";

// $result = Post::create();
// print_r($result);

// var_dump();
// echo "Nothing in _POST yet";

if (isset($_POST)){
    $result = Post::create(
        $_POST['authorid'],
        $_POST['title'],
        $_POST['pub_year'],
        $_POST['genre']
    );
    header("Location: http://localhost/Projects/REST_API/views/create.php");    
} else {
    echo "Nothing in _POST yet";
}



?>