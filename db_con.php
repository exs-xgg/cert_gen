
<?php
$con = new mysqli('localhost', 'root', 'root', 'cert_gen');

if ($con->connect_error)
	{
	die("con error" . $con->connect->error);
	}

?>