<?php
    require_once "../../models/Post.php";

    $result = Post::index();
    $rowCnt = $result->num_rows;
    $res = array();
    
    $res['information'] = array(
        "endpoint" => "index",
        "author" => "Wyatt Marshall",
        "Object Count" => $rowCnt
    );

    $res['data'] = array();

    while ($row = $result->fetch_assoc()) {
        $post_item = $row;
        array_push($res['data'], $post_item);
        } 

    echo json_encode($res);



?>

