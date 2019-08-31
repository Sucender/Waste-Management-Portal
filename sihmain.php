<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kalpavirshagam</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


<link href="styles.css" type='stylesheet'>


<script type="text/javascript">

window.onload=function geoFindMe() {
  var output = document.getElementById("out");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

    var img = new Image();
    img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false&key=YOUR_API_KEY";

    output.appendChild(img);
  }

  function error() {
    output.innerHTML = "Unable to retrieve your location";
  }

  output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}

</script>
 <style>
   body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}

  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #ffffff;
  }
  .bg-5{
  background-color: #1abc9c;  
  color:#ffffff;
  }
  .bg-6{
  background-color: #474e5d;  
  color:#ffffff;
 
  }
  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: transparent;}
.dropdown {
  position: relative;
  display: inline-block;
}

.testimonials.carousel-indicator{
bottom:-60px;
}
  .carousel-indicator li {
  background-color:white;
  width:20px;
  transition: all 0.5s ease-in;
  }
  
  
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
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
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  #quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 60px;
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-indicators {
    position: relative;
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-top: 20px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    opacity: 0.4;
    overflow: hidden;
    transition: all .4s ease-in;
    vertical-align: middle;
}
#quote-carousel .carousel-indicators .active {
    width: 128px;
    height: 128px;
    opacity: 1;
    transition: all .2s;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
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


.map{
align:center-right;
width:124%;
margin-top:15px;
}
@import url('https://fonts.googleapis.com/css?family=Roboto');

.main-section {
	margin:0 auto;
	margin-top: 150px;
	padding:0;
}

.modal-content {
	background-color: #99c2cc;
	opacity:0.9 ;
	padding: 10px 25px 20px 25px;
	border-radius: 20px;
}
.user-img img {
	height:120px;
	width:120px;
	border-radius:70px;
}
.user-img {
	padding-top:10px;
	padding-left:70px;
 margin-top:-60px;
}

.form-group{
	
	margin-bottom: 25px;
}
.form-group input {
	height:42px;
	border-radius:5px;
	border:0;
	font-size:18;
	letter-spacing:2px;
	padding-left:54px;
}
.form-group::before {
	font-family:'Font Awesome\ 5 Free';
	content: "\f1fa";
	position: absolute;
	font-size: 22px;
	left: 28px;
	padding-top:4px;
	color:#555e60;
}
.form-group:last-of-type::before {
	content:"\f023";
}
.form-input button {
	width:40%;
	margin:5px 0 25px;
}
.btn-success {
	background-color:#59b300;
	font-size: 19px;
	border-radius:5px;
	padding: 7px 14px;
	border:1px solid #59b300;
}

.btn-success:hover{
	background-color: #59b300 ;
	border:1px solid #59b300 ;
	opacity:0.5 ;
}

.forget {
	padding:5px 0 25px;
}
.forget a {
	color:#daf1ff;
}
button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
	color:black;
	padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  
}
# add a:hover{
	color:#1abc9c !important;
}




</style>

 
 
 </head>
<body>
<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>


</button>
<a class="navbar-brand" href="#">Kalpavirshagam</a>

</div>
<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
	  <?php
        if (isset($_SESSION['userid'])) {

            echo'<li><a href="#">Waste Management</a></li>
                 <li><a href="#aboutus">Aboutus</a></li>
                 <li><a href="#ourservices">OurServices</a></li>';
				 
			echo '<img src="head ima.png" width="50px" height="50px" style="border-radius:50%">';
            
			echo '<li><a href="logout.php">Logout</a></li>';
			
			 echo'<li><a href="vp.php">Profile</a></li>';
			  echo "<li><a> " . $_SESSION['sname'] . "</a></li>";
			echo '<script language="javascript">';
            echo 'alert("You have successfully logged in")';
            echo '</script>';

			//echo($_SESSION['username']);
		}
        else{
        	echo '<li><a href="#">Waste Management</a></li>
                  <li><a href="#aboutus`">Aboutus</a></li>
                  <li><a href="#ourservices">OurServices</a></li><li><button id="add">Login</button></li>
                  <li><a href="signup.html">Register</a></li>';
				 
				  echo '<script language="javascript">';
                  echo 'alert("Logged out")';
                  echo '</script>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

<div class="mySlides w3-display-container w3-center">
    <img src="image1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3></h3>
      <p><b></b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="w1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3></h3>
      <p><b></b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="crt.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3></h3>
      <p><b></b></p>    
    </div>
  <script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

</script>

</script>
</div>
<div class="container-fluid bg-2 text-center" id="aboutus">
<h3>About us</h3>
<p style="text-align:left;font-size:20px">Are you a person who altruistic person? This is a right platform for you because you can help others by giving your belongings that never needed for you which can be needed by others.Here we do volunteering services by collecting the objects from owners and distribute to the neddy people, ashramam, and so on. By clicking a single button here you can change the fate of India. Let's start contributing and make a change in Indis's tranformation to a Hunger free India. Keen to help don't wait login and help the neddy</p>
<a href="vision.html" class="btn btn-default btn-lg">Read More</a>
</div>
<div class="container-fluid bg-3 text-center" id="ourservices">
<h3> Our Services</h3>
<div class="row">
<div class="col-sm-3">
<p align="center">Food</p>
<a href="finalre.php">
<img src="eat-circle-orange-512.png"class="img-responsive img-circle" alt="food" width="189" height="267" >
</a>
</div>
<div class="col-sm-3">
<p>clothes</p>
<a href="finalre.php">
<img src="image1.png" class="img-responsive img-circle" alt="clothes" width="189" height="267">
</a>
</div>
<div class="col-sm-3">
<p>E-Waste</p>
<a href="finalre.php">
<img src="image2.png" class="img-responsive img-circle" alt="e-waste" width="189" height="267">
</a>
</div>
<div class="col-sm-3">
<p>Books</p>
<a href="finalre.php">
<img src="book.jpg" class="img-responsive img-circle" alt="plastics" width="189" height="267" style="border-radius:50%">
</a>
</div>
</div>
</div>
<div class="container-fluid bg-5 text-center">
<h3>How to do Waste Managemet</h3>
<iframe width="560" height="315" src="https://www.youtube.com/embed/gf3cTGmvN7s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="container-fluid bg-6 text-center">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>I am running a  small scale industry i am getting many e-waste regulary from these platform at a reasonable rate i am very happy with their service</p>
                                    <small>Vankamudi</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>I arranged a get to gather meeting with my friends and some amount of food get wasted I had posted in this platform within 30 minutes I had get a call from Sri Sankara Ashramam and they picked up the food I am happy with the service doing by kalpvavirshagam people. Good work guys</p>
                                        <small>Ram</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>It is nice platform where I contribute my old books and within 1 day my book sold out for good money and they are doing a great service for the people of world. I too learn some waste management techniques from these platform and i too implement it in my house.</p>
                                        <small>Narendran</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/mantia/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
      <!--  <a class="btn btn-primary" href="http://thecodeblock.com/create-a-quote-testimonial-slider-using-bootstrap-carousel"><i class="fa fa-arrow-left"></i> Back to Article</a>-->
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

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
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog text-center ">
		<div class="col-sm-9 main-section">
			<div class ="modal-content">
					<div class="modal-header" style="padding:35px 50px;">
		          	<button  class="close" data-dismiss="modal">&times;</button>
		          		
    					</div>	
				<div class ="col-12 user-img">
					<img src="img/face.png">
				</div>
			
			       <div class="modal-body" >
				   <div class ="col-12 form-input">
							<form action="login.php" method="POST"  id="insert_form">
								<div class="form-group">
									<input type="email" class="form-control"name="email" placeholder="Enter email" required>
								</div>
								<div class="form-group">
									<input type="password" class="form-control"name="password" placeholder="Enter password" required>
								</div>
								<button type="submit" id="mylogin" name="submit" class="btn-success"><b>Login</b></button>
								
							</form>
						</div>
					</div>
						<div class="modal-footer">
                        <div class="col-12 forgot">
             				 <a href="forgotPassword.php" style='color:white ;font-weight: bolder;'><i>Forgot Password?</i></a></div>
            			</div>
                		</div>
			</div>
		</div>
 	</div>
 </div>
 </div>
 <script>
 $(document).ready(function(){

$('#add').click(function(){
    	$('#myModal').modal('show');
    	$('#insert_form')[0].reset();
    	//$('#action').val('insert');
    	//$('#insert').val("DONATE");
    });

//$("#myModal").modal("show");
  //          $("#myBtn").click(function () {
    //            $("#myModal").modal("hide");
      //      });
});

</script>

</body>
</html>