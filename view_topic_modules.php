<?php 	

include 'db_con.php';

if (isset($_POST['id'])) {
	$output = '';
	$select_topic = "SELECT * FROM topic WHERE mod_id = '".$_POST['id']."' ";
	$result = mysqli_query($con, $select_topic);

while ($topic_result = $result->fetch_assoc()) {
	echo	$exploded_topic = $topic_result['topic_name'];
	}	

	

	// $topic_query = explode('<br>', $exploded_topic);
	
	 // json_encode($exploded_topic);
}
 ?>
