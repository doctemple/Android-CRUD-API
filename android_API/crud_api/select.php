<?php
header("Access-Control-Allow-Origin: *");
header("content-type:application/json");
include 'connection.php';
$query = mysqli_query($con, "SELECT * FROM data");
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
  $response['message'] = 'โหลดข้อมูลล่าสุด สำเร็จ';
  $response['total'] = $total;
  $response['data'] = $qry_array;
}else{
  $response['success'] = 'false';
  $response['message'] = 'โหลดข้อมูลผิดพลาด';
}

echo json_encode($response);
?>
