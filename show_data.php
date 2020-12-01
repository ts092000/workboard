<?php
include('connect.php');

$sql = "select * from to_do_list";
$rs = $conn->query($sql);
$name = array();
if ($rs->num_rows > 0) {
    // output data of each row
    while($row = $rs->fetch_assoc()) {
        array_push($name, $row["name"]);
    }

    echo json_encode($name);
} else {
    echo "0 results";
}