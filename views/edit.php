<?php
require_once "components/session_handler.php";
require_once "../models/curl.php";

if (isset($_GET['id'])) {
    $response = CURL::GET("/api/post/show.php?id={$_GET['id']}");

    if(!$response['data']){
        header("Location: errors/404.php");
    }
}

$data = $response['data'][0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/script.js" defer></script>
    <title>PHP REST API</title>
</head>
<body>
<?php 
    include "components/navbar.php"; 
    include "components/flashBanner.php";
?>

    <div class="container" id="main-content">
        <h2>Edit Book</h2>
        <hr>
        <form action='http://localhost/Projects/REST_API/api/post/edit.php' method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?php echo $data['id'] ?>">

            <input type="text" name="author" id="author" class="form-element" value="<?php echo $data['author'] ?>" placeholder="Author" > 
            <br> 
            <input type="text" name="isbn" id="isbn" class="form-element" value="<?php echo $data['isbn'] ?>" placeholder="ISBN" > 
            <br>
            <input type="text" name="title" id="title" class="form-element" value="<?php echo $data['title'] ?>" placeholder="Title" >  
            <br>
            <input type="text" name="pub_year" id="pub_year" class="form-element" value="<?php echo $data['pub_year'] ?>" placeholder="Publish Year" >  
            <br>
            <input type="text" name="genre" id="genre" class="form-element" value="<?php echo $data['genre'] ?>" placeholder="Genre" >  
            <br>    
            <p>Select image to upload:</p>
            <input type="hidden" name="currentFile" id="currentFile" value="<?php echo $data['thumbnail'] ?>">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br><br>
            <input type="submit" class="submitBtn" value="Add Book">
        </form>
    </div>

    <footer>
        <div class="container">
            <p>I am NOT a graphics designer....</p>
        </div>
    </footer>


</body>
</html>