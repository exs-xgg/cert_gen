
<?php
include 'session_check.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/home.css">

</head>
<body>

<div class="container-fluid">
 <?php
include 'nav.php';
 ?>

<div class="row">

  <div class="col-md-1">

    <div class="nav flex-column nav-pills icon-bar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        
      <a class="nav-link active train" id="v-pills-train-tab" data-toggle="pill" href="#v-pills-train" role="tab" aria-controls="v-pills-train" aria-selected="true"><i class="fa fa-chalkboard"><br /><p>Trainings</p></i></a>
      <a class="nav-link icon train" id="v-pills-part-tab" data-toggle="pill" href="#v-pills-part" role="tab" aria-controls="v-pills-part" aria-selected="false"><i class="fa fa-users"><br /><p>Trainees</p></i></a>
      <a class="nav-link train" id="v-pills-faci-tab" data-toggle="pill" href="#v-pills-faci" role="tab" aria-controls="v-pills-faci" aria-selected="false"><i class="fa fa-building"><br /><p>Facilities</p></i></a>
      <a class="nav-link train" id="v-pills-mod-tab" data-toggle="pill" href="#v-pills-mod" role="tab" aria-controls="v-pills-mod" aria-selected="false"><i class="fa fa-file"><br /><p>Modules</p></i></a>
      <a class="nav-link train" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false"><i class="fa fa-user-cog"><br /><p>Users</p></i></a>
    </div>
  </div>
  <div class="col-md-11">
   
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-train" role="tabpanel" aria-labelledby="v-pills-train-tab"><?php
include 'crud_training.php';
 ?></div>
      <div class="tab-pane fade" id="v-pills-part" role="tabpanel" aria-labelledby="v-pills-part-tab"><?php
include 'crud_part.php';
 ?></div>
      <div class="tab-pane fade" id="v-pills-faci" role="tabpanel" aria-labelledby="v-pills-faci-tab"><?php
include 'add_facility.php';
 ?></div>
      <div class="tab-pane fade" id="v-pills-mod" role="tabpanel" aria-labelledby="v-pills-mod-tab"><?php
include 'crud_modules.php';
 ?></div>
      <div class="tab-pane fade" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab"><?php
include 'crud_user.php';
 ?></div>
    </div>
  </div>
</div>
</div>
</body>
<footer>
  <hr width="80%">
 <center><img src="icon/pwu.png" class="img-fluid" width="40"> <p class="center text-muted">Website Design by students of Philippine Women's, Business Information System</p></center>
</footer>
</html>