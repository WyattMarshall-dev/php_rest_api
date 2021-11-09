<?php
require_once "../models/curl.php";

if (isset($_GET['id'])) {
    $url = "http://localhost/Projects/REST_API/api/post/show.php?id={$_GET['id']}";
    $get_data = callAPI('GET', $url, false);
    $response = json_decode($get_data, true);

    if(!$response['data']){
        header("Location: errors/404.php");
    } else {
        include("components/show.html");
    }
} else {
    header("Location: errors/400.php");
}

?>

