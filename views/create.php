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
            <?php FormClass::FormLabel('isbn', 'ISBN', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('isbn', 'isbn', 'isbn', 'form-element'); ?><br>
                <?php FormClass::error('isbn', 'Please Enter A Valid ISBN') ?>
            </div>
        </div>

        <div class="formDiv">
            <?php FormClass::FormLabel('title', 'Title', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('title', 'title', 'text', 'form-element'); ?><br>
                <?php FormClass::error('title', 'Please Enter A Title') ?>
            </div>
        </div>

        <div class="formDiv">
            <?php FormClass::FormLabel('pub_year', 'Year', 'formLabel label'); ?>
            <div>
                <?php FormClass::FormText('pub_year', 'pub_year', 'text', 'form-element'); ?><br>
                <?php FormClass::error('pub_year', 'Please Enter The Publish Year') ?>
            </div>
        </div>

        <div class="formDiv">
            <?php FormClass::FormLabel('genre', 'Genre', 'formLabel label'); ?>
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

<?php 
    include "components/footer.php";
?>

</body>
</html>
