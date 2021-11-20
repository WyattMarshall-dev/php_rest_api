<?php
require_once "session_handler.php";
require_once "../../models/curl.php";

// Validate Form Contents
// On Error, this passes the _POST values from the form back to the page through the _SESSIONS['post'] variable
    $errArr = [];
    $sucArr = [];
    $postArr = [];
    foreach ($_POST as $key => $value) {
        $postArr[$key] = $value;
        if (!$value) {
            $errArr[$key] = "Error";
        } else {
            $sucArr[$key] = 'Success';
        }
    }
    
    if ($errArr) {
        unset($_SESSION['success']);
        $_SESSION['errors'] = $errArr;
        $_SESSION['post'] = $postArr;
        $redir =  $_SERVER['HTTP_REFERER'];
        $_POST['name'] = 'new Name';
        header("Location: $redir");
    } else {
        unset($_SESSION['errors']);
        $_SESSION['success'] = 'Form Submitted Successfully!';
        CURL::POST('http://localhost/Projects/REST_API/api/post/create.php');
        header("Location: http://localhost/projects/REST_API/views/index.php");
    }

?>
