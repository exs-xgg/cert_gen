
<?php

// print_r($_POST);

include 'session_check.php';

include 'db_con.php';

$id_val = mysqli_real_escape_string($con, $_POST['update_id']);
$fname_val = mysqli_real_escape_string($con, ucwords($_POST['fname']));
$mname_val = mysqli_real_escape_string($con, ucwords($_POST['mname']));
$lname_val = mysqli_real_escape_string($con, ucwords($_POST['lname']));
$designation_val = mysqli_real_escape_string($con, $_POST['designation']);
$train_id_val = mysqli_real_escape_string($con, $_POST['train_id']);
$fac_id_val = mysqli_real_escape_string($con, $_POST['fac_id']);
$suffix_val = mysqli_real_escape_string($con, ucwords($_POST['suffix']));
$title_val =  mysqli_real_escape_string($con, ucwords($_POST['title']));
// $cert_num_val =  $_POST['cert_num'];

// if (!empty($suffix_val)) {
// 	$suffix_val = $suffix_val.'.';
// }else{
// 	$suffix_val = $suffix_val;
// }
// if (!empty($mname_val)) {
// 	$mname_val = $mname_val.'.';	
// }else{
// 	$mname_val = $mname_val;
// }
// if (!empty($title_val)) {
// 	$title_val = $title_val.'.';
// }else{
// 	$title_val = $title_val;
// }

$hrs_val = mysqli_real_escape_string($con, $_POST['hrs']);
$type_of_cert_val = mysqli_real_escape_string($con, $_POST['cert_type']);
$topic =  $_POST['part_topic'];
$fac_name = mysqli_real_escape_string($con, $_POST['fac_name']);

if (!empty($topic))
	{
	$topic_val = mysqli_real_escape_string($con, implode("<br>", $topic));
	$upd_topics = "UPDATE trainee SET topic='$topic_val'  WHERE id='" . $id_val . "' ";
	if ($upd_topics_query = mysqli_query($con, $upd_topics) === TRUE)
		{
		echo "updating topics is ok";
		}
	  else
		{
		echo $con->error;
		}
	}
  else
	{
	echo "empty";
	}

$upd_data = "UPDATE trainee SET fname='$fname_val', mname='$mname_val', lname='$lname_val', designation='$designation_val', train_id='$train_id_val', fac_id='$fac_id_val', hrs='$hrs_val', type_of_cert='$type_of_cert_val', fac_name = '$fac_name', suffix = '$suffix_val', title = '$title_val' WHERE id='" . $id_val . "' ";

if ($upd_query = mysqli_query($con, $upd_data) === TRUE)
	{
	header('location:home.php');
	}
  else
	{
	echo $con->error;
	}

?>
