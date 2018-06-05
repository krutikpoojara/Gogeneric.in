<?php
require("web-keeper/core/config.php");
require("web-keeper/core/guard.php");
guard($ddos_guard, $bot_guard, $default['email'], $notif);
?>
<?php
	include("connection.php");
	session_start();

 	$name = $_REQUEST['user_name'];
 	$password = $_REQUEST['user_pass'];

	$query = "select * from tbl_user where email='".$name."' and password='".$password."' ";
	$sql = mysql_query($query) or die("Error In Query");;
	$row = mysql_fetch_array($sql);

	if(isset($row['email']))
	{
		$_SESSION['user_name'] = $row['email'];
		$_SESSION['user_id'] = $row['user_id'];
		header("Location:index.php");
	}	
	else
	{
		header("location:login.php");
	}
?>