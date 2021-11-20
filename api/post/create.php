<?php 
require_once "../../models/Post.php";
require_once "../../models/images.php";

if (isset($_POST)){

    if (isset($_FILES['test_file']) && $_FILES['test_file']['size'] > 0) {
        $OgFileName = $_FILES['test_file']['name'];
        $file = basename($_FILES['test_file']["tmp_name"]);
        move_uploaded_file($_FILES['test_file']['tmp_name'], "../../uploads/{$OgFileName}");
        $image = "../../uploads/{$OgFileName}";
        $im = imagecreatefromjpeg($image);

        resize_image($im, $image, $OgFileName);
    } else {
        $OgFileName = "default.jpg";
    }

    $decoded = json_decode($_POST['data'], true);

    $result = Post::create(
        $decoded['isbn'],
        $decoded['author'],
        $decoded['title'],
        $decoded['pub_year'],
        $decoded['genre'],
        $OgFileName
    );
  
} else {
    echo "Nothing in _POST yet";
}
?>