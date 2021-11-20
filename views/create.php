<?php 
    require_once "components/session_handler.php";
    require_once "components/FormClass.php";
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
    <?php include "components/flashBanner.php"; ?>
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

        <?php FormClass::FormOpen('components/formSubmit.php', 'formInput'); ?>

        <div class="formDiv">
            <?php FormClass::FormLabel('author', 'Author', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('author', 'author', 'text', 'form-element'); ?><br>
                <?php FormClass::error('author', 'Please Enter An Author') ?>
            </div>
        </div> 

        <div class="formDiv">
            <?php FormClass::FormLabel('isbn', 'isbn', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('isbn', 'isbn', 'isbn', 'form-element'); ?><br>
                <?php FormClass::error('isbn', 'Please Enter A Valid ISBN') ?>
            </div>
        </div>

        <div class="formDiv">
            <?php FormClass::FormLabel('title', 'title', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('title', 'title', 'text', 'form-element'); ?><br>
                <?php FormClass::error('title', 'Please Enter A Title') ?>
            </div>
        </div>

        <div class="formDiv">
            <?php FormClass::FormLabel('pub_year', 'pub_year', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('pub_year', 'pub_year', 'text', 'form-element'); ?><br>
                <?php FormClass::error('pub_year', 'Please Enter The Publish Year') ?>
            </div>
        </div>

        <div class="formDiv">
            <?php FormClass::FormLabel('genre', 'genre', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('genre', 'genre', 'text', 'form-element'); ?><br>
                <?php FormClass::error('genre', 'Please Enter A Genre') ?>
            </div>
        </div>

        <p>Select image to upload:</p>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br><br> 

        <?php FormClass::FormSubmitBtn('submitBtn'); ?>
    <?php FormClass::FormClose(); ?>
    </div>

    <footer>
        <div class="container">
            <p>I am NOT a graphics designer....</p>
        </div>
    </footer>

</body>
</html>
