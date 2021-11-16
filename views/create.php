<?php

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
        <div class="container" id="navbar">
            <div>
                <h1><a href="index.php" id="logo">Library</a> </h1>     
            </div>
            <div>
                <a href="create.php">Add Book</a>
            </div>
        </div>
    </nav>

    <div class="container" id="main-content">
        <h2>Submit A Book</h2>
        <hr>
        <form action='http://localhost/Projects/REST_API/api/post/create.php' method="POST" enctype="multipart/form-data">
            <input type="text" name="author" id="author" class="form-element" value="" placeholder="Author" > 
            <br> 
            <input type="text" name="isbn" id="isbn" class="form-element" value="" placeholder="ISBN" > 
            <br>
            <input type="text" name="title" id="title" class="form-element" value="" placeholder="Title" >  
            <br>
            <input type="text" name="pub_year" id="pub_year" class="form-element" value="" placeholder="Publish Year" >  
            <br>
            <input type="text" name="genre" id="genre" class="form-element" value="" placeholder="Genre" >  
            <br>    
            <p>Select image to upload:</p>
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
