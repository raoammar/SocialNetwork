<?php
session_start();
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
   <title>Gcd Social Networking</title>
   <link rel="stylesheet" type="text/css" href="style1.css" />
</head>
<body>
<div id="wrapper">
<div id= 'header'>
<img src="GCD.jpg" alt="GCD" width="100" height="100" img align="left">
<h1><center><u>Gcd Social Networking</u></center></h1>
</div>
<div id='nav'> 
<ul> <center>
 <?php
$target_path = "uploads/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
 $firstname=$_POST['fname'];
 $secondname=$_POST['lname'];
 $username=$_POST['username'];
 $course=$_POST['course'];
$password=$_POST['password'];
 $email=$_POST['email'];
 $dob=$_POST['dob'];
 $from=$_POST['from'];
 $path= $target_path;
$sql2="UPDATE registration SET fname='$firstname',lname='$secondname',uname='$username',course='$course',pass='$password',email='$email',dob='$dob',origin='$from',path='$path' WHERE uname='$username'";
$result2=mysqli_query($connection,$sql2);
if($result2){
echo "All information Successfully Updated";}
else{
echo"Error, Please go back to fill up the form again";
}	
	mysqli_close($connection);
?>
<input type="button" onclick="parent.location='profileDisplay.php'" value="Home">     
 </ul> </center>
</div> 
<div id='content'>
<div id='left'>

</div>	

<div id='right'>

 
 
</div>
</div>
<div class='clear'></div>
 <div id= "footer">
<small><center>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</center></small></div>
</div>
</body>
</html>

?>