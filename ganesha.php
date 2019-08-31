<?php


if(isset($_POST['submit'])) {

	require 'linker2.php';

	$username=$_POST['name'];
	$usermail=$_POST['email'];
	$usercontactnum=$_POST['contactnum'];
    $useraddress=$_POST['address'];
    $useritem=$_POST['item'];
    $userabout=$_POST['aboutitem'];
   $userimage=$_POST['image'];

    if (empty($username) || empty($usercontactnum) || empty($useraddress) || empty($usermail) || empty($useritem) || empty($userabout)) {

    	header("Location: ../displaydata.php?error=emptyfields");
    	exit();
    }
    else if (!filter_var($usermail,FILTER_VALIDATE_EMAIL)) {

    	header("Location: ../displaydata.php?error=INVALIDEMAIL");
    	exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

    	header("Location: ../displaydata.php?error=invalidusername");
    	exit();
    }
    else{
        if (getimagesize($_FILES['image']['tmp_name'])==FALSE) {
        
        echo "please select an image";
    }
    else{
        $userimage=addslashes($_FILES['image']['tmp_name']);
        $username1=addslashes($_FILES['image']['name']);
        $userimage=file_get_contents($userimage);
        $userimage=base64_encode($userimage);
        
    
         $query="INSERT INTO userview values('','$username','$useremail','$usercontactnum','$useraddress','$useritem','$useraboutitem','$userimage');";
                $stmt=mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt,$query)) {

                   header("Location: ../displaydata.php?error=sqlerror2");
                   exit();
                }
                else{ 
                      
                      mysqli_stmt_bind_param($stmt,"sssssss",$username,$usermail,$usercontactnum,$useraddress,$useritem,$userabout,$userimage);
                      $result=mysqli_execute($stmt);
                      if($result){
                      header("Location: ../displaydata.php?INSERT=success");
                      exit();
                  }
                  else{
                    header("Location: ../displaydata.php?INSERT=fail");
                      exit();
                  }
                }
mysqli_stmt_close($stmt);
          mysqli_close($conn);

    }
     
}
}
else{
    header("Location: ../displaydata.php?error=illegalentry");
    exit();
}