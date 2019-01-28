<?php
include 'db_con.php';
$facility_id = strip_tags($_POST['facility_id']);
$facility_name = strip_tags($_POST['facility_name']);
$region = strip_tags($_POST['region']);
$province = strip_tags($_POST['province']);
$municipality = strip_tags($_POST['muncity']);
$hfhudcode = strip_tags($_POST['hfhudcode']);

$facility_id = htmlspecialchars($_POST['facility_id']);
$facility_name = htmlspecialchars($_POST['facility_name']);
$region = htmlspecialchars($_POST['region']);
$province = htmlspecialchars($_POST['province']);
$municipality = htmlspecialchars($_POST['muncity']);
$hfhudcode = htmlspecialchars($_POST['hfhudcode']);

$facility_id = mysqli_real_escape_string($con, $_POST['facility_id']);
$facility_name = mysqli_real_escape_string($con, $_POST['facility_name']);
$region = mysqli_real_escape_string($con, $_POST['region']);
$province = mysqli_real_escape_string($con, $_POST['province']);
$municipality = mysqli_real_escape_string($con, $_POST['muncity']);
$hfhudcode = mysqli_real_escape_string($con, $_POST['hfhudcode']);

echo $facility_name = ucwords($facility_name);


$logoname = $_FILES['logo']['name'];
$logotype = $_FILES['logo']['type'];
$logotmp = $_FILES['logo']['tmp_name'];
$image = move_uploaded_file($logotmp, "facility_logos/$logoname");
$insert = "INSERT INTO facility (hfhudcode, hfhudname, region_code, province_code, muncity_code, fac_id ) VALUES ('$hfhudcode', '$facility_name', '$region', '$province', '$municipality', '$facility_id')";

if ($con->query($insert) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $con->error;
}

$insert_training_facility = "INSERT INTO training_facility (logo, fac_id) VALUES('$logoname', '$facility_id') ";

if ($con->query($insert_training_facility) === true) {
    echo "New record created successfully";
    header('location:home.php');
} else {
    echo "Error: " . $insert_training_facility . "<br>" . $con->error;
}
