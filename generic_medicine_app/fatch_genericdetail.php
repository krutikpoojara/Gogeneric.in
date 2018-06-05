<?php

include("connection.php");

$gen_id=$_GET['gid'];

$sql="select * from tbl_generic where gen_id='$gen_id'";
$result = mysql_query($sql) or die("errer");
$json = array();

if(mysql_num_rows($result)){

while($row=mysql_fetch_assoc($result)){
$json['tbl_generic'][]=$row;
//echo $row[''];
}
}
mysql_close($con);
echo json_encode($json); 

?>