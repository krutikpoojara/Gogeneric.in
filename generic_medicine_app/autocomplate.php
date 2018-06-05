<?php

include("connection.php");


$sql="select med_name from tbl_medicine";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['tbl_medicine'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>