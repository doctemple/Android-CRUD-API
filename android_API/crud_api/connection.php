<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "crud_android";

$con = mysqli_connect($host,$user,$pass, $db);
if ($con -> connect_errno) {
  echo $con -> connect_error;
  exit();
}

$con -> set_charset("utf8");

 ?>
