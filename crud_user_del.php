
<?php
include 'db_con.php';

// single delete

if (isset($_GET['del']))
	{
	if ('onclick == yes')
		{
		$id = $_GET['del'];
		$con->query("DELETE FROM users WHERE id=$id");
		$_SESSION['msg'] = "Data Deleted";
		$_SESSION['msg_type'] = "danger";
		header('location:home.php');
		}
	}

?>
