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
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$contact=$_POST['number'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$query="insert into volunteerdatabase values('','$name','$address','$contact','$gender')";
    if (mysqli_query($conn,$query)) {
	
		echo"inserted";
	}
	else
	{
		echo" not inserted";
		
	 }
}

?>
<html>
<head>
<title>form</title>
</head>
<body>
<h3>Add Profile</h3>
	  <div class="align">
	  <form action="frm.php" method="POST">
	  <label><b>Name</b></label>
    <input type="text" placeholder="Enter Your Name" name="name" required><br><br>
       <label for="Number"><b>Contact no</b></label>
        <input type="text" placeholder="Enter Your Ph.no"name="number" required><br><br>

    <label><b>Address</b></label>
    <input type="text" placeholder="Enter Your Address" name="address" required><br><br>
    <label><b>Gender</b></label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br><br>
	 <input type="submit" value="submit" name="submit">
	   </form>

	
</div>
</body>
</html>