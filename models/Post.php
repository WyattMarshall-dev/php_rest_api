<?php
require_once "Database.php";

class Post {

    static function index(...$var) {

        $db = Database::connect();

        $query = "SELECT * FROM books";
        if ($var) {
            $data = $var[0];
            $keys = array_keys($data);

            for ($i=0; $i < count($keys); $i++) { 
                switch ($i) {
                    case 0:
                        $query = $query . " WHERE ";
                        break;
                    default:
                    $query = $query . " AND ";
                        break;
                }

                switch ($keys[$i]) {
                    case 'author':
                        $query = $query . " {$keys[$i]}='{$data[$keys[$i]]}'";
                        break;
                    case 'genre':
                        $query = $query . " {$keys[$i]}='{$data[$keys[$i]]}'";
                        break;
                    case 'year':
                        $query = $query . " pub_year BETWEEN {$data[$keys[$i]][0]} AND {$data[$keys[$i]][1]}";
                        break;
                    default:
                        # code...
                        break;
                }
            }
        }

    // return $query;
    $result = $db->query($query);
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
            header("Location: http://localhost/Projects/REST_API/views/500.php");
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
            header("Location: http://localhost/Projects/REST_API/views/500.php");
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