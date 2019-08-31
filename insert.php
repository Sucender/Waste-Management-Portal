<?php

require 'connet.php';
if(!empty($_POST["action"]=="insert"))
{
	$username=$_POST['name'];
	$usermail=$_POST['email'];
	$usercontactnum=$_POST['contactnum'];
    $useraddress=$_POST['address'];
    $useritem=$_POST['item'];
    $userabout=$_POST['aboutitem'];
	    $subject=$username." contributed ". $useritem ." in the address, ".$useraddress;;
    $message="Hey there!! NEW POST AT SAVE HUNGER!!!"."\r\n\n".$username." contributed ". $useritem ." in the address, ".$useraddress;

	//$userimage=$_POST['image'];
	

  // $v1=rand(1111,9999);
	//$v2=rand(1111,9999);
	//$v3=$v1.$v2;
	//$v3=md5($v3);
	
//	$fnm=$_FILES["$userimage"]["$username"];
	//$dst="./product_image/".$v3.$fnm;
	//$dst1="./product_image/".$v3.$fnm;
	//move_uploaded_file($_FILES[$username]["tmp_name"],$dst);
//mysqli_query($link,"insert into userview values('','$username','$usermail','$usercontactnum','$useraddress','$useritem','$userabout','$userimage')");

    if (empty($username) || empty($usercontactnum) || empty($useraddress) || empty($usermail) || empty($useritem) || empty($userabout)) {

    	header("Location: ../rampost.php?error=emptyfields");
    	exit();
    }
    else if (!filter_var($usermail,FILTER_VALIDATE_EMAIL)) {

    	header("Location: ../rampost.php?error=INVALIDEMAIL");
    	exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

    	header("Location: ../rampost.php?error=invalidusername");
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
        
    
         $query="INSERT INTO userview( name, email, contactnum, address, item, aboutitem,image) VALUES (?,?,?,?,?,?,?);";
                $stmt=mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt,$query)) {

                   header("Location: ../rampost.php?error=sqlerror2");
                   exit();
                }
                else{
                      
                      mysqli_stmt_bind_param($stmt,"sssssss",$username,$usermail,$usercontactnum,$useraddress,$useritem,$userabout,$userimage);
                      
                      if(mysqli_execute($stmt)){
                      //
                        //header("Location:../gopuravinayagar.php?success=success");
                     // $output .= '<lable class="text-success">Data inserted</lable>';
                      $select_query="SELECT * FROM userview;";
                      $stmt=mysqli_stmt_init($conn);
                      if (!mysqli_stmt_prepare($stmt,$select_query)) {

                   header("Location: ../rampost.php?error=sqlerror2");
                   exit();
                }
                else{
                  mysqli_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            //$output .= '<div class="container-fluid" id="Details">
 // <div class="row">';
  while ($row=mysqli_fetch_assoc($result)) {

    $output = '<div class=" col-3-md ml-1 mr-2" >
        <div class="card" style="width: 18rem;">
          <img src="data:image;base64,'.$row['image'].'" class="card-img-top" alt="no image">
          <div class="card-body">
            <h5 class="card-title">'.$row['item'].'</h5>
            <p class="card-text"> '.$row['aboutitem'].'</p>
            <button type="submit" class="btn btn-primary view_data" id=" '.$row['id'].'"> View Details</button>
          </div>
        </div>
      </div>
      ';
    }
                
	 }             
}
}
}
}

echo $output;
require 'connet.php';

$query="SELECT uemail FROM logindata;";
      $stmt=mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt,$query)) {

        header("Location: ../signup.html?error=sqlerror");
          exit();
      }
      else{
        mysqli_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
           while($row=mysqli_fetch_assoc($result)){
       
            mail($row['uemail'],$subject,$message,'From:subhakumar06597@gmail.com');
           }
}

}
else{
    header("Location: ../rampost.php?error=illegalentry");
    exit();
}
?>
