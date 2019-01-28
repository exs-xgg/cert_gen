
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
    .background-color{
      background-color: #e9ecef;
      padding: 25px;
      border-radius: 5px
      

    }

    .background-color1{
      background-color: #e9ecef;

    }
    .act:active{
      border-left: 1px solid #ffffff;
    }
    .nav-link{
      padding: 0px;
    }
    #setting,#log{
      padding-right: 25px
    }
    .img{
      float: left;
    }
    
  </style>
</head>
<body>
  <nav class="navbar navbar-light bg-primary justify-content-end">
 
  <a href="settings.php" class="text-white" id="setting">Settings</a>
    <a href="logout.php" class="text-white" id="log">Logout</a>
   <img src="icon/wah_icon.png" width="40px" class="navbar-brand float-left img" >
</nav>

<p></p>
  <div class="container-fluid">
<div class="row">
  <div class="col-2">
    <div class="background-color1 rounded">
    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">

      <a class="nav-link active act" id="v-pills-training-tab" data-toggle="pill" href="#v-pills-training" role="tab" aria-controls="v-pills-training act" aria-selected="true"><p class="text-dark">Trainings</p></a>

      <a class="nav-link  act" id="v-pills-part-tab" data-toggle="pill" href="#v-pills-part" role="tab" aria-controls="v-pills-part" aria-selected="false"><p class="text-dark">Participants</p> </a>

      <a class="nav-link act" id="v-pills-facility-tab" data-toggle="pill" href="#v-pills-facility" role="tab" aria-controls="v-pills-facility" aria-selected="false act"><p class="text-dark">Facility</p></a>

      <a class="nav-link act" id="v-pills-user-tab" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="false"><p class="text-dark">User</p></a>

      <!-- <a class="nav-link act" id="v-pills-modules-tab" data-toggle="pill" href="#v-pills-modules" role="tab" aria-controls="v-pills-modules act" aria-selected="false"><p class="text-dark">Modules</p></a> -->
    </div>
    </div>
  </div>
  <div class="col-9">
    <div class=" rounded">
    <div class="tab-content " id="v-pills-tabContent">

      <div class="tab-pane fade background-color show active" id="v-pills-training" role="tabpanel" aria-labelledby="v-pills-training-tab"><?php
include 'add_training.php';
 ?></div>

      <div class="tab-pane fade  background-color" id="v-pills-part" role="tabpanel" aria-labelledby="v-pills-part-tab"><?php
include 'add_participants.php';
 ?></div>

      <div class="tab-pane fade background-color" id="v-pills-facility" role="tabpanel" aria-labelledby="v-pills-facility-tab"><?php
include 'add_facility.php';
 ?></div>

      <div class="tab-pane fade background-color" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab"><?php
include 'add_user.php';
 ?></div>
      <!-- <div class="tab-pane fade" id="v-pills-modules" role="tabpanel" aria-labelledby="v-pills-modules-tab"><?php //include 'add_module.php';
 ?></div> -->
      
 
    </div>
    </div>
  </div>
</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>