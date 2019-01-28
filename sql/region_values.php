<?php 

$con = new mysqli('localhost', 'root', '', 'cert_gen');
if($con->connect_error){
     die("con error". $con->connect->error);
 }
 else{
 	echo "insert now";
 }

$insert1 = "INSERT INTO region (region_code, region_name) VALUES ('01', 'REGION I (Ilocos Region)')";
$insert2 = "INSERT INTO region (region_code, region_name) VALUES ('02', 'REGION II (Cagayan Valley)')";
$insert3 = "INSERT INTO region (region_code, region_name) VALUES ('03', 'REGION III (Central Luzon)')";
$insert4 = "INSERT INTO region (region_code, region_name) VALUES ('04', 'REGION IV-A (CALABARZON)')";
$insert5 = "INSERT INTO region (region_code, region_name) VALUES ('05', 'REGION V (Bicol Region)')";
$insert6 = "INSERT INTO region (region_code, region_name) VALUES ('06', 'REGION VI (Western Visayas)')";
$insert7 = "INSERT INTO region (region_code, region_name) VALUES ('07', 'REGION VII (Central Visayas)')";
$insert8 = "INSERT INTO region (region_code, region_name) VALUES ('08', 'REGION VIII (Eastern Visayas)')";
$insert9 = "INSERT INTO region (region_code, region_name) VALUES ('09', 'REGION IX (Zamboanga Peninsula)')";
$insert10 = "INSERT INTO region (region_code, region_name) VALUES ('10', 'REGION X (Nothern Mindanao)')";
$insert11 = "INSERT INTO region (region_code, region_name) VALUES ('11', 'REGION XI (Davao Region)')";
$insert12 = "INSERT INTO region (region_code, region_name) VALUES ('12', 'REGION XII (Soccsksargen)')";
$insert13 = "INSERT INTO region (region_code, region_name) VALUES ('13', 'NCR - National Capital Region')";
$insert14 = "INSERT INTO region (region_code, region_name) VALUES ('14', 'CAR - Cordillera Administrative Region')";
$insert15 = "INSERT INTO region (region_code, region_name) VALUES ('15', 'ARMM - Autonomous Region in Muslim Mindanao')";
$insert16 = "INSERT INTO region (region_code, region_name) VALUES ('16', 'REGION XIII (Caraga)')";
$insert17 = "INSERT INTO region (region_code, region_name) VALUES ('17', 'REGION IV-B (MIMAROPA)')";
$insert18 = "INSERT INTO region (region_code, region_name) VALUES ('18', 'NIR - Negros Island Region')";

$query1 = mysqli_query($con, $insert1);
$query2 = mysqli_query($con, $insert2);
$query3 = mysqli_query($con, $insert3);
$query4 = mysqli_query($con, $insert4);
$query5 = mysqli_query($con, $insert5);
$query6 = mysqli_query($con, $insert6);
$query7 = mysqli_query($con, $insert7);
$query8 = mysqli_query($con, $insert8);
$query9 = mysqli_query($con, $insert9);
$query10 = mysqli_query($con, $insert10);
$query11 = mysqli_query($con, $insert11);
$query12 = mysqli_query($con, $insert12);
$query13 = mysqli_query($con, $insert13);
$query14 = mysqli_query($con, $insert14);
$query15 = mysqli_query($con, $insert15);
$query16 = mysqli_query($con, $insert16);
$query17 = mysqli_query($con, $insert17);
$query18 = mysqli_query($con, $insert18);


 ?>
