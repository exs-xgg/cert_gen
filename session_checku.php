
<?php
session_start(); //starts the session

if ($_SESSION['id'])
	{ //checks if user is logged in
	}
  else
	{
	$_SESSION['msg'] = "You need to log in ";
	$_SESSION['msg_type'] = "danger";
	header("location:index.php"); // redirects if user is not logged in
	}

$username = $_SESSION['id']; //assigns user id value
$id_exists = false;
?>
