<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<form>
	<div class="container">
		<div class="form-group">
		<input type="text" name="fname" id="fn" onkeyup="tt()" class="form-control">
	</div>
	<div class="form-group">
	<input type="text" name="lname" id="ln" style="display: none;" onkeyup="dd()" class="form-control">	
	</div>
	
	<div class="form-group">
	<input type="text" name="mname" id="mn" style="display: none;" class="form-control">
	</div>
	</div>
	
	</form>
<script>

		function tt() {
			document.getElementById('ln').style.display="block";
		}
		function dd() {
			document.getElementById('mn').style.display="block";
		}
			
		

</script>
</body>
</html>