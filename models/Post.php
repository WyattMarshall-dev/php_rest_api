<?php
require_once "Database.php";

class Post {

    static function index() {

        $db = Database::connect();

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

    static function create($isbn, $author, $title, $pub_year, $genre, $thumbnail) {

        $db = Database::connect();
        session_start();

        $sql = "INSERT INTO books (isbn, author, title, pub_year, genre, thumbnail) VALUES (
            '$isbn',
            '$author',
            '$title',
            '$pub_year',
            '$genre',
            '$thumbnail'
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

    // Not used....yet
    static function store() {

        $db = Database::connect();

        // $sql = "SELECT * FROM books WHERE id=$id";
        // $result = $db->query($sql);
        // return $result;
    }

    static function edit($id, $isbn, $author, $title, $pub_year, $genre, $thumbnail) {

        $db = Database::connect();
        session_start();

        
        $sql = "UPDATE books SET
            isbn='$isbn',
            author='$author',
            title='$title',
            pub_year='$pub_year',
            genre='$genre',
            thumbnail='$thumbnail'
        WHERE id=$id";

        
        $result = $db->query($sql);
        if(!$result){
            die("Failed to Insert...");
            $_SESSION['error'] = "Insert Failed";
        } else {
            $_SESSION['success'] = "Insert Successful";
            return $result;
        }
    }

    // Not used....yet
    static function update($id) {

        $db = Database::connect();

        // $sql = "SELECT * FROM books WHERE id=$id";
        // $result = $db->query($sql);
        // return $result;
    }

    static function destroy($id) {

        $db = Database::connect();

        $sql = "DELETE FROM books WHERE id=$id";
        $result = $db->query($sql);
        return $result;
    }
}

?>