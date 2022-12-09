<?php

header("Content-Type:application/json");

include('dbconfig.php');

$stmt = $dbconnect->prepare("SELECT * from emp_tbl");

$stmt->execute();
$result = $stmt->get_result();
$output = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($output);

?>