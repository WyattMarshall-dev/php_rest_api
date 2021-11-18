<?php
require_once "../models/curl.php";

$author = isset($_GET['author']) ? rawurlencode($_GET['author']) : '';
$category = isset($_GET['category']) ? rawurlencode($_GET['category']) : '';

$url = "/api/post/index.php?";
foreach ($_GET as $key => $value) {
    if (!($value == '')) {
        $url = $url . "{$key}=" . rawurlencode($value) . "&";
    }
}
$response = CURL::GET($url);
include("components/index.php");

?>
