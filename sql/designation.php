<?php 
include '../db_con.php';

$create_tb = "CREATE TABLE designation(id INT(6) AUTO_INCREMENT PRIMARY KEY, 
role_name VARCHAR(50) )";
       
$query = mysqli_query($con, $create_tb);

$insert_data = "INSERT INTO designation(role_name)VALUES('President'),
('Vice President'), 
('Board of Trustee'), 
('Corporate Secretary'),
('Executive Director'),
('IT Consultant'),
('SP for Advocacy & Operations'),
('SP for Digital Health Programs'),
('Staff Management Officer'), 
('Health Program Partner'),
('Network & Systems Partner'),
('Platform & Innovation Partner'),
('Finance Officer'),
('Data Protection Officer')";

$ins_query= mysqli_query($con, $insert_data);



 ?> 