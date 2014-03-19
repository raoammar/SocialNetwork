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
<div id = 'header'>
<center><img src="GCD.jpg" alt="GCD" width="100" height="100" align="center"><center>
<h1><center><u>Gcd Social Networking</u></center></h1>


<form method="POST" action="password.php">
<h2><u>Login:</u></h2>
Username: <input type="text" name="username" size="10" maxlength="10" value="" /><br />
Password: <input type="password" name="password" size="10" maxlength="10" value="" /><br />
<input type="submit" value="Login" />
</form>


</div>
<div id='content'>
<h2><u>Not yet Registered, Sign Up</u></h2>
<form method="POST" action="signup.php" enctype="multipart/form-data">
<h2>Registration Form:</h2>
First Name: <input type="text" name="fname" size="10" maxlength="10" value="" /><br />
Last Name: <input type="text" name="lname" size="10" maxlength="10" value="" /><br />
Username: <input type="username" name="username" size="10" maxlength="10" value="" /><br />
Course <input type="text" name="course" size="20" maxlength="20" value="" /><br />
Password: <input type="password" name="password" size="8" maxlength="8" value="" /><br />
Date of Birth: <input type="text" name="dob" size="6" maxlength="6" value="" /><br />
E-Mail Address: <input type="text" name="email" size="30" maxlength="30" value="" /><br />
From (Country/City): <input type="text" name="from" size="30" maxlength="30" value="" /><br />
<input name="uploadedfile" type="file" /><br />
<input type="submit" value="Register" />
</div>
<div id= "footer">
<small><center>Registered to: Usman Muhammad 2831996 / Ammar Tariq 2824199</center></small>
</div>



</body>
</html>

