<?
mysql_connect("localhost","root","mc565a..");
mysql_select_db("social");

$id = stripslashes($_REQUEST['id']);
$image = mysqli_query("SELECT * FROM store WHERE id=$id");
$image = mysqli_fetch_assoc($image);
$image = $image['image'];

//header("Content-type: image/jpeg");
echo $image;
?>