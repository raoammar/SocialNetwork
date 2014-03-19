<html>
<head>
	<title> Upload An Image: </title>
</head>
<body>
<form action="uploadImage.php" method="POST" enctype="multipart/form-data">
	File:
	<input type="file" name="image"> <input type="submit" value="Upload">
</form>

<?php
mysql_connect("localhost","root","mc565a..") or die(mysql_error());
mysql_select_db("social");


@$file = $_FILES['image']['tmp_name'];
if(!isset($_FILES['image']))
	echo "Please select an image to be uploaded";
else{
$image = file_get_contents($_FILES['image']['tmp_name']);
$image_name = $_FILES['image']['name'];
$image_size = getimagesize($_FILES['image']['tmp_name']);

if($image_size==FALSE)
	echo "Thats not an image file";

else{
	if (!$insert = mysql_query("INSERT INTO store (id,name,image) VALUES ('$image_name','$image')"))
	echo "Error uploading image";
	else{
	$lastid = mysql_insert_id();
	echo "Image Uploaded.<p />Your image:<p /><img src=upload.php?id=$lastid>";
	}
}	}
?>


</body>



</html>


