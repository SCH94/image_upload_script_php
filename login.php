<?php
// Start the session
session_start();
?>
<html>
	<head>
		<title>LOGIN </title>
		<link href="style/log_style.css" type="text/css" rel="stylesheet"/>
	</head>
<body>
	<div class="hefo">
		<h4>Image Uploading Script</h4>
			<form action="" method="post" class="logbut">
			 <input type="submit" name="log-In" formaction="index.php" value="Back" class="button1 lgin" />
			</form>
	</div>
	<center><div class="main">
		<form action=" " method = "post" class="addroom">
			<fieldset>
				<legend>LOG IN</legend>
				User Name : 
				<input type="text" name="na" value="" class="ed"><br/>
				Password : 
				<input type="password" name="pa" value="" class="ed"><br/>
				<input type="submit" name="sub" value="submit" class="button1">
				<input type="reset" name="res" value="reset" class="button1">
			</fieldset>
		</form>
	</div></center>
<?php

$_SESSION["name"]=$_POST["na"];
$_SESSION["pass"]=$_POST["pa"];

include('logindb.php');
if(isset($_POST['sub']))
{
	$sql="select * from login where name = '$_SESSION[name]' && pass = '$_SESSION[pass]'" ;
	$ex=mysql_query($sql);
	$exists = mysql_num_rows($ex);
	if($exists == true){
		header("Location: adminwelcome.php");
                
	}else {
		echo "<div id='errr'>";
		echo "<p>Wrong user or pass</p>";
		echo "</div>";		
		}
	
}
?>
</body>
</html>
