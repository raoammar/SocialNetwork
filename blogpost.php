<?php
include 'connect.php';
session_start();
$title=$_POST['title'];
$body=$_POST['body'];
$user=$_SESSION['username'];
echo"$title $body $user ";

$sql2="INSERT INTO blog(post_id,uname,title,body,posted) Values (default,'$user','$title','$body','".time()."')";
$result2=mysqli_query($connection,$sql2);
if($result2){
echo "sucessfull";}
else{
echo"unsuccefull";
}

	
	mysqli_close($connection);
?>