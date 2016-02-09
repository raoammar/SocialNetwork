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

 $title=mysql_escape_string($_POST['fname']);
 $body=mysql_escape_string($_POST['lname']);

$sql2="UPDATE blog SET title='$title',body='$body' WHERE id='$id'";
$result2=mysqli_query($connection,$sql2);
if($result2){
echo "All information Successfully Updated";}
else{
echo"Error, Please go back to fill up the form again";
}	
	mysqli_close($connection);
?>
<input type="button" onclick="parent.location='myblog.php'" value="Home">     
 </ul> </center
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
