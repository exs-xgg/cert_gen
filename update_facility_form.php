<?php 
include 'db_con.php';
include 'session_check.php';
$hfhudcode = '';
$hfhudname = '';
$region_code = '';
$province_code = '';
$muncity = '';
$fac_id = '';
$logo = '';
 

$update_code = $_GET['upd'];
// echo $_GET['upd'];
$select_data = "SELECT * FROM facility WHERE hfhudcode = '$update_code' ";
$select_data_query = mysqli_query($con, $select_data);
while ($row = $select_data_query->fetch_assoc()) {
	$hfhudcode = $row['hfhudcode'];
	$hfhudname = $row['hfhudname'];
	$region_code = $row['region_code'];
	$province_code = $row['province_code'];
	$muncity = $row['muncity_code'];
	$fac_id  = $row['fac_id'];
   $id = $row['id'];
}
$select_logo = "SELECT * FROM training_facility WHERE fac_id = '$fac_id'";
$select_logo_query = mysqli_query($con, $select_logo);
while ($logo_row = $select_logo_query->fetch_assoc()) {
		$logo = $logo_row['logo'];
      $tf_id = $logo_row['id'];
}

$select_province = "SELECT * FROM province WHERE province_code = '".$province_code."' ";
$province_query = mysqli_query($con, $select_province)or die($con->error);
while ($prov_row = $province_query->fetch_assoc()) {
   $prov_code = $prov_row['province_name'];
}
$select_muncity = "SELECT * FROM muncity WHERE muncity_code = '".$muncity."' ";
$muncity_query = mysqli_query($con, $select_muncity);
while ($muncity_row = $muncity_query->fetch_assoc()) {
   $muncity_val = $muncity_row['muncity_name'];

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <script src="js/jquery-3.3.1.min.js"></script>
   <style>
       img{
         cursor: pointer;
          }
   </style>
</head>
<body>
<div class="container">
   <?php include 'nav.php'; ?>
   <p></p>
	<form method="POST" action="update_facility_process.php" enctype="multipart/form-data" name="facil_form" id="facil_form">
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input type="hidden" name="tf_id" value="<?php echo $tf_id; ?>">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="facility_id">Facility ID</label>
                     <input type="text" name="facility_id" id="facility_id" class="form-control" required value="<?php echo $fac_id ?>" disabled>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="hfhudcode">hfhudcode</label>
                     <input type="text" name="hfhudcode" class="form-control" id="hfhudcode" required value="<?php echo $hfhudcode ?>" disabled>
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="region">Region</label>
                     <input type="text" name="region" id="region" class="form-control" value="<?php echo $region_code ?>">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="province">Province</label>
                    <input type="text" name="province" id="province" class="form-control" value="<?php echo $prov_code ?>">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="muncity">Muncipality/City</label>
                    <input type="text" name="muncity" id="muncity" class="form-control" value="<?php echo $muncity_val ?>">
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="facility_name">Facility Name</label>
                     <input type="text" name="facility_name" id="facility_name" class="form-control" required value="<?php echo $hfhudname ?>">
                  </div>
               </div>
            </div>
           <!-- <input type="" name="oldfile" class="form-control"  id="oldfile" value="<?php# echo $logo ?>" > --> 
            <img src="facility_logos/<?php echo $logo ?>" width="100px" data-toggle="modal" data-target="#logo-modal"><p></p>
            
            <input type="submit" name="update_btn" class="btn btn-info" value="Update Facility" id="submit">
         </form>
      </div>

      <div class="modal fade" id="logo-modal" role="dialog">
         <div class="modal-dialog ">
            <div class="modal-content ">
               <div class="modal-body">
                  <form method="POST" action="update_facility_process.php" enctype="multipart/form-data" name="facil_form">
                     <button class="close" data-dismiss="modal">&times</button>
                     <input type="hidden" name="tf_id" value="<?php echo $tf_id; ?>">
                     <center>
                        <img src="facility_logos/<?php echo $logo ?>" width="100px" data-toggle="modal" data-target="#logo-modal"><p></p>
                        <input type="file" name="logo" name="logo" id="logo" class="btn btn-link" ><p></p>                        
                     </center>
                     <div class="float-right">
                        <input type="submit" name="upload_logo" value="Upload Logo" class="btn btn-info">
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
</div>
<script>
   // onclick="change_img(this.value)"
   // function function_name(logo) {
   //    var  upd_logo = new XMLHttpRequest();
   //    upd_logo.open('GET', 'update_facility_process.php?logo='+logo, true);
   //    upd_logo.onload = function{
   //       console.log(this.responseText);
   //       document.body.style.backgroundImage = "url('facility_logos/'"+ this.responseText")";
   //    }
   //    upd_logo.send();
   // }
</script>
</body>
</html>