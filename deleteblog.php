<?php
  include("connect.php");  

	$id =$_GET["post_id"];
	
	
	// sending query
	mysql_query("DELETE FROM blog WHERE post_id = '$id'")
	or die(mysql_error());  	
	
	header("Location: myblogs.php");
?>