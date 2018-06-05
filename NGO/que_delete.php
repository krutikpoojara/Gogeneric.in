<?php
	session_start();
	if(isset($_SESSION['admin_name']))
	{
		include("connection.php");
		
		$id = $_GET['id'];
		
		$query="delete from query where q_id =".$id;
		$sql=mysql_query($query) or die("error in query");
		if($sql)
		{
			header("Location:query.php?var=delete");
		}
	}
	else
	{
		header("Location:index.php");
	}
?>