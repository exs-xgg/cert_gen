
<?php

if (isset($_GET['topic']))
	{
	include 'db_con.php';

	$id = $_GET['topic'];
	$select = "SELECT topic_name FROM topic WHERE mod_id = $id ";
	$query = mysqli_query($con, $select);
	while ($row = $query->fetch_assoc())
		{
		echo $data = '<li>' . $row['topic_name'] . '</li>  ';
		}
	}

?>