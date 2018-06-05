<?php
$host="localhost"; //replace with database hostname 
$db_name="generic medicine"; //replace with database name

$con=mysql_connect("localhost","root","")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>