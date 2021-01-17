<?php
header("Access-Control-Allow-Origin: *");
header("content-type:application/json");
include 'connection.php';

$id = $_POST['id'];

$query = mysqli_query($con, "DELETE FROM data WHERE id = '$id' ");

if($query){
  $response['success'] = 'true';
  $response['message'] = 'ลบข้อมูล สำเร็จ';
}else{
  $response['success'] = 'false';
  $response['message'] = 'ลบข้อมูล ล้มเหลว';
}

echo json_encode($response);
?>
