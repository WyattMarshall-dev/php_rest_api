<?php
require_once "../models/curl.php";

$author = isset($_GET['author']) ? rawurlencode($_GET['author']) : '';
$category = isset($_GET['category']) ? rawurlencode($_GET['category']) : '';

$response = CURL::GET("/api/post/index.php?author={$author}&category={$category}");
include("components/index.php");



?>
