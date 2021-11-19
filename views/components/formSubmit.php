<?php
require_once "session_handler.php";
require_once "../../models/curl.php";

// Validate Form Contents
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
    // echo $_SERVER['HTTP_REFERER'];
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
        // $redir =  $_SERVER['HTTP_REFERER'];
        // header("Location: $redir");
        CURL::POST('http://localhost/Projects/REST_API/api/post/create.php');
        header("Location: http://localhost/projects/REST_API/views/index.php");
    }

?>