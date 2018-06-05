<?php
	session_start();
	if(isset($_SESSION['admin_name']))
	{
		include("../connection.php");
		
		ob_start();
		
		$id=$_POST['id'];
		$query="select * from query where q_id=".$id;
		$sql=mysql_query($query) or die("error in query");
		$row=mysql_fetch_array($sql);
		
		$url = 'http://sendgrid.com/'; 
		$user = 'inforaam'; 
		$pass = 'inforaam0214';
		$from="we@inforaam.com"; 
		$testingBody = 'invitaion'; 
		$category = 'invitation'; 
		
		$sub = $_REQUEST['sub'];
		$body = $_REQUEST['body'];
		
			$json_string = array( 
			'to' => $row['email'], 
			'category' => $category  
			); 
		
			$params = array( 
			'api_user' => $user, 
			'api_key' => $pass, 
			'x-smtpapi' => json_encode($json_string), 
			'to' => $row['email'], 
			'subject' => $sub, 
			'html' => $body,  
			'text' =>  $testingBody, 
			'from' => $from, 
			); 
		
			$request = $url.'api/mail.send.json'; 
			// Generate curl request 
			$session = curl_init($request); 
			// Tell curl to use HTTP POST 
			curl_setopt ($session, CURLOPT_POST, true); 
			// Tell curl that this is the body of the POST 
			curl_setopt ($session, CURLOPT_POSTFIELDS, $params); 
			
			// Tell curl not to return headers, but do return the response 
			curl_setopt($session, CURLOPT_HEADER, false); 
			curl_setopt($session, CURLOPT_RETURNTRANSFER, true); 
			
			// obtain response 
			$response = curl_exec($session); 
			curl_close($session); 
			//echo $response ;
			// print everything out 
			$res = json_decode($response); 
			$response= $res->{'message'}; 
	
			header("Location:admin_home.php?var=done");
			//echo "successfuly send ";
	}
	else
	{
		header("Location:index.php");
	}
?>