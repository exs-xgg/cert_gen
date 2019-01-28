<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
     <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/popper.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<style>
  		.wrap{
  			background-color: #87c1ff;
  			height: 80px;
        width: 100%;
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
  			
  		
  		.p{
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
<div class="wrap">
	<div class="row">
		<div class="col-md-2">
			<a href="home.php"><img src="icon/wah_icon.png" class="img-fluid " width="80"></a>
				
		</div>
		<!-- <div class="col-md-3"></div> -->
		<div class="col-md-8"><div class="align-center"><p class="p">Wireless Access for Health Initiative</p></div></div>
		<!-- <div class="col-md-3"></div> -->
		
		<div class="col-md-2">
      <div class="float-right">
        <a href="logout.php" class="navi"><label class="label"><i class="fas fa-sign-out-alt"></i> Logout</label></a>
      </div>
		
		</div>
	</div>
	

</div>
</body>
</html>
