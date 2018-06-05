<?php

include("connection.php");

$mid=$_GET['pid'];

$sql="select * from policies where id=$mid";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['policies'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>