<?php include 'session_check.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="js/jquery-3.3.1.min.js"></script>
    
</head>
<body>
	<div class="container">
		<?php include 'nav.php'; ?>
		<div class="form-group">
			<p></p>
			<div class="row">
				<div class="col-md-11">
					<input type="text" name="search_tb" id="search_tb_id" class="form-control" placeholder="Search Facility Name">
				</div>
				<div class="col-md-1">
					<button class="btn btn-info" name="search_btn" onclick="search_fac($('#search_tb_id').val())"><i class="fas fa-search"></i> Search</button>
				</div>
			</div>
			<!-- end row -->
			<div >
				<p id="facility_table"></p>
			</div>
		</div>
	</div>
	<script>
		function search_fac(facility_val){
			var search_fac = new XMLHttpRequest();
			search_fac.open('GET', 'update_facility_process.php?facility='+facility_val, true);
			search_fac.onload = function(){
				console.log(this.responseText);
				$('#facility_table').empty();
				$('#facility_table').append(this.responseText);
			}
			search_fac.send();
		}

	</script>
</body>
</html>
