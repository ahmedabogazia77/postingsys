<?php
include 'conn.php';
$data = array();
$sql = "SELECT *  FROM `discussion` ORDER BY id desc";
$result = $conn->query($sql);
while($row = $result->fetch()){
        array_push($data, $row);
        array_push($data); // bt7ot el data fe array w bt7wlo l json 3shan tb3bto ll js
}

echo json_encode($data);
$conn = null;
exit();



