<?php

include("connection.php");

$did=$_GET['d_id'];

$sql="select *from dieases where d_id=$did";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['dieases'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>