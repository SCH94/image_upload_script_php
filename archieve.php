<head>
<title></title>
<link href="style/arc_style.css" type="text/css" rel="stylesheet"/>
</head
<body>
<div class="hefo">
	
</div>
<div id="hebe">
<form action="" method="post" enctype="multipart/form-data" class="backroom">
<input type="submit" name="back" formaction="index.php" value="<< back" class="back" />
<h4>Photo Archieve</h4>
</form>
</div>
<br />
<br />
<?php
include('config.php');
$result = mysql_query("SELECT * FROM photos");
while($row = mysql_fetch_array($result))
{
echo '<div class="imagelist">';
echo '<a href="'.$row['location'].'" target="_blank"><p><img src="'.$row['location'].'"></p></a>';
echo '<a href="'.$row['location'].'" target="_blank"><p id="caption">'.$row['caption'].' </p></a>';
echo ' <center><a href="download.php?nama='.$row['location'].'"><input type="submit" name="dow "value="download" class="button1"/></a></center>';
echo '</div>';
}
?>
</body>
</html>
