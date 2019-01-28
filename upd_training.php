
<?php
include 'db_con.php';

// print_r($_POST);

echo $id = mysqli_real_escape_string($con, $_POST['training_id']);
$venue = mysqli_real_escape_string($con, ucwords($_POST['venue']));
$date_start = mysqli_real_escape_string($con, $_POST['date_start']);
$date_end = mysqli_real_escape_string($con, $_POST['date_end']);
$fac_id = mysqli_real_escape_string($con, $_POST['fac_id']);
$lgu_assigntory = mysqli_real_escape_string($con, ucwords($_POST['lgu_assigntory']));

$module_type = $_POST['modules'];
$topic = $_POST['topics'];

$train_name = mysqli_real_escape_string($con, ucwords($_POST['train_name']));
$fac_name = mysqli_real_escape_string($con, $_POST['fac_name']);
$venue_awarded = mysqli_real_escape_string($con, ucwords($_POST['venue_award']));
$date_award = mysqli_real_escape_string($con, ucwords($_POST['date_award']));

if (!empty($topic)){
   $imp_topic = mysqli_real_escape_string($con, implode('<br>', $topic)); 
   $update_topic = "UPDATE training SET topic_name = '$imp_topic' WHERE id = $id ";
   if ($con->query($update_topic) === TRUE){
      echo "updating data is ok";
      }
     else{
      echo $con->error;
      }
   } //END I
  else{
   echo "empty";
   } //END ELSE

if (!empty($module_type)){
   $imp_module = implode('<br>', $module_type); 
   $update_module = "UPDATE training SET module_type = '$imp_module' WHERE id = $id";
   $module_query = mysqli_query($con, $update_module);
   }

$training_info_update = "UPDATE training SET venue = '$venue', date_started = '$date_start', date_ended = '$date_end', facility_id = '$fac_id', lgu_assigntory = '$lgu_assigntory', train_name = '$train_name', fac_name = '$fac_name', date_awarded = '$date_award', venue_awarded = '$venue_awarded' WHERE id = $id";

if ($con->query($training_info_update) === TRUE)
   {
   header('location:home.php');
   }
  else
   {
   echo $con->error;
   }

?>
