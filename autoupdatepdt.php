
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"productsection");
?>

<?php
if(isset($_POST["submit1"]))
{
	$username=$_POST['name'];
	$usermail=$_POST['email'];
	$usercontactnum=$_POST['contactnum'];
    $useraddress=$_POST['address'];
    $useritem=$_POST['item'];
    $userabout=$_POST['aboutitem'];
	//$userimage=$_POST['image'];
	$userimage=addslashes($_FILES['image']['tmp_name']);
        $username1=addslashes($_FILES['image']['name']);
        $userimage=file_get_contents($userimage);
        $userimage=base64_encode($userimage);

  // $v1=rand(1111,9999);
	//$v2=rand(1111,9999);
	//$v3=$v1.$v2;
	//$v3=md5($v3);
	
//	$fnm=$_FILES["$userimage"]["$username"];
	//$dst="./product_image/".$v3.$fnm;
	//$dst1="./product_image/".$v3.$fnm;
	//move_uploaded_file($_FILES[$username]["tmp_name"],$dst);
mysqli_query($link,"insert into userview values('','$username','$usermail','$usercontactnum','$useraddress','$useritem','$userabout','$userimage')");
	
	
	}
?>

</div>
</div>
</div>
