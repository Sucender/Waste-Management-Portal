<html>
<head>
<?php
error_reporting(0);
include 'connection.php';
$name=$_POST['user'];
$email=$_POST['mail'];
$pass=$_POST['pass'];
$sql="INSERT into admin VALUES('$name','$email','$pass')";
if($_POST['submit']){
	if(mysqli_query($conn,$sql))
	{
		echo "data added successfully";
	}
	else
	{
		echo "something went wrong";
	}
}
?>
<title>Login Panel</title>
</head>
<body>
<form action="adminpanel.php" method="POST">
Name:<input type="text" name="user">
Email:<input type="mail" name="mail">
Password:<input type="password" name="pass">
<input type="submit" name="submit" value="sendinfo">
</form>



</html>