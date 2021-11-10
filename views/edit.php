<?php
require_once "../models/curl.php";

if (isset($_GET['id'])) {
    $url = "http://localhost/Projects/REST_API/api/post/show.php?id={$_GET['id']}";
    $get_data = callAPI('GET', $url, false);
    $response = json_decode($get_data, true);

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
    <link rel="stylesheet" href="../styles.css">
    <title>PHP REST API</title>
</head>
<body>
    <nav>
        <h1>Index Page</h1>
        <div class="container">
            <a href="index.php">Index</a>
            <a href="create.php">New Book</a>
        </div>
    </nav>

    <div class="container">
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
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br><br>
            <input type="submit" class="submitBtn" value="Add Book">
        </form>
    </div>

    <footer>
        <div class="container">
            I am NOT a graphics designer....
        </div>
    </footer>


</body>
</html>