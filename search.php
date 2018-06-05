<?php
require("web-keeper/core/config.php");
require("web-keeper/core/guard.php");
guard($ddos_guard, $bot_guard, $default['email'], $notif);
?>
<?php
	session_start();
	include("connection.php");
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>GoGeneric | Search</title>
    
	<?php include("head.php"); ?>
    <script>
		function showHint(str)
		{
			if (str.length==0)
			  { 
			  document.getElementById("detail").innerHTML="";
			  return;
			  }
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari(for all new browsers)
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5(for microsofts)
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {//response andd without error
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
				document.getElementById("detail").innerHTML=xmlhttp.responseText;
				}
			  }
			xmlhttp.open("GET","detail.php?q="+str,true);
			xmlhttp.send();
		}
	</script>
</head>
<body>
	<div class="wrap">

		<!-- Main -->
		<div id="main">

			<div class="search">
			<div id="newsletter" class="form-wrap" style="margin-top:20px !important; margin-left:100px !important; margin-bottom:20px !important">
				<form action="search.php" method="get" id="newsletter-form">
					<p class="form-field">
						<label for="newsletter_email" class="screen-reader-text">Please enter your email</label>
						<input  id="newsletter_email" type="text" name="search" placeholder="Search Generic Medicine Name" />
					</p>
					<p class="form-submit">
                    	<input type="submit"  id="newsletter_submit" name="Search" value="Search"/>
					</p>
				</form>
			</div>
            </div>
            <div style="margin-top:20px !important; margin-left:50px !important; margin-bottom:150px !important">
            <div class="span35" style="border-right:thin inset;">
			<?php 
				$s=$_REQUEST['search'];
				
				if($s!="")
				{
            	$query="select * from tbl_medicine where med_name LIKE'$s%'";
				$sql=mysql_query($query) or die("error in query");
				while($rec=mysql_fetch_array($sql))
				{
            ?>
            		<a onClick="showHint(<?php echo $rec['med_id']; ?>);">
            		<table class="t" style="margin-left:10px !important; margin-bottom:10px !important;color:#000;" width="98%">
						<tr>
                        	<td width="90%">
                            	<table style="line-height:normal !important;">
                                	<tr style="font-size:20px !important; color:#00F !important">
                                    	<td ><?php echo $rec['med_name']; ?></td>
                                    </tr>
                                    <tr style="font-size:12px !important;">
                                    	<td> Company:- <?php echo $rec['company']; ?></td>
                                    </tr>
                                    <tr style="font-size:12px !important;">
                                    	<td>Cost:- <?php echo $rec['cost']; ?></td>
                                    </tr>
                                    <tr style="font-size:12px !important;">
                                    	<td><?php echo $rec['description']; ?></td>
                                    </tr>
                              	</table>
                            </td>
                            <td width="10%">
                              	<table>
                                	<tr>
                                        <td><img src="images/arrow.png"></td>
                                    </tr>
                                        <!--<tr>
                                        	<td>7</td>
                                        </tr>-->
                                </table>
                            </td>
                   		</tr>        
                   	</table>
                    </a>
              	<?php
					}
				}
				else
				{
				?>
                	
					<table style="margin-left:10px !important; margin-bottom:10px !important;color:#000" width="100%">
							<tr style="font-size:30px !important; color:#00F !important">
								<td>No Result Found...</td>
                           	</tr>
                     </table>
				<?php
                }
				?>
                </div>
                <div class="span65" id="detail">
                </div>
			</div>
		</div>
	</div>
	<!-- Loading... -->
	<!--<div id="preload">
		<div id="preload-content">
			<div class="preload-spinner">
				<span class="bounce1"></span>
				<span class="bounce2"></span>
				<span class="bounce3"></span>
			</div>
			<div class="preload-text">Loading...</div>
		</div>
	</div>-->

	<!-- Included JS Files -->
	<!--<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>-->
	<script type="text/javascript" src="js/demo-settings2.js"></script>
</body>
</html>