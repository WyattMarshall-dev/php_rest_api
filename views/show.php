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
} else if (isset($_GET['category'])) {
    $category = rawurlencode($_GET['category']);
    $url = "http://localhost/Projects/REST_API/api/post/show.php?category={$category}";
    $get_data = callAPI('GET', $url, false);
    $response = json_decode($get_data, true);

    // print_r($response);

    if(!$response['data']){
        header("Location: errors/404.php");
    } else {
        include("components/index.php");
    }
} else if (isset($_GET['author'])) {
    $author = rawurlencode($_GET['author']);
    $url = "http://localhost/Projects/REST_API/api/post/show.php?author={$author}";
    $get_data = callAPI('GET', $url, false);
    $response = json_decode($get_data, true);

    // print_r($response);

    if(!$response['data']){
        header("Location: errors/404.php");
    } else {
        include("components/index.php");
    }
} else {
    header("Location: errors/400.php");
}

?>

