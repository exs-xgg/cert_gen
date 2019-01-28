
<?php
   include 'db_con.php';
   
   $select_training = "SELECT * FROM training order by id DESC";
   $training_query = mysqli_query($con, $select_training);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="DataTables/datatables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/data.css">
   </head>
   <body>
      <div class="container">
         <h4 class="text-center"></h4>
         <div class="float-right">
            <a href="add_training.php" class="btn btn-success btn-sm" >Add Training</a>
         </div>
         <table id="training" class="display">
            <thead>
               <tr>
                  <th>Facility</th>
                  <th>Training Name</th>
                  <th>Module</th>
                  <th>Training Date</th>
                  <th>LGU Assignatory</th>
                  <th>Venue</th>
                  <th>Topics</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  while ($training_row = $training_query->fetch_assoc()): ?>
               <tr>
                  <td><?php echo $training_row['facility_id'] . ' ' . $training_row['fac_name']; ?></td>
                  <td><?php echo $training_row['train_name']; ?></td>
                  <td><?php echo $training_row['module_type']; ?></td>
                  <td><?php echo $training_row['date_started'] . ' to '. $training_row['date_ended'] ?></td>
                  <td><?php echo $training_row['lgu_assigntory']; ?></td>
                  <td><?php echo $training_row['venue']; ?></td>
                  <td>
                     <button onclick="get_train_topics(this.value)" value="<?php
                        echo $training_row['id']; ?>" type="button" name="view_topic" class="view_topic btn btn-info btn-sm" data-toggle="modal" data-target="#train_topic_modal" data-toggle="tooltip" data-placement="top" title="View Topics">
                        <i class="far fa-file"></i>
                  </td>
                  <td>
                  <a href="add_training_participants.php?add=<?php
                     echo $training_row['id']; ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Add Participants"><i class="fas fa-user-plus"></i></a>
                  <a href="all_participants_in_training.php?view=<?php
                     echo $training_row['id']; ?>" data-toggle="tooltip" data-placement="top" title="View All Participants that taken this Training" class="btn btn-sm btn-primary"><i class="far fa-eye"></i></a>
                  <a href="update_train.php?update=<?php
                     echo $training_row['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Update"><i class="fas fa-pen"></i></a></a>
                  <a href="crud_train_del.php?del=<?php
                     echo $training_row['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure you want to Delete this Record?')"><i class="far fa-trash-alt"></i></a>
                  
                  
                  </td>
               </tr>
               <?php
                  endwhile; ?>
            </tbody>
         </table>
         <div class="modal fade" id="train_topic_modal" role="dialog">
         <div class="modal-dialog modal-md">
         <div class="modal-content">  
         <div class="modal-body">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <p></p>
         <div class="jumbotron">
         <ul id="train_topic_area">
         <!-- ajax topics post here -->
         </ul>
         </div>
         </div> 
         </div>
         </div>
         </div>
      </div>
      <script>
         $('#training').DataTable();
         
         
               // get the id of the button clicked and will post in the award modal
         
         function get_id(clicked_id){
         
         
         
            $('#award_id').val(clicked_id);
         }
         
         function get_train_topics(train_id){
         
            
         
            var xhs = new XMLHttpRequest();
            xhs.open('GET', 'view_topic_training.php?train_topic='+train_id, true);
            xhs.onload = function(){
               console.log(this.responseText);
               $("#train_topic_area").empty();
                  $("#train_topic_area").append( this.responseText);
            }
            xhs.send();
         }
         
         $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip();
         });
         
      </script>
   </body>
</html>
