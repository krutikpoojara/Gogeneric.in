<?php
require("web-keeper/core/config.php");
require("web-keeper/core/guard.php");
guard($ddos_guard, $bot_guard, $default['email'], $notif);
?>
<?php
		include("connection.php");
		
			/*$image_name=$_FILES['file']['name'];
			$image_type=$_FILES['file']['type'];
			$image_tmp_name=$_FILES['file']['tmp_name'];*/
			
			$name=$_POST['name'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$mobile=$_POST['mobile'];
			$add=$_POST['add'];
			$city=$_POST['city'];
			$dist=$_POST['dist'];
			
			/*if (($_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/png" || $_FILES["file"]["type"] == "image/gif" )&& ($_FILES["file"]["size"] < 200000))
			{
		  		if ($_FILES["file"]["error"] > 0)
		    		{
		    			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
		    		}
		  		else
		    		{
					if(move_uploaded_file($image_tmp_name,"../img/professors/".$image_name))
					{*/
					
				$q="insert into tbl_user (user_name,email,password,mobile,address,city,district) values('".$name."','".$email."','".$pass."','".$mobile."','".$add."','".$city."','".$dist."')";
						//echo $q;
						$sql1=mysql_query($q) or die("ERROR IN Q");
						if($sql1)
						{
							mysql_close();
							header("location:login.php?msg=done");
						}
						else
						{
							mysql_close();
							header("location:new_user.php?msg=error");
						}
					/*}
					else
					{
						echo"image did not uploaded";
					}
				}
			}
			else
			{
		  		mysql_close();
				header("location:add_professor.php?msg=error1");
			}*/
	
?>