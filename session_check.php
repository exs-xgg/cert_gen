

<?php
session_start(); //starts the session

if ($_SESSION['id'] && $_SESSION['is_active'] && $_SESSION['is_admin'])
	{ //checks if user is logged in
	}
  else
	{
	$_SESSION['msg'] = "You need to log in ";
	$_SESSION['msg_type'] = "danger";
	header("location:index.php");

	// redeirects if user is not logged in

	}

$username = $_SESSION['id']; //assigns user id value
$active = $_SESSION['is_active'];
$admin = $_SESSION['is_admin'];
$id_exists = false;
$active_exists = false;
$admin_exists = false;
?>

