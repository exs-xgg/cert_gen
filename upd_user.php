
<?php
include 'db_con.php';

// print_r($_POST);

$id = mysqli_real_escape_string($con, $_POST['id_val']);
$user = mysqli_real_escape_string($con, $_POST['uname']);
$pass = mysqli_real_escape_string($con, $_POST['pwd']);
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$mname = mysqli_real_escape_string($con, $_POST['mname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$admin = mysqli_real_escape_string($con, $_POST['admin']);
$active = mysqli_real_escape_string($con, $_POST['active']);

if (!empty($pass))
	{
	echo $pass_val = md5($pass);
	$update_pass = "UPDATE users SET password = '$pass_val' WHERE id = '$id'";
	if ($upd_pass_query = mysqli_query($con, $update_pass) === TRUE)
		{
		header('location:crud_user.php');
		}
	}

$update_user = "UPDATE users SET username = '$user', fname = '$fname', mname = '$mname', lname = '$lname', is_admin = '$admin', is_active = '$active' WHERE id = '$id'";

if ($upd_user_query = mysqli_query($con, $update_user) === TRUE)
	{
	header('location:home.php');
	}
  else
	{
	echo $con->error;
	}

?>