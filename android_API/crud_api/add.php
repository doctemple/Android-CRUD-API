<?php
header("Access-Control-Allow-Origin: *");
header("content-type:application/json");
include 'connection.php';

$uid = $_POST['uid'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$response = array();
$query = mysqli_query($con, "INSERT INTO data (uid, name, phone, address) VALUES ('$uid','$name','$phone','$address')");

if($query){
  $response['success'] = 'true';
  $response['message'] = 'เพิ่มข้อมูล สำเร็จ';
}else{
  $response['success'] = 'false';
  $response['message'] = 'เพิ่มข้อมูล ล้มเหลว';
}

echo json_encode($response);
?>
