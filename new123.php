<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WstoMenia</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 

<style>
body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
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

</button>
<a class="navbar-brand" href="#">Save Hunger</a>

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
