
<?php
include 'session_checku.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style >
		#log:hover {
    color: #000;
    text-decoration: none;
}

	</style>
</head>
<body>
<div class="container">


  <nav class="navbar navbar-light bg-primary justify-content-between">
  <img src="icon/wah_icon.png" width="40px" class="navbar-brand float-left" >
    <a href="logout.php" class="text-white" id="log">Logout</a>
  </form>
</nav>
	<div class="jumbotron">
		<?php
include 'add_participants.php' ?>
	</div>
  </div>
</body>
</html>