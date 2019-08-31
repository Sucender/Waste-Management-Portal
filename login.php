<?php
session_start();

if (isset($_POST['submit'])) {

	require 'connet.php';

	$useremail=$_POST['email'];
	$userpassword=$_POST['password'];

	if (empty($useremail) || empty($userpassword)) {

		header('Location: ' . $_SERVER['HTTP_REFERER'].'?error=emptyfields');
		exit();
	}
	else{
		$query="SELECT * FROM logindata WHERE uname=? OR uemail=?;";
		$stmt=mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$query)) {

			header('Location: ' . $_SERVER['HTTP_REFERER'].'?error=sql_error');
		    exit();
		}
		else{
            
            mysqli_stmt_bind_param($stmt,"ss",$useremail,$useremail);
            mysqli_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            $row=mysqli_fetch_assoc($result);
            if ($useremail!=$row['uemail'] ) {

                    header('Location: ' . $_SERVER['HTTP_REFERER'].'?usernotexists');
		            exit();         	
            }
            else{
            	if (password_verify($userpassword,$row['upwd'])) {
            		session_start();
            		$_SESSION['userid']=$row['uid'];
            		$_SESSION['sname']=$row['uname'];
					 $_SESSION ['username']=$useremail;

            		header('Location: ' . $_SERVER['HTTP_REFERER']);
					
				  

		           exit();
            	}
            	else{
            		header('Location: ' . $_SERVER['HTTP_REFERER'].'?invalid password');
		            exit();
            	}
            }

		}
	}
}
else{
	header('Location: ' . $_SERVER['HTTP_REFERER'].'?illegalentry');
}