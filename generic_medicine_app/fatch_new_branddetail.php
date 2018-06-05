<?php

include("connection.php");

$nbid=$_GET['nbid'];

$sql="select *from new_brand where id=$nbid";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['new_brand'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>