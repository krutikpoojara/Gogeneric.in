<?php
    include("connection.php");
  	$plname=$_GET['plname'];
    $file_path = "../images/tablate/";
     
    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
		
		if($result)
        	echo "success";
    } else{
        echo "fail";
    }
	
 ?>