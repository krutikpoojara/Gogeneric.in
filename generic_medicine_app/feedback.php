<?php
include("connection.php");
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$description = $_REQUEST['message'];

mysql_query("insert into feedback(user_name, email, description) values('{$name}','{$email}','{$description}') ");


?>