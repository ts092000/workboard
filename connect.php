<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','vanminh10');
    define('DB','workboard');

    function open_database(){
        $conn = new mysqli(HOST,USER,PASS,DB);
        if($conn->connect_error){
            die('Connect error: '. $conn->connect_error);
        }
        return $conn;
    }

    $conn = open_database();
?>