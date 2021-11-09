<?php

require_once "Database.php";

// Works with global DB
// $db = Database::connect(); 

class Post {

    static function index() {

        $db = Database::connect();
        // global $db;

        $sql = "SELECT * FROM books";
        $result = $db->query($sql);
        return $result;
    }

    static function show($id) {

        $db = Database::connect();

        $sql = "SELECT * FROM books WHERE id=$id";
        $result = $db->query($sql);
        return $result;
    }

    static function create($authorid, $title, $pub_year, $genre) {

        $db = Database::connect();
        session_start();

        $sql = "INSERT INTO books (authorid, title, pub_year, genre) VALUES (
            '$authorid',
            '$title',
            '$pub_year',
            '$genre'
            )";
        
        $result = $db->query($sql);
        if(!$result){
            die("Failed to Insert...");
            $_SESSION['error'] = "Insert Failed";
        } else {
            $_SESSION['success'] = "Insert Successful";
            return $result;
        }
    }

    static function store() {

        $db = Database::connect();

        // $sql = "SELECT * FROM books WHERE id=$id";
        // $result = $db->query($sql);
        // return $result;
    }

    static function edit($id) {

        $db = Database::connect();

        // $sql = "SELECT * FROM books WHERE id=$id";
        // $result = $db->query($sql);
        // return $result;
    }

    static function update($id) {

        $db = Database::connect();

        // $sql = "SELECT * FROM books WHERE id=$id";
        // $result = $db->query($sql);
        // return $result;
    }

    static function destroy($id) {

        $db = Database::connect();

        // $sql = "SELECT * FROM books WHERE id=$id";
        // $result = $db->query($sql);
        // return $result;
    }
}




?>