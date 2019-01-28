<?php 	

include 'db_con.php';

if (isset($_GET['train_topic'])) {
	$output = '';
	$select_topic = "SELECT topic_name FROM training WHERE id = '".$_GET['train_topic']."' ";
	$result = mysqli_query($con, $select_topic) or die($con->error);

	while ($topic_result = $result->fetch_assoc()) {
		echo $output .= $topic_result['topic_name'];
	}
		$train_output = explode("<br>", $output);


}
 ?>