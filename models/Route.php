<?php

require_once "../REST_API/models/Post.php";

// Use to scan directory for files
// $cont = scandir('../REST_API/views/index.php');

class Route {

    static function get($uri, callable $callback = NULL) {

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://localhost/Projects/REST_API/$uri");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($curl);
        curl_close($curl);

        // print_r($output);

        if($callback !== NULL){
            $callback($output);
        } else {
            echo "<hr>No Callback Supplied<hr>";
        }

    }
}
?>