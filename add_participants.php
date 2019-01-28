<?php
   $con = new mysqli('localhost', 'root', '', 'cert_gen');
   $count = "SELECT * FROM training ORDER BY id DESC LIMIT 1 ";
   $query = mysqli_query($con, $count);
   $value = $query->fetch_assoc();
   $select = "SELECT hfhudname, hfhudcode FROM facility";
   $query = mysqli_query($con, $select);
   $topic = "SELECT * FROM training WHERE id = '" . $value['id'] . "' ";
   $topic_query = mysqli_query($con, $topic);
   
   function get_topic()
   	{
   	include 'db_con.php'; 
   
   	$str = '';
   	$count = "SELECT id FROM training ORDER BY id DESC LIMIT 1 ";
   	$query = mysqli_query($con, $count);
   	$value = $query->fetch_assoc();
   
   	// echo $value['id'];
   	// for topics get the last id that is inserted in training then it will be post in participants topics
   
   	$topic1 = "SELECT * FROM training WHERE id = '" . $value['id'] . "' ";
   	$topic_query1 = mysqli_query($con, $topic1);
   	while ($rr = $topic_query1->fetch_assoc())
   		{
   		$topic_query_explode = explode('<br>', $rr['topic_name'], -1);
   		}
   
   	while (list($top, $top_val) = each($topic_query_explode))
   		{
   		$str.= '<input type="checkbox" value="' . $top_val . '" name="part_topic[]" id="topic">' . ' ' . $top_val . '<br>';
   		}
   
   	return $str;
   	}
   
   // end of topics
   // for suggestion in fname
   
   $select_name = "SELECT fname FROM trainee";
   $name_query = mysqli_query($con, $select_name);
   
   // for suggestion in fname
   
   $select_lname = "SELECT lname FROM trainee ";
   $lname_query = mysqli_query($con, $select_lname);
   
   // for suggestion in mname
   
   $select_mname = "SELECT mname FROM trainee ";
   $mname_query = mysqli_query($con, $select_mname);
   
   // for designation data list
   
   $designation_list = "SELECT * FROM designation";
   $designation_query = mysqli_query($con, $designation_list);
   
   // for preview pane
   
   $select_trainee = "SELECT * FROM trainee ORDER BY id DESC LIMIT 5";
   $trainee_query = mysqli_query($con, $select_trainee);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Add Participants</title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="container">
         <form method="POST" action="add_participants_process.php" autocomplete="off" id="add_part">
            <div class="form-group">
               <input type="text" name="train_id" id="train_id" class="form-control" value="<?php
                  echo $value['id']; ?>"  hidden>
               <input type="text" name="fac_id" id="fac_id" class="form-control" value="<?php
                  echo $value['facility_id']; ?>"  hidden>
            </div>
            <div class="row">
               <div class="col-md-2" >
               <div class="form-group">
               <label for="title">TiTle</label>
               <input type="text" id="title" name="title" class="form-control" >
               </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="fname">First Name</label>
                     <input type="text" name="fname" id="fname" class="form-control" list="fname_list" required>
                     <datalist id="fname_list">
                        <?php
                           while ($fname_row = $name_query->fetch_assoc()): ?>
                        <option value="<?php
                           echo $fname_row['fname']; ?>"><?php
                           echo $fname_row['fname']; ?></option>
                        <?php
                           endwhile; ?>
                     </datalist>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <label for="mname">Middle Initial</label>
                     <input type="text" name="mname" id="mname" class="form-control" list="mname_list" maxlength="1" >
                     <datalist id="mname_list" >
                        <?php
                           while ($mname_row = $mname_query->fetch_assoc()): ?>
                        <option value="<?php
                           echo $mname_row['mname']; ?>"><?php
                           echo $mname_row['mname']; ?></option>
                        <?php
                           endwhile; ?>
                     </datalist>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="form-group">
                     <label for="lname">Last Name</label>
                     <input type="text" name="lname" id="lname" class="form-control" list="lname_list" required>
                     <datalist id="lname_list">
                        <?php
                           while ($lname_row = $lname_query->fetch_assoc()): ?>
                        <option value="<?php
                           echo $lname_row['lname']; ?>"><?php
                           echo $fname_row['lname']; ?></option>
                        <?php
                           endwhile; ?>
                     </datalist>
                  </div>
               </div>
               <div class="col-md-2" > 
               <div class="form-group" >
               <label for="suffix">Suffix</label>
               <input type="text" id="suffix" name="suffix" class="form-control" >
               </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="designation">Designation</label>
                     <input type="text" name="designation" id="designation" class="form-control" list="designation_list" required>
                     <datalist id="designation_list">
                        <?php
                           while ($desig_row = $designation_query->fetch_assoc()): ?>
                        <option value="<?php
                           echo $desig_row['role_name']; ?>"><?php
                           echo $desig_row['role_name']; ?></option>
                        <?php
                           endwhile; ?>
                     </datalist>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="cert_type">Certificate Type</label>
                     <select name="cert_type" id="cert_type" class="form-control" required>
                        <option>Select the Certficate type</option>
                        <option value="Excellence">Excellence</option>
                        <option value="Completion">Completion</option>
                        <option value="Participation">Participation</option>
                     </select>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="form-group">
                     <label for="hrs">Hours</label>
                     <input type="text" name="hrs" id="hrs" class="form-control" required onkeypress="javascript:return isNumber(event)">
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-10">
               </div>
            </div>
            <!-- end row -->
            <div>
               <button type="button" data-toggle="collapse" data-target="#topic_collapse" class="btn btn-info"><i class="fas fa-eye"></i> See Available Topics</button>
               <p></p>
               <div class="collapse" id="topic_collapse">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="card">
                           <div class="card-body">
                              <?php
                                 echo get_topic(); ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end collpase -->
            </div>
            <p></p>
            <p></p>
            <input type="submit" name="submit" class="btn btn-info" value="Add Participants" id="submit" onclick="call(function(e)) return false;">
         </form>
      </div>
      <!-- end container -->
      <!-- preview get the last five entries from db -->
      <br>
      <table class="table table-striped table-hover">
         <tr>
            <th>Name</th>
            <th></th>
         </tr>
         <tbody>
            <?php
               while ($row = $trainee_query->fetch_assoc()): ?>
            <tr>
               <td><?php
                  echo $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname']; ?></td>
               <td> <button id="<?php
                  echo $row['id']; ?>" onclick="get_id(this.id)"  name="btn_award_modal" class="btn btn-success btn-sm view_id" type="button" data-toggle="modal" data-target="#award_modal"> <i class="fas fa-scroll"></i> Award</button></td>
            </tr>
            <?php
               endwhile; ?>
         </tbody>
      </table>
      <!-- award modal -->
      <div class="modal fade" id="award_modal" role="dialog">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <form method="POST" action="cert_output.php">
                     <!-- it is hidden coz this is just for storing the participants id only -->
                     <div class="form-group">
                        <input type="text" name="award_id" class="form-control" value="<?php
                           echo $row['id']; ?>" id="award_id" hidden >
                     </div>
                     <div class="form-group">
                        <label for="date_award">Date Awarded</label>
                        <input type="date" name="date_award" id="date_award" class="form-control">
                     </div>
                     <div class="form-group">
                        <label for="vanue_award">Venue Awarded</label>
                        <input type="text" name="venue_award" id="vanue_award" class="form-control">
                     </div>
                     <div class="modal-footer">
                        <input type="submit" name="award" value="Generate" class="btn btn-success">
                        <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script src="js/jquery.validate.min.js"></script>
      <script>
         function get_id(clicked_id){
         
         	// alert(clicked_id);
         
         	$('#award_id').val(clicked_id);
         }
         
         function isNumber(evt) {
               var iKeyCode = (evt.which) ? evt.which : evt.keyCode
               if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
                   return false;
         
               return true;
           }    
         
         
         
         $('form').each(function() {
                      $.validator.setDefaults({
                             ignore: []
                      });
                    $(this).validate({
                    	    rules: {
                facility_name: {
                    required: true,
                },
                facility_id: {
                    required: true,
                    
                },
                hfhudcode:{
                	required: true,
                },
                region:{
                	required: true,
                },
                province:{
                	required: true,
                },
                municipality:{
                	required: true,
                },
                logo:{
                	required: true,
                }
         
            },
            messages:{
           		logo: "You need to choose a Logo for the Facility before proceding ",
           },            
                  highlight: function(element) {
                  $(element).closest('.form-control').addClass('is-invalid');
                  },
                  unhighlight: function(element) {
                  $(element).closest('.form-control').removeClass('is-invalid');
                  },
                  errorElement: 'div',
                  errorClass: 'invalid-feedback',
                  errorPlacement: function(error, element) {
                  if(element.parent('.invalid-feedback').length) {
                  error.insertAfter(element.parent());
                  } else {
                  error.insertAfter(element);
                  }
                  }
                  });
                  });
         
      </script>
      <style>
         .error{
         color: red;
         font-size:11px;
         }
      </style>
   </body>
</html>

