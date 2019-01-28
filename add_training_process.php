
<?php
include 'db_con.php';

echo $facility_id = mysqli_real_escape_string($con, $_POST['facility_name']);
$venue = mysqli_real_escape_string($con, ucwords($_POST['venue']));
$date_start = mysqli_real_escape_string($con, $_POST['date_start']);
$date_end = mysqli_real_escape_string($con, $_POST['date_end']);
$lgu_assigntory = mysqli_real_escape_string($con, ucwords($_POST['lgu_assigntory']));
$module = mysqli_real_escape_string($con, implode('<br>', $_POST['modules']));
$train_name = mysqli_real_escape_string($con, ucwords($_POST['train_name']));
$venue_awarded = mysqli_real_escape_string($con, ucwords($_POST['venue_award']));
$date_awarded = mysqli_real_escape_string($con, $_POST['date_award']);
$topic = mysqli_real_escape_string($con, implode('<br>', $_POST['topics']));



$select_fac = "SELECT hfhudname FROM facility WHERE fac_id = '$facility_id' ";
$select_query = mysqli_query($con, $select_fac)or die($con->error); 

while($row = $select_query->fetch_assoc()){
	echo $fac_name = $row['hfhudname'];	
	}

//print_r($_POST);
$insert_training = "INSERT INTO training (module_type, venue, date_started, date_ended, facility_id, topic_name, lgu_assigntory, train_name, fac_name, date_awarded, venue_awarded ) VALUES ('$module', '$venue', '$date_start', '$date_end', '$facility_id', '$topic', '$lgu_assigntory',' $train_name', '$fac_name', '$date_awarded', '$venue_awarded')";

if ($con->query($insert_training) === TRUE)
	{
	echo "New record created successfully";
	header('location:home.php');
	}
  else
	{
	echo "Error: " . "<br>" . $con->error;
	}

?>