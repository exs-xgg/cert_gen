
<?php
include 'db_con.php';

// single delete

if (isset($_GET['del']))
  {
  if ('onclick == yes')
    {
    $id = $_GET['del'];
    $select_training_id = "SELECT * FROM trainee WHERE id=$id LIMIT 1";
    $select_query = mysqli_query($con, $select_training_id);
    while ($row = $select_query->fetch_assoc()) {
      $train_id_result = $row['train_id'];
    }

    $con->query("DELETE FROM trainee WHERE id=$id");
    $_SESSION['msg'] = "Data Deleted";
    $_SESSION['msg_type'] = "danger";
    header('location:all_participants_in_training.php?view='.$train_id_result.'');
    }
  }

if (isset($_GET['venue']))
  {
  $id = $_GET['venue'];
  $select_train_id = "SELECT * FROM trainee WHERE id = $id ";
  $train_id_query = mysqli_query($con, $select_train_id);
  $train_row = $train_id_query->fetch_assoc();
  $train_id = $train_row['train_id'];
  $select_training = "SELECT * FROM training WHERE id = $train_id ";
  $training_query = mysqli_query($con, $select_training);
  $training_venue = $training_query->fetch_assoc();
  echo $venue = $training_venue['venue'];
  }

?>