<?php
require_once "../models/curl.php";

if (isset($_GET['id'])) {
    $response = CURL::GET("/api/post/show.php?id={$_GET['id']}");

    if ($response['data']) {
        include("components/show.html");
    } else {
        header("Location: http://localhost/Projects/REST_API/views/index.php");
        exit;
    }
} 

?>

