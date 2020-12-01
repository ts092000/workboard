<?php
include('connect.php');

$sql = "select * from to_do_list";
$rs = $conn->query($sql);
$name = array();
$id_todolist = array();
if ($rs->num_rows > 0) {
    // output data of each row
    while($row = $rs->fetch_assoc()) {
        array_push($id_todolist, $row["id"]);
        array_push($name, $row["name"]);
    }

    echo json_encode(array('array_id'=>$id_todolist,'array_name'=>$name));
} else {
    echo "0 results";
}