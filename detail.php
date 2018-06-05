<?php
require("web-keeper/core/config.php");
require("web-keeper/core/guard.php");
guard($ddos_guard, $bot_guard, $default['email'], $notif);
?>
<html>
<body>
<?php
	$q=$_GET['q'];

	include("connection.php");
	
	/*if($q!="")
	{
    	$query="select * from tbl_medicine where med_name LIKE '$q'";
		//echo $query;
		$sql=mysql_query($query) or die("error in query");
		*/
		$query1="select * from tbl_generic where med_id =".$q;	
		//echo $query1;		
		$sql1=mysql_query($query1) or die("Error in Query1");
		while($rec1=mysql_fetch_array($sql1))
		{
?>
        	<table class="t" style="margin-left:10px !important; line-height:normal !important; margin-bottom:10px !important;color:#000;" width="98%">	
                                    	
            	<tr style="font-size:20px !important; color:#00F !important">
                	<td><?php echo $rec1['gen_name']; ?></td>
                </tr>
                <tr style="font-size:12px !important;">
                	<td> Company:- <?php echo $rec1['company']; ?></td>
                </tr>
                <tr style="font-size:12px !important;">
                	<td>Cost:- <?php echo $rec1['cost']; ?></td>
  	            </tr>
                <tr style="font-size:12px !important;">
                	<td><?php echo $rec1['description']; ?></td>
                </tr>
           	</table>
<?php
		}
	//}
?>
</body>
</html>