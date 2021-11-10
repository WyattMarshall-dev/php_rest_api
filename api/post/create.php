<?php 

require_once "../../models/Post.php";

if (isset($_POST)){

    $file = basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "../../uploads/{$file}");
    print_r($_POST);
    echo $file;

    $result = Post::create(
        $_POST['isbn'],
        $_POST['author'],
        $_POST['title'],
        $_POST['pub_year'],
        $_POST['genre'],
        $file
    );

    header("Location: http://localhost/Projects/REST_API/views/create.php");    
} else {
    echo "Nothing in _POST yet";
}
?>