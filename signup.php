<?php


if(isset($_POST['submit'])) {

	require 'connet.php';

	$username=$_POST['name'];
	$usermail=$_POST['email'];
	$userpassword=$_POST['password'];
    $userrepassword=$_POST['re_password'];

    if (empty($username) || empty($userpassword) || empty($userrepassword) || empty($usermail)) {

    	header("Location: ../signup.html?error=emptyfields");
    	exit();
    }
    else if (!filter_var($usermail,FILTER_VALIDATE_EMAIL)) {

    	header("Location: ../signup.html?error=INVALIDEMAIL");
    	exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

    	header("Location: ../signup.html?error=invalidusername");
    	exit();
    }
    else if ($userpassword!=$userrepassword) {

    	header("Location: ../signup.html?error=passwordnotmatch");
    	exit();
    }
    else{

    	$query="SELECT * FROM logindata WHERE uname=?";
    	$stmt=mysqli_stmt_init($conn);
    	if (!mysqli_stmt_prepare($stmt,$query)) {

    		header("Location: ../signup.html?error=sqlerror");
    	    exit();
    	}
    	else{
    		mysqli_stmt_bind_param($stmt,"s",$username);
    		mysqli_execute($stmt);
    		mysqli_stmt_store_result($stmt);
    		if (mysqli_stmt_num_rows($stmt)>0) {
    			header("Location: ../signup.html?error=useralreadyexists");
    			exit();
    			# code...
    		}
    		else{
    			$query="INSERT INTO logindata (uname,uemail,upwd) VALUES (?, ?, ?)";
    			$stmt=mysqli_stmt_init($conn);
    	       if (!mysqli_stmt_prepare($stmt,$query)) {

    		       header("Location: ../signup.html?error=sqlerror2");
    	           exit();
    	        }
    	        else{
    		          $hashpassword=password_hash($userpassword,PASSWORD_DEFAULT);
    		          mysqli_stmt_bind_param($stmt,"sss",$username,$usermail,$hashpassword);
    		          mysqli_execute($stmt);
    		          header("Location: ../signup.html?LOGIN=success");
    	              exit();
    		    }
    	    }
    	  mysqli_stmt_close($stmt);
    	  mysqli_close($conn);
    	}  


         }
 }  
else{
	header("Location: ../signup.html?error=illegalentry");
    exit();

}  