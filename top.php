<?php 
	if(!isset($_SESSION['user_name']))
	{
	?>
    <div align="right" style="margin-top:5px; margin-right:10px"><span><a href="index.php"> Home</a> </span> | <span><a href="new_user.php"> New User</a> </span> | <span><a href="login.php"> Sign In</a></span></div>
    <?php
	}
	else
	{
	?>
    	<div align="right" style="margin-top:5px; margin-right:10px"><span><a href="index.php"> Home</a> </span> | <span><a href="home.php"> Upload Photo</a> </span> | <span><a href="logout.php"> Logout</a></span></div>
    <?php
	}
	?>
	