<?php

include("connection.php");

$nid=$_GET['nid'];

$sql="select *from ngo where id=$nid";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['ngo'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>