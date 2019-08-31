<html>
<head>
<style>
ul {
  padding-top: 15px;
    padding-bottom: 45px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
	background-color: rgb(251,252,251);	;
	position:right;
	list-style-type:none;
}

li {
  float: right;
}

li a {
  display: block;
  color: rgb(188,190,193);
  text-align: center;
  padding: 14px 16px;
}

li a:hover {
  color: #1abc9c !important;
  text-decoration:none;
}
button{
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
<ul>
<?php
        if (isset($_SESSION['userid'])) {

            echo'<li><a  href="#">Save Hunger</a></li>
			     <li><a href="#">Waste Management</a></li>
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
        	echo 
                 ' 
			    
                 
				  
				  <li><a href="signup.html">Register</a></li>
				  <li><button id="add"> Login</button></li>
				  <li><a href="#ourservices">OurServices</a></li>
				  <li><a href="#">Waste Management</a></li>
				  <li><a href="#aboutus`">Aboutus</a></li>
				 ';
				  
				 
				  echo '<script language="javascript">';
                  echo 'alert("Logged out")';
                  echo '</script>';
        }
        ?>
  </ul>
</div>
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
