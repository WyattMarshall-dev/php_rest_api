<?php 

require_once "../../models/Post.php";

if (isset($_GET)){
    var_dump($_GET);
    $result = Post::destroy($_GET['id']);
    header("Location: http://localhost/Projects/REST_API/views/index.php");  
} else {
    echo "Nothing in _POST yet";
}




?>