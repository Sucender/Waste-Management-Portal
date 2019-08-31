<?php
if(isset($_POST['submit']))
{
require 'connet.php';

$username=$_POST['name'];	
$email=$_POST['email'];
$password=$_POST['password'];
$passwordrepeat=$_POST['re_password'];
if(empty($username)||empty($email)||empty($password)||empty($passwordrepeat))
{
	header("Location:../signups.html?error=emptyfields&uid=".$username,"&email=".$email);
	exit();
	
}	
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username))
{
	header("Location:../signups.html?error=invalidmailid");
	exit();
	
	
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
	header("Location:../signups.html?error=emptyfields&uid=".$username);
	exit();
	
}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
{
	
header("Location:../signups.html?error=inavliduid&email=".$email);
	exit();
}
else if($password!==$passwordrepeat){

header("Location:../signups.html?error=emptyfields&uid=".$username,"&email=".$email);
	exit();

}
else{
	$sql="select * from login where username=?";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		
		header("Location:../signups.html?error=sqlerror1");
		exit();
		
	}
	else{
		mysqli_stmt_bind_param($stmt,"s",$username);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$resultcheck=mysqli_stmt_num_rows($stmt);
		if($resultcheck>0)
		{
			header("Location:../signups.html?error=usertaken&email=".$email);
            exit();
		}
		else{
			$sql="INSERT INTO login (username,email,password) values(?,?,?)";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_init($stmt,$sql))
			{
				header("Location:../signups.html?error=sqlerror2");
				exit();
				
				
			}
			else{
				$hashedpwd=password_hash($password,PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt,"sss",$username,$email,$hashedpwd);
	            mysqli_stmt_execute($stmt);
				//mysqli_stmt_store_result($stmt);
				header("Location:../signups.html?signup=success");
				exit();
			}
			
	
}




	}

}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
	header("Location:../signups.html");
	
}
?>