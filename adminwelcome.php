<?php
 session_start();
if (!isset($_SESSION['name'])) {
header('Location: login.php');
}
?>
<html>
	<head>
		<title></title>
		<link href="style/log_style.css" type="text/css" rel="stylesheet"/>
	</head
	<body>
		<div class="hefo">
			 <h4>Image Uploading Script</h4>
		</div>
	<center><div class="main">
			<form action="" method="post" enctype="multipart/form-data" class="addroom">
		<br />
		 Select Image: <br /><br />
			 <input type="file" name="image" class="ed"><br /><br />
		 Caption(optional)<br /><br />
			 <input name="caption" type="text" class="ed" id="brnu" />
		 <br />
		<br />
		 <input type="submit" name="Submit" formaction="adminupload.php" value="Upload" class="button1" />
		 <input type="submit" name="Submit" formaction="adminarchieve.php" value="Gallery" class="button1" />
		 <input type="submit" name="logout" formaction="logout.php" value="logout" class="button1" />
			 </form>
	</div></center>

	</body>
</html>
