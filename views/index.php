<?php
require_once "../models/curl.php";

$url = 'http://localhost/Projects/REST_API/api/post/index.php';
$get_data = callAPI('GET', $url, false);
$response = json_decode($get_data, true);


if ($response == NULL) {
    echo "nothing to display";
} else {
    include("components/index.html");
}
?>
