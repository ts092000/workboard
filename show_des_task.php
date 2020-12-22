<?php
include('connect.php');

if(isset($_POST['id_task'])){
    $id_task = $_POST['id_task'];
    $getDes = "SELECT description FROM task WHERE id = $id_task";
    
    $showDesDB = $conn->query($getDes);
    if($showDesDB){
        $showDes = $showDesDB->fetch_assoc();
        if($showDes["description"]){
            echo $showDes["description"]; 
        }echo "Click to write a description...";
    }else{
        echo "Click to write a description...";
    }
    // if (mysqli_query($conn, $insert_name) === TRUE) {
    //     echo "Add to do OK OK";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}