<?php
header('Access-Control-Allow-Origin: *');
header('Content-Tyoe: application/json');
    require_once "../../models/Post.php";

    $author = isset($_GET['author']) ? $_GET['author'] : '';
    $genre = isset($_GET['category']) ? $_GET['category'] : '';

    $result = Post::index($genre, $author);
    $rowCnt = $result->num_rows;
    $res = array();
    $res['information'] = array(
        "endpoint" => "index",
        "author" => "Wyatt Marshall",
        "ObjectCount" => $rowCnt
    );
    $res['data'] = array();

    while ($row = $result->fetch_assoc()) {
        $post_item = $row;
        array_push($res['data'], $post_item);
        } 

    echo json_encode($res);
?>

