<?php 
include 'db_con.php';
if (isset($_GET['add'])) {
	 $id = $_GET['add'];
	 
	 $select_part = "SELECT * FROM trainee WHERE train_id = $id ORDER BY id DESC ";
	 $part_query = mysqli_query($con, $select_part);

	 $select_topics = "SELECT * FROM training WHERE id = $id";
	 $select_query = mysqli_query($con, $select_topics);
	 while ($train_row = $select_query->fetch_assoc()) {
	 	$fac_id = $train_row['facility_id'];
		$train_id = $train_row['id'];
	 		
	 }
function get_topic(){
	include 'db_con.php';
	$id = $_GET['add'];
	$str = '';
	 $select_topics = "SELECT * FROM training WHERE id = $id";
	 $select_query = mysqli_query($con, $select_topics);


	while ($topic_row = $select_query->fetch_assoc()) {
	$topic_query_explode = explode('<br>', $topic_row['topic_name']);
	}

	while (list($top, $top_val)=each($topic_query_explode)) {
		$str.='<input type="checkbox" value="'.$top_val.'" name="part_topic[]" id="topic" checked="yes">'.' ' .$top_val. '<br>';
	}
	return $str;		
}

	$select_name = "SELECT fname FROM trainee";
	$name_query = mysqli_query($con, $select_name);
	#for suggestion in fname
	$select_lname = "SELECT lname FROM trainee ";
	$lname_query = mysqli_query($con, $select_lname);
	#for suggestion in mname
	$select_mname = "SELECT mname FROM trainee ";
	$mname_query = mysqli_query($con, $select_mname);
	#for designation data list
	$designation_list = "SELECT * FROM designation";
	$designation_query = mysqli_query($con ,$designation_list);
 		
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/data.css">

     	<script src="js/jquery-3.3.1.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
  		<style>
		.wraps{
			background-color: #f3f3f3;
			padding:10px;
			border-radius: 4px;
		}  			
  		</style>
</head>
<body>

<div class="container">
	<?php include 'nav.php'; ?>
	<form method="POST" action="add_participants_process.php" autocomplete="off">
			<div class="form-group">
				<input type="text" name="train_id" class="form-control" value="<?php echo $train_id; ?>"  hidden>
				<input type="text" name="fac_id" class="form-control" value="<?php echo $fac_id; ?>"  hidden>

			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" id="title" class="form-control">
					</div>
				</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="fname">First Name</label>
					<input type="text" name="fname" id="fname" class="form-control" list="fname_list" required>
					<datalist id="fname_list">
						<?php while ($fname_row = $name_query->fetch_assoc()): ?>
						<option value="<?php echo $fname_row['fname']; ?>"><?php echo $fname_row['fname']; ?></option>
						<?php endwhile; ?>
					</datalist>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="mname">Middle Initial</label>
					<input type="text" name="mname" id="mname" class="form-control" list="mname_list" maxlength="1" >
					<datalist id="mname_list" >
						<?php while ($mname_row = $mname_query->fetch_assoc()): ?>
						<option value="<?php echo $mname_row['mname']; ?>"><?php echo $mname_row['mname']; ?></option>
						<?php endwhile; ?>
					</datalist>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input type="text" name="lname" id="lname" class="form-control" list="lname_list" required>
					<datalist id="lname_list">
						<?php while ($lname_row = $lname_query->fetch_assoc()): ?>
						<option value="<?php echo $lname_row['lname']; ?>"><?php echo $fname_row['lname']; ?></option>
						<?php endwhile; ?>
					</datalist>
				</div>
			</div>
			<div class="col-md-2">
				<div class="form-group">
					<label for="suffix">Suffix</label>
					<input type="text" name="suffix" id="suffix" class="form-control">
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
						<?php while($desig_row = $designation_query->fetch_assoc()): ?>
						<option value="<?php echo $desig_row['role_name']; ?>"><?php echo $desig_row['role_name']; ?></option>
						<?php endwhile; ?>
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
					<input type="number" name="hrs" id="hrs" class="form-control" required>
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
			
			<button type="button" data-toggle="modal" data-target="#topic_collapse" class="btn btn-info"><i class="fas fa-eye"></i> See Available Topics</button>
			<p></p>
			<div class="modal fade" role="dialog" id="topic_collapse">
				<div class="modal-dialog">
					
						<div class="modal-content">
							<div class="modal-header"><button class="close" data-dismiss="modal">&times</button></div>
							<div class="modal-body">
								<div class="wraps">
									<?php echo get_topic(); ?>
								</div>
							</div>
						</div>
				</div>
			</div>
			<!-- end collpase -->

					
		</div>

	<div class="row">
		<div class="col-md-6">
			<div class="float-left">
				<input type="submit" name="submit" class="btn btn-info" value="Add Participants" id="submit" onclick="call(function(e)) return false;">
			</div>
		</div>
		<div class="col-md-6">
			<div class="float-right">
				<a href="home.php" class="btn btn-danger">Back</a>
			</div>
		</div>
	</div>
	



	</form>
<table id="participants" class="table-stripped display">
	<thead>
	<tr>
		<th>Name</th>
		<th>Certificate Type</th>
		<th>Certificate Number</th>
		<th>Award</th>
	</tr>
	</thead>
	<tbody>
		<?php while ($part_row = $part_query->fetch_assoc()): ?>
		<tr>
			<td><?php echo $part_row['title']. ' '. $part_row['fname'] . ' ' . $part_row['mname'] . ' ' . $part_row['lname'].' '. $part_row['suffix']; ?></td>
			<td><?php echo $part_row['type_of_cert']; ?></td>
			<td><?php echo $part_row['cert_no']; ?></td>
			<td><a href="cert_output.php?award=<?php echo $part_row['id'] ?>"name="btn_award_modal" class="btn btn-success btn-sm " type="button" data-toggle="tooltip" data-placement="top" title="Award"><i class="fas fa-scroll"></i></a></td>
		</tr>	
		<?php endwhile; ?>
		
	</tbody>
</table>

	</div><!-- end container -->



	<script src="js/jquery.validate.min.js"></script>
    <script src="DataTables/datatables.min.js"></script>      
	<script>
		$('#participants').DataTable();

		function get_id(clicked_id){
			// alert(clicked_id);
			$('#award_id').val(clicked_id);
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

</script>
</body>
</html>