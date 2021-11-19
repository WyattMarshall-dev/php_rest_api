<?php
require_once "../models/curl.php";
CURL::POST('http://localhost/Projects/REST_API/api/post/create.php');

header("Location: http://localhost/projects/REST_API/views/index.php");

?>