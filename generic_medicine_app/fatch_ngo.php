<?php

include("connection.php");

$sql="select * from ngo order by name asc";
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