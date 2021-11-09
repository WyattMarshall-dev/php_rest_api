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

    static function create() {

        $db = Database::connect();

        // $sql = "SELECT * FROM books WHERE id=$id";
        // $result = $db->query($sql);
        // return $result;
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