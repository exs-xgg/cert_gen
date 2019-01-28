
<?php
include 'db_con.php';

$mod_name = $_POST['module_name'];

// $top = $_POST['topic'];
// $topic = implode("<br>", $top);

$top1 = $_POST['topic1'];
$top2 = $_POST['topic2'];
$top3 = $_POST['topic3'];
$top4 = $_POST['topic4'];
$top5 = $_POST['topic5'];
$top6 = $_POST['topic6'];
$top7 = $_POST['topic7'];
$top8 = $_POST['topic8'];
$select_id = "SELECT id FROM module ORDER BY id DESC LIMIT 1";
$query_id = mysqli_query($con, $select_id);
$row = $query_id->fetch_assoc();
echo $num = $row['id'];
echo $ids = $num + 1;

if (!empty($mod_name))
	{
	$insert_mod_name = "INSERT INTO module (module_name) VALUES ('$mod_name') ";
	$ins_module = mysqli_query($con, $insert_mod_name);
	}

if (!empty($top1))
	{
	$insert_top1 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top1', '$ids') ";
	$ins_query1 = mysqli_query($con, $insert_top1);
	}

if (!empty($top2))
	{
	$insert_top2 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top2', '$ids') ";
	$ins_query2 = mysqli_query($con, $insert_top2);
	}

if (!empty($top3))
	{
	$insert_top3 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top3', '$ids') ";
	$ins_query3 = mysqli_query($con, $insert_top3);
	}

if (!empty($top4))
	{
	$insert_top4 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top4', '$ids') ";
	$ins_query4 = mysqli_query($con, $insert_top4);
	}

if (!empty($top5))
	{
	$insert_top5 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top5', '$ids') ";
	$ins_query5 = mysqli_query($con, $insert_top5);
	}

if (!empty($top6))
	{
	$insert_top6 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top6', '$ids') ";
	$ins_query6 = mysqli_query($con, $insert_top6);
	}

if (!empty($top7))
	{
	$insert_top7 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top7', '$ids') ";
	$ins_query7 = mysqli_query($con, $insert_top7);
	}

if (!empty($top8))
	{
	$insert_top8 = "INSERT INTO topic (topic_name, mod_id) VALUES ('$top8', '$ids') ";
	$ins_query8 = mysqli_query($con, $insert_top8);
	}
	header("'location:home.php");

?>