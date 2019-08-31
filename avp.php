<?php 
	$servername="localhost";
$username="root";
$password="";
$dbname="productsection";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}

	$name=$_POST['name'];
	$contact=$_POST['number'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$sql="INSERT INTO food (name,Address,contact,gender) VALUES('$name','$address',$contact',$gender')";
	
	if(!mysqli_query($conn,$sql))
	{
		echo"not inserted";
	}
	else
	{
		echo"inserted";
		
	 }
	 header("refresh:2; url=vp.php");
	 
?>