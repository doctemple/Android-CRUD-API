<?php
header("Access-Control-Allow-Origin: *");
header("content-type:application/json");
include 'connection.php';
$id = $_POST['id'];
$query = mysqli_query($con, "SELECT * FROM data WHERE id = '$id'");
$data = array();
$qry_array = array();
$i = 0;
$total = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) {
  $data['id'] = $row['id'];
  $data['uid'] = $row['uid'];
  $data['name'] = $row['name'];
  $data['phone'] = $row['phone'];
  $data['address'] = $row['address'];
  $qry_array[$i] = $data;
  $i++;
}

if($query){
  $response['success'] = 'true';
  $response['message'] = 'โหลดข้อมูล พนักงานสำเร็จ';
  $response['total'] = $total;
  $response['data'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'โหลดข้อมูล ผิดพลาด';
}

echo json_encode($response);
?>
