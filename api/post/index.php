<?php
header('Access-Control-Allow-Origin: *');
header('Content-Tyoe: application/json');
    require_once "../../models/Post.php";

    $vars = array();
    $author = isset($_GET['author']) ? $vars['author'] = $_GET['author'] : null;
    $genre = isset($_GET['category']) ? $vars['genre'] = $_GET['category'] : null;
    $year = isset($_GET['year']) ? $vars['year'] = $_GET['year'] : null;

    $result = Post::index($vars);
    $rowCnt = $result->num_rows;
    $res = array();

    $res['data'] = array();

    while ($row = $result->fetch_assoc()) {
        $post_item = $row;
        array_push($res['data'], $post_item);
        } 

    // NEW STUFF
    $res['data'] = array_chunk($res['data'], 4, true);

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = 0;
    }

    $res['information'] = array(
        "endpoint" => "index",
        "author" => "Wyatt Marshall",
        "ObjectCount" => $rowCnt,
        'pageCount' => count($res['data']),
    );

    // echo json_encode($res);
    echo json_encode($res);
?>

