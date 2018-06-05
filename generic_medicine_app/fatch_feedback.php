<?php

include("connection.php");

$sql="select * from feedback";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['feedback'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>