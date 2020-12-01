<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','workboard');

    function open_database(){
        $conn = new mysqli(HOST,USER,PASS,DB);
        if($conn->connect_error){
            die('Connect error: '. $conn->connect_error);
        }
        return $conn;
    }

    $sql = "select * from to_do_list";
    $conn = open_database();
    $rs = $conn->query($sql);
    if ($rs->num_rows > 0) {
        // output data of each row
        while($row = $rs->fetch_assoc()) {
            echo "id: " . $row["id"]. " - name: " . $row["name"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>