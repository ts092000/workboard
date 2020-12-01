<?php
include('connect.php');

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $insert_name = "INSERT INTO to_do_list (name) VALUES ('$name')";

    if (mysqli_query($conn, $insert_name) === TRUE) {
        echo "Add to do OK OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
