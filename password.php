<?php
session_start();
include 'connect.php';
	 if($_SERVER['REQUEST_METHOD']=="POST")
	{
	$username=mysqli_real_escape_string($connection,$_POST['username']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);
	filter_var($username,FILTER_SANITIZE_STRING);
	filter_var($password,FILTER_SANITIZE_STRING);
		if(!empty($_POST['username'])||!empty($_POST['password']))
		{
		$querry="SELECT * FROM registration WHERE uname='$username' AND pass='$password'";
		$result=mysqli_query($connection,$querry);
			if($result)
			{
				if(mysqli_num_rows($result)==1)
				{
				$_SESSION['username'] = $username;
				$_SESSION['username']=$_POST['username'];
				header("Location:profileDisplay.php");
				exit();
				}
				else
				{
				echo"Login failed!<br>";
				//echo"<a href='index.php'><b>Home</b></a>";
				}
			}
			else
			{
			die(mysqli_error($connection));
			}
			
		}
		else
		{
		echo "Fill the password or username<br>";
		//echo"<a href='index.php'><b>Home</b></a>";
		}
	}
	else
	{
	//echo "go back";
	}