
<?php
include 'db_con.php';

if (isset($_GET['name']))
	{
	$fac_name = $_GET['name'];
	$select_id = "SELECT * FROM facility WHERE hfhudname LIKE '%" . $fac_name . "%' LIMIT 1  ";
	$query_name = mysqli_query($con, $select_id);
		if (mysqli_num_rows($query_name)) {
			$id_row = $query_name->fetch_assoc();
			echo $facility_id = $id_row['fac_id'];
		}
		
	}

if (isset($_GET['id']))
	{
	$fac_id = $_GET['id'];
	$select_name = "SELECT * FROM facility WHERE fac_id = $fac_id LIMIT 1 ";
	$query_id = mysqli_query($con, $select_name);
	$name_row = $query_id->fetch_assoc();
	echo $facility_name = $name_row['hfhudname'];
	}

if (isset($_GET['topic']))
	{
	$topic_value = '';
	$topic = $_GET['topic'];
	$select_topic = "SELECT * FROM training WHERE id LIKE '%" . $topic . "%' LIMIT 1 ";
	$topic_query = mysqli_query($con, $select_topic);
	if ($topic_query->num_rows > 0)
		{
		while ($topic_row = $topic_query->fetch_assoc())
			{
			$topic_value_explode = explode("<br>", $topic_row['topic_name']);
			}

		while (list($top_array, $topic_val) = each($topic_value_explode))
			{
			$topic_value.= '<input type="checkbox" value="' . $topic_val . '" name="part_topic[]" id="topic">' . ' ' . $topic_val . '<br>';
			}

		echo $topic_value;
		}
	  else
		{
		echo "No Training";
		}
	}

?>