<?php

include('config.php');
$name= $_GET['dlt'];
$result = mysql_query("SELECT'$name' FROM photos");
$exe=mysql_query($result);
unlink($name);

$delresult = mysql_query("DELETE FROM photos where location = '$name'");
$delexe=mysql_query($delresult);
header("Location: adminarchieve.php");
	
?>
