<?php 
session_start();
$con = new mysqli('localhost', 'root', '', 'cert_gen');

if($con->connect_error){
     die("con error". $con->connect->error);
 }


$active = $_POST['active'];
$admin = $_POST['admin'];


$fname1 = strip_tags($_POST['fname']);
$mname1 = strip_tags($_POST['mname']);
$lname1 = strip_tags($_POST['lname']);
$uname1 = strip_tags($_POST['username']);
$pass1 = strip_tags($_POST['pass']);
$confirm_pass1 = strip_tags($_POST['con_pass']);


$fname = mysqli_real_escape_string($con, $_POST['fname']);
$mname = mysqli_real_escape_string($con, $_POST['mname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$uname = mysqli_real_escape_string($con, $_POST['username']);
$pass = mysqli_real_escape_string($con, $_POST['pass']);
$confirm_pass = mysqli_real_escape_string($con, $_POST['con_pass']);


$fname = htmlspecialchars($_POST['fname']);
$mname = htmlspecialchars($_POST['mname']);
$lname = htmlspecialchars($_POST['lname']);
$uname = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['pass']);
$confirm_pass = htmlspecialchars($_POST['con_pass']);


echo $fname . "<br>";
echo $mname . "<br>";
echo $lname . "<br>";
echo $uname . "<br>";
echo $pass . "<br>";
echo $confirm_pass . "<br>";
echo $active . "<br>";
echo $admin . "<br>";

$password = md5($pass);
	$select = "SELECT * From users where username = '$uname' && password = '$password' ";
	$select_query = mysqli_query($con, $select) ;
	
	if(mysqli_num_rows($select_query) == 0){
		$insert = "INSERT INTO users (username, password, fname, mname, lname, is_admin, is_active) VALUES ('$uname', '$password', '$fname', '$mname', '$lname', '$admin', '$active')";
		$inser_query = mysqli_query($con, $insert) or die();

		header('location:index.php');

    
	}
	else{
		echo "try again";
		die();
	}
	






 ?>