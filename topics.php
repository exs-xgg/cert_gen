<?php 
include 'db_con.php';

if (isset($_GET['topic'])) {
	$str = '';
	 $topic =  $_GET['topic'];
	 $select_topic = "SELECT * FROM module WHERE id = '".$topic."' ";
	$result = mysqli_query($con, $select_topic) or die($con->error);
	$modules_result = $result->fetch_assoc();
	 $id = $modules_result['id'];
	$select_topic = "SELECT topic_name FROM topic WHERE mod_id = '".$id."' ";
 	$query = mysqli_query($con, $select_topic);

 	while ($all_topics = $query->fetch_assoc()) {
 		 // $all_topics['topic_name'];
 		$str.='<label><input type="checkbox" value="'.$all_topics['topic_name'].'" name="topics[]" id="topic"> '.' ' .$all_topics['topic_name']  . '</label>' . '<br>';
 	}

echo $str;
}

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$select_name = "SELECT * FROM facility WHERE fac_id LIKE  '%".$id."%' LIMIT 1";
	$query = mysqli_query($con, $select_name) or die($con->error);
	$row = $query->fetch_assoc();
	echo $name = $row['hfhudname'];
}
if (isset($_GET['name'])) {
	$name = $_GET['name'];
	$select_id = "SELECT * FROM facility WHERE hfhudname LIKE  '%".$name."%' LIMIT 1";
	$query = mysqli_query($con, $select_id) or die($con->error); 
	$row = $query->fetch_assoc();
	echo $name = $row['fac_id'];
}

 ?> 