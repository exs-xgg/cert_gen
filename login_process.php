
<?php
session_start();
$local = "localhost";
$user = "root";
$pass = "";
$db = "cert_gen";
$conn = new mysqli($local, $user, $pass, $db);

if ($conn->connect_error)
	{
	die("con error" . $conn->connect->error);
	}
  else
	{
	$user = $_POST['uname'];
	$pass = $_POST['pwd'];
	$user = trim($user);
	$user = strip_tags($user);
	$user = htmlspecialchars($user);
	$pass = trim($pass);
	$pass = strip_tags($pass);
	$pass = htmlspecialchars($pass);
	$passs = md5($pass);
	$sql = "SELECT * FROM users WHERE username = '" . $user . "' && password = '" . $passs . "' limit 1 ";
	$res = $conn->query($sql);
	while ($row = $res->fetch_assoc())
		{
		$session_id = $row['id'];
		$act = $row['is_active'];
		$ad = $row['is_admin'];
		}

	if ($res->num_rows == 1)
		{
		if ($act === 'y')
			{
			if ($ad === 'y')
				{
				$_SESSION['id'] = $session_id;
				$_SESSION['is_admin'] = $act;
				$_SESSION['is_active'] = $ad;
				$session_id = TRUE;
				$act = TRUE;
				$ad = TRUE;
				$session_id = TRUE;
				header("location: home.php");
				}
			  else
				{
				$_SESSION['id'] = $session_id;
				$session_id = TRUE;
				header("location: user_dashboard.php");
				}
			}
		  else
			{
			$_SESSION['msg'] = "Im Sorry the account is currently deactivated";
			$_SESSION['msg_type'] = "warning";
			header("location: index.php");
			}
		}
	  else
		{
		$_SESSION['msg'] = "Try Again";
		$_SESSION['msg_type'] = "danger";
		header("location: index.php");
		}
	}

?>