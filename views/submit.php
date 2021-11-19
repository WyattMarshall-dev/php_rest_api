<?php

$uri =  http_build_query($_POST);
header("Location: http://localhost/Projects/REST_API/views/index.php?{$uri}");

?>