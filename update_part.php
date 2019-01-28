
<?php
include 'session_check.php';

include 'db_con.php';

$id_val = '';
$fname_val = '';
$mname_val = '';
$lname_val = '';
$designation_val = '';
$train_id_val = '';
$fac_id_val = '';
$cert_num_val = '';
$hrs_val = '';
$type_of_cert_val = '';
$topic_val = '';
$title_val = '';
$suffix_val = '';
$id = $_GET['update'];

$select_data = "SELECT * FROM trainee WHERE id='" . $id . "' ";
$select_query = mysqli_query($con, $select_data);
$row = $select_query->fetch_assoc();
$id_val = $row['id'];
$fname_val = $row['fname'];
$mname_val = $row['mname'];
$lname_val = $row['lname'];
$designation_val = $row['designation'];
$train_id_val = $row['train_id'];
$fac_id_val = $row['fac_id'];
$cert_num_val = $row['cert_no'];
$hrs_val = $row['hrs'];
$type_of_cert_val = $row['type_of_cert'];
$topics = $row['topic'];
$title_val = $row['title'];
$suffix_val = $row['suffix'];
$exploded_topic = explode("<br>", $topics);
$topic_value = implode("<br>", $exploded_topic);
$topic2 = $topic_value . "<br>";
$fac_name_val = $row['fac_name'];

function get_topic()
	{
	include 'db_con.php';

	$str = '';
	$id = $_GET['update'];
	$select_data = "SELECT * FROM trainee WHERE id='" . $id . "' ";
	$select_query = mysqli_query($con, $select_data);
	$row = $select_query->fetch_assoc();
	$train_id_val = $row['train_id'];

	// for topics get the last id that is inserted in training then it will be post in participants topics

	$topic1 = "SELECT * FROM training WHERE id = '" . $train_id_val . "' ";
	$topic_query1 = mysqli_query($con, $topic1) or die($con->error);
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

$select_designation = "SELECT * FROM designation";
$query_designation = mysqli_query($con, $select_designation);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style> 
	.wraps{
		padding: 3%;
		background-color: #f3f3f3;
		border-radius: 4px;
	}
	.col{
		height: 20%;
		width: 45%;
		margin: 5px
	}
	</style>
</head>
<body>
<div class="container">
	<?php
include 'nav.php';
 ?>
	<br />	
	<form method="post" action="upd_participants.php">
					<input type="text" name="update_id" id="upd_id" hidden value="<?php echo $id_val ?>">
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="title" id="title" class="form-control" value="<?php echo $title_val ?>">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="fname">First Name</label>
								<input type="text" name="fname" id="fname" class="form-control" value="<?php echo $fname_val ?>">
							</div>
						</div>

						<div class="col-md-2">
							<div class="form-group">
								<label for="mname">M.I</label>
								<input type="text" name="mname" id="mname" class="form-control" value="<?php echo $mname_val ?>">
							</div>
						</div>

						<div class="col-md-2">
							<div class="form-group">
								<label for="lname">Last Name</label>
								<input type="text" name="lname" id="lname" class="form-control" value="<?php echo $lname_val ?>">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="suffix">Sufffix</label>
								<input type="text" name="suffix" id="suffix" class="form-control" value=" <?php echo $suffix_val ?>">
							</div>
						</div>
					</div><!-- end row -->
					<div class="row">
						
						<div class="col-md-4">
						<div class="form-group">
						<label for="fac_name">Facility Name</label>
						<input type="text" name="fac_name" id="fac_name" class="form-control" value="<?php echo $fac_name_val ?>" onkeyup="get_id(this.value)" required>	
						</div>	
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="fac_id">Facility ID</label>
								<input type="text" name="fac_id" id="fac_id" class="form-control" value="<?php echo $fac_id_val ?>" onkeyup="get_name(this.value);" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="train_id">Training ID</label>
								<input type="text" name="train_id" id="train_id" class="form-control" value="<?php echo $train_id_val ?>">
							</div>
						</div>
						<div class="col-md-1">
							<div class="form-group">
								<label for="train_id">&nbsp;</label>
								<span class="form-control btn btn-primary" onclick="get_topic_value($('#train_id').val())">Go</span>
							</div>
						</div>
					</div><!-- end row -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="designation">Designation</label>
								<input type="text" name="designation" id="designation" class="form-control" value="<?php echo $designation_val ?>" list="designation_list">
								<datalist id="designation_list">
									<?php while ($designation_list = $query_designation->fetch_assoc()): ?>
										<option class="form-control" value="<?php echo $designation_list['role_name'] ?>"><?php echo $designation_list['role_name']; ?></option>
									<?php endwhile; ?>
								</datalist>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="hrs">Hours</label>
								<input type="text" name="hrs" id="hrs" class="form-control" value="<?php echo $hrs_val ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="cert_type">Type of Certificate</label>
								<input type="text" name="cert_type" id="cert_type" class="form-control" value="<?php echo $type_of_cert_val ?>">
							</div>
						</div>
					</div><!-- end row -->
					<div class="row">
						<div class="col wraps ">

							<h6 class="lead"><b>Available Topics</b></h6>
							<div class="topics">
								<?php echo get_topic(); ?>
							</div>
						</div>
						
						<div class="col wraps">
							<h6 class="lead"><b>Topics Attended</b></h6>
							<div class="topics_area"><?php echo $topic_value ?></div>
							
						</div>
					</div>
					<p></p>
					<div class="row">
						<div class="col-md-6">
							<div class="float-left">
								<input type="submit" name="upd_submit" class="btn btn-info" id="upd_btn" value="Update">
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

	// facility name

	 function get_id(name){
	 	var train_name = new XMLHttpRequest();
	 	train_name.open('GET', 'participants_ajax.php?name='+name, true);
	 	train_name.onload = function(){
	 		$('#fac_id').val(this.responseText);
	 	}
	 	train_name.send();
	 }

	 // facility id

	 function get_name(id){
	 	var train_id = new XMLHttpRequest();
	 	train_id.open('GET', 'participants_ajax.php?id='+id, true);
	 	train_id.onload = function(){
	 		console.log(this.responseText);
	 		$('#fac_name').val(this.responseText);
	 	}
	 	train_id.send();
	 }

	 // topics

	 function get_topic_value(topic){

    var train_topics = new XMLHttpRequest();
	 	train_topics.open('GET', 'participants_ajax.php?topic='+topic, true);
	 	train_topics.onload = function(){
	 		$('.hide').hide();
	 		$('.show').toggle();
	 		$('.topics').empty();
	 		$('.topics').append(this.responseText);

	 		// console.log(this.responseText);

	 	}
	 	train_topics.send();



	 	
	 }

</script>

</body>
</html>