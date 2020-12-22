<?php
include('connect.php');

if(isset($_POST['id_to_do_list']) && isset($_POST['text'])){
    $id = $_POST['id_to_do_list'];
    $text = $_POST['text'];
    $description = "Click to write a description...";
    $comment = "";
    $insert_task = "INSERT INTO task (id_task, title, description, comment) VALUES ('$id', '$text', '$description', '$comment')";

    if (mysqli_query($conn, $insert_task) === TRUE) {
        echo "Add task OK OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}