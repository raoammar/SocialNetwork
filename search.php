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
<a href="profileDisplay.php"><img src="GCD.jpg" alt="GCD" width="100" height="100" img align="left"></a>
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

	
	
<br><u><strong>Search Friends</u></strong></br>
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
				//<a href='sendMessage.php'>Send Message</a></h3></div>
				}}
				else{echo"Not found";}
	}else{echo"Not found";}
	?>
</div>	

<div id='right'>
<h2><u>Search People:</u></h2>
 <form method="POST" action="search.php">
<u><strong>Search:</strong></u><input type="text" name="search" size="10" maxlength="10" value="" /><br /> Please enter name and hit search:
<input type="submit" value="search" />
</form>
 <?php
	@$search=$_POST['search'];
	$query2="SELECT * FROM registration WHERE concat(fname,' ',lname)LIKE '%$search%'";
	$result2=mysqli_query($connection,$query2);
	if($result2)
	{	if(mysqli_num_rows($result2)==1)
				{
				echo"  <strong><u>Your search returned the following results: </u></strong></br>";
				echo"-------------------------------------------------------------------<br />";
				while($row = mysqli_fetch_array($result2)){
				extract($row);
				echo "<u><img src='".$path."'  height='140' width='140'></u>";
				echo "<h3>Name: $fname $lname</h3>";
				echo "<p>Course: $course</p>";
				echo "<p>E-Mail: $email</p>";
				echo "From: $origin<br />";
				echo"-------------------------------------------------------------------<br />";
				}
				}
				else
				{
				echo" No results found <br>";}
	}else{
		echo"Search not found";}
	?>
 
 
 
</div>
</div>
<div class='clear'></div>
 <div id= "footer">
<small><center>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</center></small></div>
</div>
</body>
</html>