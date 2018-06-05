<?php

include("connection.php");

$med=$_GET['med'];
$sql="select * from tbl_generic where med_id IN (select med_id from tbl_medicine where med_name LIKE '$med%')";
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