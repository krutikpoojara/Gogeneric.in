<?php

include("connection.php");

$sql="select med_id,med_name from tbl_medicine order by med_name asc";
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