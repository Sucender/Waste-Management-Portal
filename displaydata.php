<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  

<style>
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }

 .w3-container{
		padding:550px 0px 0px 500px;
		background-color:;
	}
.cont{
	background-color:green;
}
  .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width:300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  
  }

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
 .fa {
  padding: 20px;
  font-size: 30px;
  width: 62px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 15%;
}

.fa:hover {
    opacity: 0.2;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
 .margin {margin-bottom: 45px;}

.map{
align:center-right;
width:124%;
margin-top:15px;
}
.container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}
.bg-4 {  background-color: #2f2f2f; /* Black Gray */
    color: #ffffff;
  }
#add{
     line-height: 13px;
     width: 75px;
   
     margin-top: 0px;
     margin-right: 0px;
     position:absolute;
     top:0;
     right:0;
}
.navbar {
  padding-top: 15px;
  padding-bottom: 15px;
  border: 0;
  border-radius: 0;
  margin-bottom: 0;
  font-size: 12px;
  letter-spacing: 5px;
}

.navbar-nav li a:hover {
  color: #1abc9c !important;
}
body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
 

</style>
</head>
<body>
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"productsection");
?>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">WHO</a></li>
        <li><a href="#">WHAT</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>


<h2 style="text-align:center;color:green">Food</h2>
<button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-warning" style="float:right;position:relative top:50%;">Add</button>
<div id="add_data_Modal" class="modal fade" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">CONTRIBUTE.....</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body">
				<form action="autoupdatepdt.php" method="POST" id="insert_form" enctype="multipart/form-data">
					<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder=" your name" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" placeholder=" your email" aria-describedby="emailHelp" required>
				</div>
				<div class="form-group">
					<label>Contact Number</label>
					<input type="text" name="contactnum" class="form-control" placeholder=" your contact no.name" required>
				</div>
				<div class="form-group">
                    <label>Address</label>
					<textarea class="form-control" rows="3" placeholder="your address..." name="address"></textarea>
				</div>
				<div class="form-group">
					<label>offering item</label>
					<input type="text" name="item" class="form-control" placeholder="eg:old book,food...." required>
				</div>
				<div class="form-group"> 
					<label>About the item</label>
					<input type="text" name="aboutitem" class="form-control" placeholder="eg:college books good condition...." required>
				</div>
				<div class="form-group">	
					<label>Image</label>
					<input type="file" name="image" class="form-control" required>
				</div>	
				<div class="form-group">
					<br><button type="submit" name="submit1" class=" btn btn-success">DONATE</button>
				</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
			</div>
			
		</div>
	</div>
</div>
<?php
/*if(isset($_POST["submit1"]))
{
	$v1=rand(1111,9999);
	$v2=rand(1111,9999);
	$v3=$v1.$v2;
	$v3=md5($v3);
	
	$fnm=$_FILES["image"]["name"];
	$dst="./product_image/".$v3.$fnm;
	$dst1="./product_image/".$v3.$fnm;
	move_uploaded_file($_FILES["image"]["tmp_name"],$dst);
mysqli_query($link,"insert into userview values('','$_POST[name]','$_POST[email]','$_POST[contactnum]','$_POST[address]','$_POST[item]','$_POST[aboutitem]','$dst1')");
	
	
	}*/

?>




<?php
$res=mysqli_query($link, "select * from userview");
while($row=mysqli_fetch_array($res))
{
?>
<div class="col-sm-3">

<div class="card">

<img src="<?php echo $row["image"];?>" alt="Denim Jeans" style="width:300px; height:250px">
 <h1><?php echo $row["name"];?></h1>
 <p class="price"><?php echo $row["item"];?></p>
 <p><?php echo $row["aboutitem"];?></p>
 <p><button>View Details</button></p>
 <div class="form-popup" id="myForm">
 </div>
 </div>
 </div>
<?php
}
?>
</div>
<div class="w3-container">
<h2></h2>
</div>
<footer class="container-fluid bg-4 text-center">
<div class="col-sm-3">
<h2>Follow Us</h2>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>
<div class="col-sm-3">
<h3 style="text-align:center"><b>Address </b></h3>
<h4 style="text-align:center">No: 9803 TNHB</h4>
<h4 style="text-align:center">Ayappakkam</h4>
<h4 style="text-align:center">Chennai-77</h4>
</div>
<div class="col-sm-3">
  <h3 style="text-align:justify"><b>Contact Us </h3>
  <h4 style="text-align:justify"><b>Tel-No :</b> 044-26848389</h4>
  <h4 style="text-align:justify"><b>Email-id :</b> abc123@gmail.com</h4>
  <h4 style="text-align:justify"><b>Fax :</b> Fax@teryathu</h4>
</div>
<h3><b>Location</b></h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.750981365236!2d80.07412071430512!3d13.051516416652184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a528a6aae9324eb%3A0x6e3d1543b147a7eb!2sPanimalar+Engineering+College!5e0!3m2!1sen!2sin!4v1550216458444" width="250" height="150" frameborder="0" style="border:0"></iframe>
</footer>
</body>
</html>


