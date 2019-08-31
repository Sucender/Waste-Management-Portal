<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="kannimoolaganapathy.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
</head>
<body>

<div class="container border  mt-4 w-51">
	<h3 class="m-4 text-primary">Profile</h3>
	<div class="d-flex justify-content-center">
		<ul class="nav bg-light" role="tablist">
			<li class="nav-item">
				<a href="#viewprofile" id="view profile" class="nav-link active " aria-selected="true" data-toggle="tab" role="tab">view profile</a>
			</li>
			<li class="nav-item">
				<a href="#editprofile" id="edit profile" class="nav-link  " aria-selected="false" data-toggle="tab" role="tab">edit/update profile</a>
			</li>
			<li class="nav-item">
				<a href="#serviceprofile" id="service profile" class="nav-link  " aria-selected="false" data-toggle="tab" role="tab">service profile</a>
			</li>
			<div class="panel rounded"></div>
			
		</ul>
	</div>

<div class="tab-content">
	<div class="tab-pane fade show active" id="viewprofile" aria-labelledby="view profile" role="tabpanel">
		<div class="innerContent">
		<?php
$servername="localhost";
$username="root";
$password="";
$dbname="productsection";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {

	die("connection failed".mysqli_connect_error());
}
else{
	echo "";
}
$query="SELECT * FROM volunteerdatabase WHERE uemail=?;";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$query)) {

			header('Location: ../profile.php?error=sql_error');
		    exit();
		}
		else{
            
            mysqli_stmt_bind_param($stmt,"s",$_SESSION['email']);
            mysqli_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
           // $row=mysqli_fetch_assoc($result);
           
		while ($row=mysqli_fetch_assoc($result)) {
			
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				<title></title>
			</head>
			<body>
				<div class="container" style="width: 700px;">
			       
                       <div class="table_responsive">
                 <table class="table table-bordered">
			       <tr>
                  <td width="30%"><lable>Name</lable></td>
                  <td width="70%"><?php echo $row['uname']?></td>
              </tr>
              <tr>
               <td width="30%"><lable>e-mail id</lable></td>
                  <td width="70%" id="contri" name="ram"><?php echo $row['email']?></td>
              </tr>
              <tr>
               <td width="30%"><lable>Contact no.</lable></td>
                  <td width="70%"><?php echo $row['contact']?></td>
              </tr>
              
              <tr>
              <td width="30%"><lable>Address</lable></td>
                  <td width="70%"><?php echo $row['address']?></td>
              </tr>
          </table>
          </div>
          </div>
      
			
            
           
             


        	
		</div>
	</div>
	<div class="tab-pane fade show"  id="editprofile" aria-labelledby="edit profile" role="tabpanel">
		<div class="innerContent">
		<form action=" "  style="padding: 20px" method="POST" id="insert_form" enctype="multipart/form-data">
					<div class="form-box">
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder=" your name" value="<?php echo $row['uname']?>" required>
				</div>
				<div class="form-box">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder=" your email" aria-describedby="emailHelp" value="<?php echo $row['uemail']?>" required>
				</div>
				<div class="form-box">
					<label>Contact Number</label>
					<input type="text" name="contactnum" class="form-control" id="contact" placeholder=" your contact no." value="<?php echo $row['ucontactnum']?>" required>
				</div>
				<div class="form-box">
					<br>
					<label>Select Gender</label>
					<select name="gender" id="gender">
					<option value="Male"<?php if ($row['gender']=='Male') {
						echo "selected";
					} ?>
				 >Male</option>
					<option value="Female" <?php if ($row['gender']=='Female') {
						echo "selected";
					} ?>
					>Female</option>
					</select>
					
				</div>
				<div class="form-box">
                    <label>Address</label>
					<textarea class="form-control" rows="3" placeholder="your address..." name="address"  ><?php echo $row['uaddress']?></textarea>
				</div>					
				<div class="form-box">
					<input type="hidden" name="userid" id="userid" value="insert">
				</div>
				<div style="margin-left: 480px">
					<br><input type="submit" name="insert" id="insert" class=" btn btn-success" value="UPDATE" />
				</div>
				</form>
			
		</div>
	</div>

<?php
		}
	}


if (isset($_POST['insert'])) {
		$servername="localhost";
$username="root";
$password="";
$dbname="productsection";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {

	die("connection failed".mysqli_connect_error());
}
else{
	echo "";
}
$name=$_POST['name'];
$email=$_POST['email'];
$contactnum=$_POST['contactnum'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$query="UPDATE wholedata SET uname=?, uemail=?, ucontactnum=? ,uaddress=?, gender=? WHERE uid=?;";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$query)) {

	header('Location: ../kannimoolaganapathy.php?error=sql_error');
	 exit();
		}
		else{
            
            mysqli_stmt_bind_param($stmt,"sssssi",$name,$email,$contactnum,$address,$gender,$_SESSION['userid']);
           if(mysqli_execute($stmt)){
           	echo '<script>alert("data updated")</script>';
           	unset($_SESSION['update']);
           }
           else{
           	echo '<script>alert("data not updated")</script>';
           }

	}
}
?>
	
		
	<div class="tab-pane fade show " id="serviceprofile" aria-labelledby="service profile" role="tabpanel">
		<div class="innerContent">
			<?php 
                     if (isset($_SESSION['serviceid'])) {


                           
$servername="localhost";
$username="root";
$password="";
$dbname="infosys";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if (!$conn) {

	die("connection failed".mysqli_connect_error());
}
else{
	echo "";
}
$query="SELECT * FROM infodata WHERE id=?;";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$query)) {

			header('Location: ../profile.php?error=sql_error');
		    exit();
		}
		else{
            
            mysqli_stmt_bind_param($stmt,"i",$_SESSION['serviceid']);
            mysqli_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
           // $row=mysqli_fetch_assoc($result);
           
		while ($row=mysqli_fetch_assoc($result)) {
			
			?>
			<!DOCTYPE html>
			<html>
			<head>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
				<title></title>
			</head>
			<body>

				<h4 class="ml-4">CONTRIBUTOR DETAILS:</h4>
				<div class="container" style="width: 700px;">
			       
                       <div class="table_responsive">
                 <table class="table table-bordered">
			       <tr>
                  <td width="30%"><lable>Name</lable></td>
                  <td width="70%"><?php echo $row['uname']?></td>
              </tr>
              <tr>
               <td width="30%"><lable>e-mail id</lable></td>
                  <td width="70%" id="contri" name="ram"><?php echo $row['uemail']?></td>
              </tr>
              <tr>
               <td width="30%"><lable>Contact no.</lable></td>
                  <td width="70%"><?php echo $row['contactnum']?></td>
              </tr>
              
              <tr>
              <td width="30%"><lable>Address</lable></td>
                  <td width="70%"><?php echo $row['uaddress']?></td>
              </tr>
          </table>
          </div>
          </div>
          <button id="reached" class="btn btn-primary ml-4"> Reached destination</button>
      
	<?php
}	
}
}	
 ?>

                    	

                     
		</div>
	</div>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function(){
		var panel =$('.panel').css('width');


var width = panel.replace('px','');


var i=0;
$('ul li').each(function(){
i++;

});

var val1 = width/i;
$('.panel').css('width',val1+'px');

$('ul li:nth-child(1)').on('click',function(){

 $('.panel').animate({

 	left : '0px'
 })

});

$('ul li:nth-child(2)').on('click',function(){

 $('.panel').animate({

 	left : val1-10+'px'
 })

});


$('ul li:nth-child(3)').on('click',function(){

 $('.panel').animate({

 	left : val1+val1+'px'
 })

});

});
		$('#reached').click(function(){

                alert("congratulations!!");
            
               $.post("serviceout.php",{id:"0"});



		});


</script>
</body>
</html>