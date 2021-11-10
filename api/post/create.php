<?php 

require_once "../../models/Post.php";

if (isset($_POST)){

    $file = basename($_FILES["fileToUpload"]["name"]);
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "../../uploads/{$file}");
    $image = "../../uploads/{$file}";
    $im = imagecreatefromjpeg($image);

// IMAGE CROP AND UPLOAD LOGIC vv
    function img_upload($x, $y, $image, $file){
        $im = imagecreatefromjpeg($image);
        $x_center = (imagesx($im) / 2) - ($x / 2);
        $y_center = (imagesy($im) / 2) - ($y / 2);
        $im2 = imagecrop($im, ['x' => $x_center, 'y' => $y_center, 'width' => $x, 'height' => $y]);
        if ($im2 !== FALSE) {
            imagejpeg($im2, "../../uploads/{$file}", 75);
        }
        imagedestroy($im2);
    }

    switch (imagesx($im) <=> imagesy($im)) {
        case '-1':
            $y_crop = imagesx($im);
            $x_crop = ($y_crop / 3) * 2;
            img_upload($x_crop, $y_crop, $image, $file);
            break;
        case '0':
            $y_crop = imagesx($im);
            $x_crop = ($y_crop / 3) * 2;
            img_upload($x_crop, $y_crop, $image, $file);
            break;
        case '1':
            $y_crop = imagesy($im);
            $x_crop = ($y_crop / 3) * 2;
            img_upload($x_crop, $y_crop, $image, $file);
            break;
        default:
            break;
    }

    imagedestroy($im);
// IMAGE CROP AND UPLOAD LOGIC ^^

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