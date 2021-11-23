<?php
require_once "../models/curl.php";
require_once "components/checkbox.php";
require_once "components/RadioBtn.php";
require_once "components/session_handler.php";
require_once "components/FormClass.php";

$uri = array();
$year = '';

if(isset($_GET['author']) && $_GET['author'] != null){
    $uri['author'] = $_GET['author'];
}
if(isset($_GET['category']) && $_GET['category'] != null){
    $uri['category'] = $_GET['category'];
}
if (isset($_GET['year']) && (count($_GET['year']) > 1)) {
    $uri['year'] = array($_GET['year'][0], end($_GET['year']));
    $year = $uri['year'];
}

$url = "/api/post/index.php?" . http_build_query($uri);
$response = CURL::GET($url);
include("components/index.php");

?>
