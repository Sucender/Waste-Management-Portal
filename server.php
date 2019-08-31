<?php
session_start();

$username="";
$email="";

$db= mysqli_connect('localhost','root','','edureka') or die("could not connect to database");
//register users

$username=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$password_2=mysqli_real_escape_string($db,$_POST['password_2']);

//form validation

if(empty($username))
{
	array_push($error,"username is required");
}
if(empty($password)){array_push($error,"password is required");}
if(empty($email)){array_push($error,"email is required");}
if(empty($password!=$password_2)){array_push($error,"password do not match");}

//checking db for same username
$user_check_query="SELECT * FROM user WHERE username='$username' or email='$email' LIMIT 1";

$results=mysqli_query($db,$user_check_query);
$user=mysqli_fetch_assoc($results);
if($user){
	if($user['username']===$username){array_push($errors,"username already exists");}
     
	 if($user['email']===$email){array_push($errors,"email already exists");}
}


//register the user if no error
if(count($errors)==0)
{
	$passwords=md5($password);
	$query="INSERT INTO user (username,email,password) VALUES('$username',$email',$password');";
	mysqli_query($db,$query);
	$_SESSION['username']=$username;
	$_SESSION['success']="YOU ARE NOW LOGGED IN";
	header("location  index.php");
	
}	
?>




















?>