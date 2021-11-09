<?php

require_once "models/Database.php";
require_once "models/Post.php";
require_once "models/Route.php";


    Route::get('api/post/index.php', function($data){
        include '../REST_API/views/index.php';
    });

    // Route::get("api/post/show.php?id={$id}", function($data){
    //     include '../REST_API/views/index.php';
    // });


?>