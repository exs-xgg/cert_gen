
<?php
include 'db_con.php';

if (isset($_GET['del']))
	{
	if ('onclick == yes')
		{
		$id = $_GET['del'];
		$delete_module = "DELETE FROM module WHERE id=$id";
		$delete_topics = "DELETE FROM topic WHERE mod_id=$id ";
		if ($query_mod = mysqli_query($con, $delete_module))
			{
			}
		  else
			{
			$con->error;
			}

		if ($query_topics = mysqli_query($con, $delete_topics))
			{
			header("location:home.php");
			}
		  else
			{
			$con->error;
			}
		}
	}

?>
