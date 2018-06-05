<?php
include("connection.php");
$name = $_REQUEST['user_name'];
$email = $_REQUEST['user_mail'];
$detail = $_REQUEST['detail'];
$lat = $_REQUEST['lat'];
$lang = $_REQUEST['lang'];
$mobile = $_REQUEST['mobile'];
$img=$_REQUEST['img_name'];

$img1 = $img.basename($img);
$a=explode('/',$img);
$b=count($a);
mysql_query("insert into tbl_prescription(user_name,mobile,user_mail,detail,lat,lag,img_name) values('$name','$mobile','$email','$detail','$lat','$lang','".$a[$b-1]."') ");


?>