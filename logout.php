
<?php
session_start();
session_destroy();
$_SESSION['msg'] = "You just Log out Login Again";
$_SESSION['msg_type'] = "warning";
header('location:index.php');
exit();
?>
