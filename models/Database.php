<?php 

class Database {
    static function connect(){
        $db = new mysqli("localhost", "root", "", "php_book");

        if(!$db){
            die("Database Connection Failed...<br>");
        } else {
            return $db;
        }
    }
}

?>