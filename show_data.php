<?php
include('connect.php');

$DB_task = "select * from task";
$DB_to_do_list = "select * from to_do_list";
$rs_task = $conn->query($DB_task);
$rs_to_to_list = $conn->query($DB_to_do_list);
$title = array();
$id_task = array();
$name = array();
$id_todolist = array();
if ($rs_task->num_rows > 0 && $rs_to_to_list->num_rows > 0) {
    // output data of each row
    while($row = $rs_task->fetch_assoc()) {
        array_push($id_task, $row["id_task"]);
        array_push($title, $row["title"]);
    }

    while($row = $rs_to_to_list->fetch_assoc()) {
        array_push($name, $row["name"]);
        array_push($id_todolist, $row["id"]);
    }

    echo json_encode(array('id_task'=>$id_task, 'title'=>$title,'name'=> $name, 'id'=> $id_todolist));
} else {
    echo "0 results";
}