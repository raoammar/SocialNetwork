<?php
include 'connect.php';
session_start();
$target_path = "photos/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
	header( 'Location:photos.php' ) ;
} else{
    echo "There was an error uploading the file, please try again!";
}

 echo $username=$_SESSION['username'];
 $path= $target_path;

$sql2="INSERT INTO photos(img_id,user_id,path) Values (default,'$username','$path')";
$result2=mysqli_query($connection,$sql2);
	mysqli_close($connection);
?>
