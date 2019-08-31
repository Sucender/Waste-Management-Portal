<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="productsection";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {

	die("connection failed".mysqli_connect_error());
}
else{
	//echo "ok";
	$userid=$_SESSION['username'];
	//echo $userid;
}
$query="SELECT * FROM userview WHERE email=?;";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$query)) {

			header('Location: ../profile.php?error=sql_error');
		    exit();
		}
		else{
            
            mysqli_stmt_bind_param($stmt,"s",$_SESSION['username']);
            mysqli_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            //$row=mysqli_fetch_assoc($result);?>
			<!DOCTYPE html>
			<html>
			<head>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				<title></title>
			</head>
			<body>
				<div class="containers" style="width: 700px;">
			       
                       <div class="table_responsive">
                 <table class="table table-bordered">
			<?php
           
		while ($row=mysqli_fetch_array($result)) {
			
			?>
			       <tr>
                  <td width="30%">Name</td>
                  <td width="70%"><?php echo $row['name']?></td>
				  
              </tr>
              <tr>
               <td width="30%">e-mail id</lable></td>
                  <td width="70%" name="ram"><?php echo $row['email']?></td>
              </tr>
              <tr>
               <td width="30%"><lable>Contact no.</lable></td>
                  <td width="70%"><?php echo $row['contactnum']?></td>
              </tr>
              
              <tr>
              <td width="30%"><lable>Address</lable></td>
                  <td width="70%"><?php echo $row['address']?></td>
              </tr>
          </table>
          </div>
          </div>
          
			</body>
			</html>
            
           
             



<?php
		}
	}
		?>         	
            