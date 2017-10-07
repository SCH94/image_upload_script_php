<?php
include('config.php');
$target_dir = "photos/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);//basename return filename
$uploadOk = 1;
$delete0k = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);//returns an array that contains information about a path. like dirname,basename,extention.
if (empty($_FILES["image"]["name"])) {
    echo "
            <script type='text/javascript'>
            alert('Sorry, Please select Image');
            </script>
            ";
    $uploadOk = 0;
    header("refresh:0;url= index.php");
}
// Check if file already exists
elseif (file_exists($target_file)) {
    echo "
            <script type='text/javascript'>
            alert('Sorry, file already exists.');
            </script>
            ";
    $uploadOk = 0;
    header("refresh:0;url= index.php");
}
// Check file size
elseif ($_FILES["image"]["size"] > 500000) {
    
    echo "
            <script type='text/javascript'>
            alert('Sorry, your file is too large.');
            </script>
            ";
    $uploadOk = 0;
    header("refresh:0;url= index.php");
}
// Allow certain file formats
elseif ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    
    echo "
            <script type='text/javascript'>
            alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
            </script>
            ";
    $uploadOk = 0;
    header("refresh:0;url= index.php");
}
// Check if $uploadOk is set to 0 by an error
elseif ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} elseif (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
		$location="photos/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
    $save=mysql_query("INSERT INTO photos (location, caption) VALUES ('$location','$caption')");
			header("location: index.php");
			exit();				
     echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
    } else {
        
        echo "
            <script type='text/javascript'>
            alert('Sorry, there was an error uploading your file.');
            </script>
            ";
            header("refresh:0;url= index.php");
    }

?>
