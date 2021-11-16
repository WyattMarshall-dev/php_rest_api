<?php 

require_once "../../models/Post.php";
require_once "../../models/images.php";

if (isset($_POST)){

    $file = basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "../../uploads/{$file}");
    $image = "../../uploads/{$file}";
    $im = imagecreatefromjpeg($image);

    resize_image($im, $image, $file);

    $result = Post::create(
        $_POST['isbn'],
        $_POST['author'],
        $_POST['title'],
        $_POST['pub_year'],
        $_POST['genre'],
        $file
    );

    header("Location: http://localhost/Projects/REST_API/views/index.php");    
} else {
    echo "Nothing in _POST yet";
}
?>