<?php
require_once "../models/curl.php";
require_once "components/checkbox.php";
require_once "components/RadioBtn.php";
require_once "components/session_handler.php";
require_once "components/FormClass.php";

$uri = array();
$year = '';

$author = isset($_GET['author']) ? rawurlencode($_GET['author']) : '';
$category = isset($_GET['category']) ? rawurlencode($_GET['category']) : '';
if (isset($_GET['year']) && (count($_GET['year']) > 1)) {
    $uri['year'] = array($_GET['year'][0], end($_GET['year']));
    $year = $uri['year'];
}

$url = "/api/post/index.php?";
foreach ($_GET as $key => $value) {
    if (!($value == '') && !($key == 'year')) {
        $url = $url . "{$key}=" . rawurlencode($value) . "&";
    }
}
$uri = http_build_query($uri);
$url = $url . $uri;
$response = CURL::GET($url);

include("components/index.php");

?>
