
<?php
include 'db_con.php';

$count = "SELECT id FROM training ORDER BY id DESC LIMIT 1 ";
$query = mysqli_query($con, $count);
$value = $query->fetch_assoc();
$fname = strip_tags($_POST['fname']);
$mname = strip_tags($_POST['mname']);
$lname = strip_tags($_POST['lname']);
$cert_type = strip_tags($_POST['cert_type']);
$hrs = strip_tags($_POST['hrs']);
$designation = strip_tags($_POST['designation']);
$train_id = strip_tags($_POST['train_id']);

echo $facility_code = strip_tags($_POST['fac_id']);

$fname = mysqli_real_escape_string($con, $_POST['fname']);
$mname = mysqli_real_escape_string($con, $_POST['mname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$cert_type = mysqli_real_escape_string($con, $_POST['cert_type']);
$hrs = mysqli_real_escape_string($con, $_POST['hrs']);
$designation = mysqli_real_escape_string($con, $_POST['designation']);
$train_id = mysqli_real_escape_string($con, $_POST['train_id']);
$facility_code = mysqli_real_escape_string($con, $_POST['fac_id']);
$title = mysqli_real_escape_string($con, ucwords($_POST['title']));
$suffix = mysqli_real_escape_string($con, ucwords($_POST['suffix']));



$fname = htmlspecialchars($_POST['fname']);
$mname = htmlspecialchars($_POST['mname']);
$lname = htmlspecialchars($_POST['lname']);
$cert_type = htmlspecialchars($_POST['cert_type']);
$hrs = htmlspecialchars($_POST['hrs']);
$designation = htmlspecialchars($_POST['designation']);
$train_id = htmlspecialchars($_POST['train_id']);
$facility_code = htmlspecialchars($_POST['fac_id']);
$topics = mysqli_real_escape_string($con, implode("<br>", $_POST['part_topic']));

$select_facility = "SELECT * FROM facility WHERE fac_id = '$facility_code' LIMIT 1";
$select_facility_query = mysqli_query($con, $select_facility);
$row = $select_facility_query->fetch_assoc();
echo $fac_name = $row['hfhudname'];
$fname = ucwords($_POST['fname']);
$mname = ucwords($_POST['mname']);
$lname = ucwords($_POST['lname']);

if (!empty($title)) {
	$title = $title . '.';
}
else{
	$title = $title;
}


if (!empty($mname))
	{
	$mname = $mname . '.';
	}
  else
	{
	$mname = $mname;
	}

$cert_date = date('Y');
$cert_sub = substr($cert_date, 2);


$cert_letter = "";

if ($cert_type == "Excellence")
	{
	$cert_letter = "E";
	}

if ($cert_type == "Completion")
	{
	$cert_letter = "C";
	}

if ($cert_type == "Participation")
	{
	$cert_letter = "P";
	}



$select = "SELECT * From trainee WHERE fac_id = '$facility_code' AND yr = '$cert_sub' ";
$query = mysqli_query($con, $select);
echo $num = mysqli_num_rows($query);
$sum = $num + 1;
$formsum = str_pad($sum, 3, '0', STR_PAD_LEFT);
$faci_code = str_pad($facility_code, 3, '0', STR_PAD_LEFT);
echo "<br>";
echo $cert_num = "$cert_sub-$faci_code-$formsum$cert_letter";
$insert_participants = "INSERT INTO trainee (fname, mname, lname, designation, fac_id, train_id, cert_no, hrs, topic, type_of_cert, yr, fac_name, suffix , title) VALUES ('$fname', '$mname', '$lname', '$designation', '$facility_code', '$train_id', '$cert_num', '$hrs', '$topics', '$cert_type', '$cert_sub', '$fac_name', '$suffix','$title')";

if ($con->query($insert_participants) === TRUE)
	{

	header('location: add_training_participants.php?add='.$train_id.'');

	}
  else
	{
	echo "Error: " . "<br>" . $con->error;
	}

?>
