<?php 	

include 'db_con.php';

if (isset($_POST['id'])) {
	$output = '';
	$select_topic = "SELECT topic FROM trainee WHERE id = '".$_POST['id']."' ";
	$result = mysqli_query($con, $select_topic);

	$topic_result = mysqli_fetch_assoc($result);

	$exploded_topic = $topic_result['topic'];

	$topic_query = explode('<br>', $exploded_topic);

	
	echo json_encode($topic_query);
}
 ?>
