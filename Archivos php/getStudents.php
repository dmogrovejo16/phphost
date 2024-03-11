<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods. POST, GET, DELETE, PUT, PATCH, OPTIONS");
header('Access-Control-Allow-Headers: token, Content-Type');
include "config.php";
$data = array();
$q = mysqli_query($con, "SELECT * FROM `usuario`");

while ($row = mysqli_fetch_object($q)){
    $data[]= $row;
}

echo json_encode($data);
echo mysqli_error($con);