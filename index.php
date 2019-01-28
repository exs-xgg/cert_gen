

<html>
<head></head>
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
	.container{
		width: 45%;
		margin-top: 70px;
	}
	.jumbotron{
		background-color: #17a2b8;
	}
	#img{
		float:center;
	}
</style>
<body>
	<div class="container">
		<div class="jumbotron">
			<div class="card ">
				    <?php

if (isset($_SESSION['msg']) && $_SESSION['msg'] !== null): ?>
				      <div class="alert alert-<?php echo $_SESSION['msg_type'] ?>">
					  <?php
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
?>
  </div>
<?php
endif ?>
			<div class="card-header "><img src="icon/wah_icon.png" alt="Wah Logo" width="45px" id="img" class="responsive "></div>
			
				<div class="card-body">
					<form action="login_process.php" method="POST" autocomplete="off">
						<div class="form-group">
							<label for="user">Username</label>
							<input type="text" name="uname" class="form-control validate" id="user" required >
							
						</div>
						<div class="form-group">
							<label for="pass">Password</label>
							<input type="password" name="pwd" class="form-control validate" id="pass" required>
						</div>
						
						<input type="submit" name="submit" class="btn btn-info" value="Login">
						

					</form>
				</div>
			</div>
		</div>
	</div> 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>