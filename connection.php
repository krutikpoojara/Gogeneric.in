<?php
$host="localhost"; //replace with database hostname 
$db_name="generic"; //replace with database name

$con=mysql_connect("localhost","infor9wx_generic", "infogeneric")or die("cannot connect"); 
mysql_select_db("infor9wx_gogeneric")or die("cannot select DB");

?>