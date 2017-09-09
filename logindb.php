<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "toor";
$mysql_database = "login";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database) or die("Could not select database");
?>
