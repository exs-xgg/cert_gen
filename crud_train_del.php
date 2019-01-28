
<?php
include 'db_con.php';

// single delete

if (isset($_GET['del']))
	{
	if ('onclick == yes')
		{
		$id = $_GET['del'];
		$delete = "DELETE FROM training WHERE id=$id";
		if ($con->query($delete) === TRUE)
			{
			echo "Record deleted successfully";
			$_SESSION['msg'] = "Data Deleted";
			$_SESSION['msg_type'] = "danger";
			header('location:home.php');
			}
		  else
			{
			echo "Error deleting record: " . $con->error;
			}
		}
	}

?>