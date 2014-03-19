<?php
include 'connect.php';
$firstname=$_POST['fname'];
$secondname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$dob=$_POST['dob'];
echo"$firstname $secondname $username $password $email $dob ";

$sql2="INSERT INTO registration(id,fname,lname,uname,pass,email,dob) Values (default,'$firstname','$secondname','$username','$password','$email','$dob')";
$result2=mysqli_query($connection,$sql2);
if($result2){
echo "sucessfull";}
else{
echo"unsuccefull";
}
/*$sql="INSERT INTO registration (id,fname, lname, uname, pass, email, dob)
VALUES(default,'$_POST[fname]','$_POST[lname]','$_POST[username]','$_POST[password]','$_POST[email]''$_POST[dob]')";

	$result = mysqli_query($connection,$sql);
	if($result){
	echo "<strong><h2>Registration Successfull</strong></h2></br>";
	echo "<strong><h2>Please go back to login page</strong></h2></br>";}
	else{
	die();
	}
	
	//mysqli_close($connection);



*/
	
	mysqli_close($connection);
?>
