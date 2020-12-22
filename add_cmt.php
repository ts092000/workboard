<?php
include('connect.php');

if(isset($_POST['id_card']) && isset($_POST['text'])){
    $id_card = $_POST['id_card'];
    $text = $_POST['text'];
    $update_des = "UPDATE task SET description = '$text' WHERE id = $id_card";

    if (mysqli_query($conn, $update_des) === TRUE) {
        echo "Add des OK OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}