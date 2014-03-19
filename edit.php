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
<ul> <center>
<a href='profileDisplay.php' class='active'>Home</a>
<a href='edit.php'>Edit Profile</a>
<a href='myblogs.php'>Blogs</a>
<a href='photos.php'>Photos</a>
<a href='#'>Friends</a>
<a href='search.php'>Search People</a>
<a href='#'>Messages</a>
 </ul> </center>
</div> 
<div id='content'>
<div id='left'>
<br><u><strong>Edit Profile</u></strong></br>
 <?php
	$user=$_SESSION['username'];
	$query="SELECT * FROM registration WHERE uname='$user'";
	$result=mysqli_query($connection,$query);
	if($result){
		if(mysqli_num_rows($result)==1){
				while($row = mysqli_fetch_array($result)){
				extract($row);
				echo "<center><u><img src='".$path."'  height='180' width='180'></u></center></br>" ;
				echo"Welcome <u>$user</u>";
				echo "<h4>Name: $fname $lname</h4>";
				echo "<h4>Course: $course</h4>";
				echo "<h4>Email: $email</h4>";
				echo "<h4>DoB: $dob</h4>";
				echo "<h4>From: $origin</h4>";
				}}
				else{echo"Not found";}
	}else{echo"Not found";}
	?>
</div>	
<div id='right'>
<h2><u>Edit Profile:</u></h2>
<h3>This section will let you update your profile information:</h3>

<form method="POST" action="editPro.php" enctype="multipart/form-data">
<h2>Registration Form:</h2>
First Name: <input type="text" name="fname" size="10" maxlength="10" value="" /><br />
Last Name: <input type="text" name="lname" size="10" maxlength="10" value="" /><br />
Username: <input type="username" name="username" size="10" maxlength="10" value="" /><br />
Course <input type="text" name="course" size="20" maxlength="20" value="" /><br />
Password: <input type="password" name="password" size="8" maxlength="8" value="" /><br />
Date of Birth: <input type="text" name="dob" size="6" maxlength="6" value="" /><br />
E-Mail Address: <input type="text" name="email" size="30" maxlength="30" value="" /><br />
From (Country/City): <input type="text" name="from" size="30" maxlength="30" value="" /><br />
<input name="uploadedfile" type="file"/><br />
<input type="submit" value="Update" />

</div>
</div>
<div class='clear'></div>
 <div id= "footer">
<small><center>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</center></small></div>
</div>
</body>
</html>