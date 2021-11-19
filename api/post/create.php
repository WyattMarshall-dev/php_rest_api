<?php 
require_once "../../models/Post.php";
require_once "../../models/images.php";

if (isset($_POST)){


    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["size"] > 0) {
        $file = basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "../../uploads/{$file}");
        $image = "../../uploads/{$file}";
        $im = imagecreatefromjpeg($image);

        resize_image($im, $image, $file);
    } else {
        $file = "default.jpg";
    }

    $decoded = json_decode($_POST['data'], true);

    $result = Post::create(
        $decoded['isbn'],
        $decoded['author'],
        $decoded['title'],
        $decoded['pub_year'],
        $decoded['genre'],
        $file
    );

    header("Location: http://localhost/Projects/REST_API/views/index.php");    
} else {
    echo "Nothing in _POST yet";
}
?>