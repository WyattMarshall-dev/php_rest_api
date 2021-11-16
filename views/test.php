<?php
require_once "../models/curl.php";

if (!isset($_GET['author']) && !isset($_GET['category'])) {
    $response = API::GET("/api/post/index.php");
}

?>