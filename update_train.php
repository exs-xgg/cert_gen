
<?php
include 'db_con.php';

include 'session_check.php';

$id = $_GET['update'];
$module_type = '';
$venue = '';
$date_start = '';
$date_end = '';
$topic = '';
$fac_id = '';
$lgu_assigntory = '';
$select_training = "SELECT * FROM training WHERE id = '" . $id . "' ";
$select_query = mysqli_query($con, $select_training);
$fetch_data = $select_query->fetch_assoc();
$id_val = $fetch_data['id'];
$module_type = $fetch_data['module_type'];
$venue = $fetch_data['venue'];
$date_start = $fetch_data['date_started'];
$date_end = $fetch_data['date_ended'];
$topic = $fetch_data['topic_name'];
$fac_id = $fetch_data['facility_id'];
$venue_award = $fetch_data['venue_awarded'];
$date_award = $fetch_data['date_awarded'];
$lgu_assigntory = $fetch_data['lgu_assigntory'];
$module = explode(',', $module_type); 
$fac_name = $fetch_data['fac_name'];
$train_name = $fetch_data['train_name'];

$topic1 = "SELECT * FROM module";
$topic_query1 = mysqli_query($con, $topic1);

$facility_name = "SELECT * FROM facility";
$fac_query = mysqli_query($con, $facility_name);
?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <style>

      </style>
   </head>
   <body>
      <div class="container">
         <?php include 'nav.php'; ?>
         <br>
         <form method="post" action="upd_training.php">
            <input type="text" name="training_id" value="<?php echo $id_val; ?>" hidden >
            <div class="row">
               <div class="col-md-2">
                  <div class="form-group">
                     <label for="fac_id">Facility ID</label>
                     <input type="text" name="fac_id" id="fac_id" class="form-control" value="<?php echo $fac_id; ?>" onkeypress="select_id(this.value)" required>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="fac_name">Facility Name</label>
                     <input type="text" name="fac_name" id="fac_name" class="form-control" value="<?php echo $fac_name; ?>"  onkeypress="select_fac_name(this.value)" list="faci_name" required>
                     <datalist id="faci_name">
                      <?php while ($facility_list = $fac_query->fetch_assoc()): ?>
                       <option value="<?php echo $facility_list['hfhudname']; ?>" class="form-control"><?php echo $facility_list['hfhudname'] ?></option>
                     <?php endwhile; ?>
                     </datalist>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="form-group">
                     <label for="train_name">Training Name</label>
                     <input type="text" name="train_name" id="train_name" class="form-control" value="<?php echo $train_name; ?>">
                  </div>
               </div>
               
            </div>
            <!-- end row -->
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                     <label for="date_start">Date Started</label>
                     <input type="date" name="date_start" id="date_start" class="form-control" value="<?php echo $date_start; ?>">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="date_end">Date End</label>
                     <input type="date" name="date_end" id="date_end" class="form-control" value="<?php echo $date_end; ?>">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label for="lgu_assigntory" >LGU Assignatory</label>
                     <input type="text" name="lgu_assigntory" id="lgu_assigntory" class="form-control" value="<?php echo $lgu_assigntory; ?>">
                  </div> 
               </div>
            </div>
            <div class="form-group">
               <label for="venue">Venue</label>
               <textarea name="venue" id="venue" class="form-control" ><?php echo $venue; ?></textarea>
            </div>
                    <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="venue_award">Venue Awarded</label>
              <input type="text" name="venue_award" id="venue_award" class="form-control" value="<?php echo $venue_award; ?>"> 
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="date_award">Date Awarded</label>
              <input type="date" name="date_award" id="date_award" class="form-control" value="<?php echo $date_award; ?>">
            </div>
          </div>
        </div>
            <div>
       <?php while ($row = $topic_query1->fetch_assoc()): ?>
        <label class="checkbox-inline chck"><input type="checkbox" onchange="get_topics(this.value)" id="topic" name="modules[]" value="<?php echo $row['id']; ?> "> <?php echo $row['module_name']; ?></label>
       <?php endwhile; ?>
         
       </div>
       <button type="button" data-toggle="modal" data-target="#all_topics" class="btn btn-info"><i class="fas fa-eye"></i> View All Topics</button>
          <p></p>
          <div id="all_topics" class="modal fade">
              
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header" ><button class="close" data-dismiss="modal">&times</button></div>
                  <div class="modal-body">
                    <h6></h6>
                    <p></p>
                    <div class="top_div2">
                      
                    </div>
                     
                     <br />
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="float-left">
                  <input type="submit" name="submit_upd" class="btn btn-info" value="Update">
                </div>
              </div>
              <div class="col-md-6">
                <div class="float-right">
                  <a href="home.php" class="btn btn-danger">Cancel</a>
                </div>
              </div>
            </div>
                   
         </form>
      </div>
      <!-- end container -->
      <script>

        // search facility name

        function select_id(id){
          var facility_id = new XMLHttpRequest(); 
          facility_id.open('GET', 'topics.php?id='+id, true);
          facility_id.onload = function(){
          console.log(this.responseText);
          $("#fac_name").val (this.responseText);
        }
        facility_id.send();
      }

      // search facility id

      function select_fac_name(name){
      var fac_name = new XMLHttpRequest();
      fac_name.open('GET', 'topics.php?name='+name, true);
      fac_name.onload = function(){
        console.log(this.responseText);
          $('#fac_id').val(this.responseText);
        }
        fac_name.send();
      }

        // topics
    function get_topics(clicked){ 
     var topics = document.getElementById('topic').value;
     var xhr = new XMLHttpRequest();
     xhr.open('GET', 'topics.php?topic='+clicked, true);
     xhr.onload = function(){
      console.log(this.responseText);
      $(".top_div2").append(this.responseText);
     }
     xhr.send();
    }
      </script>
   </body>
</html>
