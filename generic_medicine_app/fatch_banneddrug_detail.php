<?php

include("connection.php");

$mid=$_GET['bdid'];

$sql="select *from banned_drug where drug_id=$mid";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['banned_drug'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>