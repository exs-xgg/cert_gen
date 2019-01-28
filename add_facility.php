<?php
   include 'db_con.php';
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Facility Form</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
           $('#region').on('change',function(){
               var regionID = $(this).val();
               if(regionID){
                   $.ajax({
                       type:'POST',
                       url:'ajaxData.php',
                       data:'region_code='+regionID,
                       success:function(html){
                           $('#province').html(html);
                           $('#muncity').html('<option value="">Select province first</option>'); 
                       }
                   }); 
               }
               else{
                   $('#province').html('<option value="">Select region first</option>');
                   $('#muncity').html('<option value="">Select province first</option>'); 
               }
           });
           
           $('#province').on('change',function(){
               var provinceID = $(this).val();
               if(provinceID){
                   $.ajax({
                       type:'POST',
                       url:'ajaxData.php',
                       data:'province_code='+provinceID,
                       success:function(html){
                           $('#muncity').html(html);
                       }
                   }); 
               }else{
                   $('#muncity').html('<option value="">Select province first</option>'); 
               }
           });
         });
      </script>
   </head>
   <body>
      <div class="container">
       
        <div class="float-right">
           <a href="update_facility.php" class="btn btn-info">Update Facility</a>
        </div>
        <br>
        <p></p>
         <form method="POST" action="add_facility_process.php" enctype="multipart/form-data" name="facil_form" id="facil_form">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="facility_id">Facility ID</label>
                     <input type="test" name="facility_id" id="facility_id" class="form-control" required>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="hfhudcode">hfhudcode</label>
                     <input type="text" name="hfhudcode" class="form-control" id="hfhudcode" required>
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-4">
                  <?php
                     include ('dbConfig.php');
                     
                     $query = $db->query("SELECT * FROM region ORDER BY id ASC");
                     $rowCount = $query->num_rows;
                     ?>
                  <div class="form-group">
                     <label for="region">Region</label>
                     <select name="region" id="region" class="form-control" required>
                        <option value="">Select Region</option>
                        <?php
                           if ($rowCount > 0)
                               {
                               while ($row = $query->fetch_assoc())
                                   {
                                   echo '<option value="' . $row['region_code'] . '">' . $row['region_name'] . '</option>';
                                   }
                               }
                             else
                               {
                               echo '<option value="">Region not available</option>';
                               }
                           
                           ?>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="province">Province</label>
                     <select name="province" id="province" class="form-control" required>
                        <option value="">Select region first</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="muncity">Muncipality/City</label>
                     <select name="muncity" id="muncity" class="form-control" required onchange="faci_name(this.value)">
                        <option value="">Select province first</option>
                     </select>
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="facility_name">Facility Name</label>
                     <input type="text" name="facility_name" id="facility_name" class="form-control" required>
                  </div>
               </div>
            </div>
            <input type="file" name="logo" name="logo" id="logo" class="btn btn-link" required>
            <br />
            <br />
            <input type="submit" name="submit" class="btn btn-info" value="Add Facility" id="submit">
         </form>
      </div>
      <!-- end main cont -->
      <style>
         .error{
         color: red;
         font-size:11px;
         }
      </style>
      <script>
        function faci_name(fname){
          var fac_name = new XMLHttpRequest();
          fac_name.open('GET', 'ajaxData.php?facility_name='+fname, true);
          fac_name.onload = function(){
            $('#facility_name').val(this.responseText);
            console.log(this.responseText);
          }
          fac_name.send();
        }
      </script>
   </body>
</html>
