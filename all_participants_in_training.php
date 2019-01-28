<?php
   $id = $_GET['view'];
   include 'db_con.php';
   
   $select = "SELECT * FROM trainee WHERE train_id = $id ORDER BY id DESC";
   $query = mysqli_query($con, $select);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Participants</title>
      <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <script src="js/jquery-3.3.1.min.js"></script>
      <!-- <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script> -->
      <script src="DataTables/datatables.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/data.css">
      <style>
         #upd_btn{
         float: right;
         }
         .wrap{
         background-color: #87c1ff;
         height: 80px;
         margin-bottom: 5px;
         }
         .navi{
         color:white;
         font-size: 15px;
         }
         .label:hover{
         cursor: pointer;
         text-decoration: none;
         color: white;
         }
         p{
         color: white;
         font-size: 30px;
         font-style: roboto;
         text-align:center;
         padding-top: 10px
         }
         .label{
         padding: 25px 15px;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="wrap">
            <div class="row">
               <div class="col-md-2">
                  <a href="home.php"><img src="icon/wah_icon.png" class="img-fluid " width="80"></a>
               </div>
               <!-- <div class="col-md-3"></div> -->
               <div class="col-md-8">
                  <div class="align-center">
                     <p>Wireless Access for Health Initiative</p>
                  </div>
               </div>
               <!-- <div class="col-md-3"></div> -->
               <div class="col-md-2">
                  <div class="float-right">
                     <a href="logout.php" class="navi"><label class="label"><i class="fas fa-sign-out-alt"></i> Logout</label></a>
                  </div>
               </div>
            </div>
         </div>
         <table id="participants_table" class="display" width="100%" cellspacing="">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Facility</th>
                  <th>Certificate #</th>
                  <th>Hours</th>
                  <th>Topic</th>
                  <th>action</th>
               </tr>
            </thead>
            <tbody>
               <?php
                  while ($row = $query->fetch_assoc()): ?>
               <tr>
                  <td><?php
                     echo $row['fname'] . ' ' . $row['mname'] . ' ' . $row['lname']; ?></td>
                  <td><?php
                     echo $row['fac_name']; ?></td>
                  <td><?php
                     echo $row['cert_no']; ?></td>
                  <td><?php
                     echo $row['hrs']; ?></td>
                  <td>
                     <!-- show topics -->
                     <button onclick="call(<?php
                        echo $row['id']; ?>)" type="button" name="view_topic" class="view_topic btn btn-info btn-sm" data-toggle="modal" data-target="#topic_modal_part"><i class="far fa-file" ></i></button>
                  </td>
                  <td>
                     <a href="update_part.php?update=<?php
                        echo $row['id']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Update"><i class="fas fa-pen"></i></a>
                     <!-- delete button-->
                     <a href="crud_process.php?del=<?php
                        echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure you want to Delete this Record?')"><i class="far fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
                     <!-- award button -->
                    <a href="cert_output.php?award=<?php echo $row['id'] ?>"name="btn_award_modal" class="btn btn-success btn-sm " type="button" data-toggle="tooltip" data-placement="top" title="Award"><i class="fas fa-scroll"></i></a> 
                  </td>
               </tr>
               <?php
                  endwhile; ?>	
            </tbody>
         </table>
         <!-- modal topics -->
         <div class="modal fade" id="topic_modal_part" role="dialog">
            <div class="modal-dialog modal-md">
               <div class="modal-content">
                  <div class="modal-body">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <p></p>
                     <div class="jumbotron">
                        <ul id="part_topic_area">
                           <!-- ajax topics post here -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--end topic modal  -->
         <p></p>
         <div class="float-right">
            <a href="home.php" class="btn btn-danger btn-sm">back</a>
         </div>
      </div>
      <script>
         $('#participants_table').DataTable();//initialize data table
         
         
         // get the topic in db using ajax
         
         function call(e){
         	$.ajax({
         		url:"view_topic_part.php",
         		method:"post",
         		data:{id:e},
         		dataType:"json",
         		cache:false,
         		success:function(data){
         			$('#part_topic_area').empty();
         			$.each(data,function(id,value){
         				$('#part_topic_area').append("<li>" + value + "</li>");
         			});
         		}
         	});
         }
         
         
         // get the id of the button clicked and will post in the textbox with id of award_id in award modal and in the textbox with id of upd_id in update modal
         
         function get_id(clicked_id){
         	$('#award_id').val(clicked_id);
         	$('#upd_id').val(clicked_id);
         
         	var venue_award = new XMLHttpRequest();
         	venue_award.open('GET', 'crud_process.php?venue='+clicked_id, true);
         	venue_award.onload = function(){
         		console.log(this.responseText);
         		$('#venue_award').val(this.responseText);
         	}
         	venue_award.send();
         }
         
      </script>
   </body>
</html>
