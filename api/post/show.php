<?php
    // Check to see if these are necessary
    header('Access-Control-Allow-Origin: *');
    header('Content-Tyoe: application/json');

    require_once "../../models/Post.php";

    $post_id = $_GET['id'];

    $result = Post::show($post_id);
    $rowCnt = $result->num_rows;
    $res = array();
    $res['information'] = array(
        "endpoint" => "show",
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
