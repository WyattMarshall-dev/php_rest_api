<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Tyoe: application/json');

    require_once "../../models/Post.php";

    if (isset($_GET['id'])) {
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

    }
    
    if (isset($_GET['category'])){
        $genre = $_GET['category'];

        $result = Post::show(null, $genre);
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
    }

    if (isset($_GET['author'])){
        $author = $_GET['author'];

        $result = Post::show(null, null, $author);
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
    }

?>
