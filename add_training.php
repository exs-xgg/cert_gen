<?php
   include 'db_con.php';
   $facility = "SELECT * FROM facility";
   $datalist_facility = mysqli_query($con, $facility);
   $topic1 = "SELECT * FROM module";
   $topic_query1 = mysqli_query($con, $topic1);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <style>
         .chck{
         padding: 5px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <?php
            include 'nav.php';
             ?>
         <form method="POST" action="add_training_process.php" enctype="multipart/form-data">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="facil_name">Facility Name</label>
                     <input type="text" name="facility_name" id="facil_name" class="form-control" required list="facility_data" required>
                     <datalist id="facility_data">
                        <?php   while ($facility_data_row = $datalist_facility->fetch_assoc()): ?>
                        <option value="<?php echo $facility_data_row['fac_id']; ?>"> <?php echo $facility_data_row['hfhudname']; ?></option>
                        <?php endwhile; ?>
                     </datalist>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="train_name">Training Name</label>
                     <input type="text" name="train_name" id="train_name" class="form-control">
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="date_start">Training Started</label>
                     <input type="date" name="date_start" id="date_start" class="form-control" required>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="date_end">Training Ended</label>
                     <input type="date" name="date_end" id="date_end" class="form-control" required onchange="date_awarded(this.value)">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="lgu_assigntory">LGU Signatory</label>
                     <input type="text" name="lgu_assigntory" id="lgu_assigntory" class="form-control" required>
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="venue">Training Venue</label>
                     <input type="text" name="venue" id="venue" class="form-control" required onkeyup=" venues(this.value)">
                  </div>
               </div>
            </div>
            <!-- end row -->
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="venue_award">Venue Awarded</label>
                     <input type="text" name="venue_award" id="venue_award" class="form-control" > 
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group">
                     <label for="date_award">Date Awarded</label>
                     <input type="date" name="date_award" id="date_award" class="form-control">
                  </div>
               </div>
            </div>
            <div>
               <?php while ($row = $topic_query1->fetch_assoc()): ?>
               <label class="checkbox-inline chck">
               <input type="checkbox" onchange="get_topics(this.value)" id="topic" name="modules[]" value="<?php echo $row['id']; ?> "> <?php echo $row['module_name']; ?>
               </label>
               <?php endwhile; ?>
               <p id=""></p>
            </div>
            <!-- topics -->
            <button type="button" data-toggle="modal" data-target="#all_topics" class="btn btn-info"><i class="fas fa-eye"></i> View All Topics</button>
            <div id="all_topics" class="modal fade">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header" ><button class="close" data-dismiss="modal">&times</button></div>
                     <div class="modal-body">
                        <h6></h6>
                        <p></p>
                        <div class="top_div2">
                        </div>
                        <br>
                     </div>
                  </div>
               </div>
            </div>
            <p></p>
            <div class="row">
               <div class="col-md-6">
                  <div class="float-left">
                     <input type="submit" name="submit" class="btn btn-info" value="Create Training">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="float-right">
                     <a href="home.php" class="btn btn-danger">Back</a>
                  </div>
               </div>
            </div>
         </form>
      </div>
      <script>
         function venues(venue_awarded){
           $("#venue_award").val(venue_awarded);
         }
         function date_awarded(date_awarded){
           $("#date_award").val(date_awarded);
         }
         
         function get_topics(clicked){
          var xhr = new XMLHttpRequest();
          xhr.open('GET', 'topics.php?topic='+clicked, true);
          xhr.onload = function(){
           console.log(this.responseText);
           $(".top_div2").append(this.responseText);
          }
          xhr.send();
         }
         
         
         
         $('form').each(function() {
                   $.validator.setDefaults({
                          ignore: []
                   });
                 $(this).validate({
                       rules: {
             date_start: {
                 required: true,
             },
             date_end:{
               required: true,
             },
             venue:{
               required: true,
             },
             module:{
               required: true,
             },
             facility_name:{
               required: true,
             },
             topic:{
               required: true,
             }
         
         },
         
         messages:{
           topic: "Choose a topic for the Training before proceding ",
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
   </body>
</html>
