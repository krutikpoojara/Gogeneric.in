<?php
	include("connection.php");
	session_start();

 	$name = $_REQUEST['u_name'];
 	$password = md5($_REQUEST['password']);

	$query = "select * from ngo where username='".$name."' and password='".$password."' ";
	$sql = mysql_query($query) or die("Error In Query");
	$row = mysql_fetch_array($sql);
	
	$count=mysql_num_rows($sql);
	echo $sql;
	if($count==1)
	{
		if($row['password']==$password)
		{
			$_SESSION['admin_name'] = $row['username'];
			header("Location:admin_home.php");
		}
		else
			header("location:index.php?error=status");	
	}
	else
	{
		header("location:index.php?error=count");
	}
?>