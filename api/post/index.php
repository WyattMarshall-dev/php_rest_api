<?php
header('Access-Control-Allow-Origin: *');
header('Content-Tyoe: application/json');
    require_once "../../models/Post.php";

    $vars = array();
    $author = isset($_GET['author']) ? $vars['author'] = $_GET['author'] : null;
    $genre = isset($_GET['category']) ? $vars['genre'] = $_GET['category'] : null;

    $result = Post::index($vars);
    $rowCnt = $result->num_rows;
    $res = array();
    $res['information'] = array(
        "endpoint" => "index",
        "author" => "Wyatt Marshall",
        "ObjectCount" => $rowCnt,
        $vars
    );
    $res['data'] = array();

    while ($row = $result->fetch_assoc()) {
        $post_item = $row;
        array_push($res['data'], $post_item);
        } 

    echo json_encode($res);
?>

