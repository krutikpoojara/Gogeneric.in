<?php

include("connection.php");

$mid=$_GET['mid'];

$sql="select * from tbl_medicine where med_id=$mid";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['medicine'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>