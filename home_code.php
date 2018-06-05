<?php
require("web-keeper/core/config.php");
require("web-keeper/core/guard.php");
guard($ddos_guard, $bot_guard, $default['email'], $notif);
?>
<?php
	session_start();
	include("connection.php");
	if(isset($_SESSION['user_name']))
	{
		$user_id=$_SESSION['user_id'];

		$image_name=$_FILES['file']['name'];
		$image_type=$_FILES['file']['type'];
		$image_tmp_name=$_FILES['file']['tmp_name'];

 		$desc = $_REQUEST['desc'];
		
		if (($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/png" || $_FILES["file"]["type"] == "image/gif" )&& ($_FILES["file"]["size"] < 2000000))
			{
				if(move_uploaded_file($image_tmp_name,"images/tablate/".$image_name))
					{
						$query="select * from tbl_user where user_id=".$_SESSION['user_id'];
						$sql=mysql_query($query) or die("error in select user");
						$row=mysql_fetch_array($sql);
						$user_name=$row['user_name'];
						$email=$row['email'];
						
						$q="insert into tbl_prescription (user_name,user_mail,detail,img_name) values('".$user_name."','".$email."','".$desc."','".$image_name."')";
						//echo $q;
						$sql1=mysql_query($q) or die("ERROR IN Q");
						if($sql1)
						{
							mysql_close();
							header("location:index.php?msg=done");
						}
						else
						{
							mysql_close();
							header("location:index.php?msg=error");
						}	
					}
					else
					{
						echo"image did not uploaded";
					}
			
			}
			else
			{
		  		mysql_close();
				header("location:index.php?msg=error1");
			}
	}
	else
	{
		header("location:index.php");
	}
?>