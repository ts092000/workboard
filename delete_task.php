<?php
include('connect.php');

$DB_task = "select * from task";
$rs_task = $conn->query($DB_task);
$count = 0;
if(isset($_POST['index']) && isset($_POST['id'])){
    if ($rs_task->num_rows > 0) {
        while($row = $rs_task->fetch_assoc()) {
            if ($row["id_task"] == $_POST['id']){
                if($count == $_POST['index']){
                    $id_task_del =  $row['id'];
                    $delete_task = "DELETE FROM task WHERE id IN ('$id_task_del')";
                }
                $count++;
            }
        }
    }

    if (mysqli_query($conn, $delete_task) === TRUE) {
        echo "Delete task OK OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}