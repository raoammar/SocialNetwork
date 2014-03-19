<?php
include 'connect.php';
session_start();?>
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
<div class="floatright"><h3><a href='logout.php'>Logout</a></h3></div>
</div>
<div id='nav'> 
<ul> 
<a href='profileDisplay.php' class='active'>Home</a>
<a href='myblogs.php' class='active'>My Blogs</a>
<a href='blogs.php' class='active'>Blogs</a>
<a href='#'>Photos</a>
<a href='#'>Friends</a>
<a href='#'>Messages</a>
 </ul> 
</div> 
<div id='content'>
<div id='left'>
<br>Profile</br>
 <?php
	$user=$_SESSION['username'];
	$query = "SELECT uname,lname,fname,dob,email FROM registration WHERE uname='$user'";
	$result=mysqli_query($connection,$query);
	if($result){
		if(mysqli_num_rows($result)>1){
				while($row = mysqli_fetch_array($result)){
				extract($row);
				echo"Welcome $user";
				echo "<h4>Name: $fname $lname</h4>";
				echo "<h4>Email: $email</h4>";
				echo "<h4>DoB: $dob</h4>";
				}}
				else{echo"Not found";}
	}else{echo"Not found";}
	?>
</div>	

<div id='right'>
<h3>My Blog Posts:</h3>
<?php
$user=$_SESSION['username'];
	$query = "SELECT uname,title,body FROM blog";
	$result=mysqli_query($connection,$query);
	if($result){
	
				while($row = mysqli_fetch_array($result)){
				extract($row);
				echo"Userneame :$uname";
				echo "<h4>Title: $title</h4>";
				echo "<h4>body: $body</h4>";
				
				}}
	else{echo"Not found";}
	?>


</div>
</div>
<div class='clear'></div>
 <div id= "footer">
<small>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</small></div>
</div>
</body>
</html>