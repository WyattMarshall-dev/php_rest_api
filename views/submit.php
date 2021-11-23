<?php

// print_r($_POST);
// echo $_POST['year'][0] . " : " . $_POST['year'][1];
// die();
$uri =  http_build_query($_POST);
// echo $uri;
// die();
header("Location: http://localhost/Projects/REST_API/views/index.php?{$uri}");

?>