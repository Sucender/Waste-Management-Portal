<?php
session_start();
require 'connet.php';

  $query="SELECT * FROM userview;";
                $stmt=mysqli_stmt_init($conn);
               if (!mysqli_stmt_prepare($stmt,$query)) {

                   header("Location: error=sqlerror2");
                   exit();
                }
                else{
                     
                      $result=mysqli_execute($stmt);
                      $result=mysqli_stmt_get_result($stmt);
            
                  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
	
.card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
.card:hover{
	-webkit-box-shadow: -1px 9px 40px -12px rgb(0,0,0,0.75);
	-moz-box-shadow: -1px 9px 40px -12px rgb(0,0,0,0.75);
	box-shadow: -1px 9px 40px -12px rgb(0,0,0,0.75);
}
.fa{
position:absolute;
left:250px;
bottom:70px;
}
.user-img img {
	height:120px;
	width:120px;
}
.user-img {
 margin-top:-60px;
 margin-bottom:45px;
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
  
</style>


</head>
<body>
<div class="form-inline">
<label for="search" class="font-weight-bold lead text-dark">Search Post</label> &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="search" id="search_card" class="form-control form-control-lg border border-dark mt-2" style="width:500px" placeholder="place/name of material">
</div>
	<div align="right">
		<button type="button" name="add" id="add"  class="btn btn-warning">Post</button>
	</div>
  
<div class="container-fluid" id="Details">
	<div id="refer" class="row">
		<?php
		while ($row=mysqli_fetch_assoc($result)) {
			if (isset($_SESSION['serviceid'])) {
				# code...
			
			if ($row['id']==$_SESSION['serviceid']) {
				# code...
	
			
			?>
    <div  class=" col-3-md ml-1 mr-2 " >
				<div id= class="card"  style="width: 18rem;">

					<div style="filter:grayscale(1); opacity: 0.6;">
					<?php echo '<img height="300" width="300" src="data:image;base64,'.$row['image'].'" class="card-img-top" alt="noimage" >';?>
				</div>
					<div style="filter:grayscale(1); opacity: 0.6;">
					<div id="ram" class="card-body">
						<h5 class="card-title"><?php echo $row['name'] ?></h5>
						<p class="card-text"><?php echo $row['aboutitem'] ?></p>
						<button type="submit" class="btn btn-primary view_data" id="<?php echo $row['id']; ?>"disabled>View Details</button></div>
						<div class="card-img-overlay text-center" style="margin-top: -150px"  ><img src="11.gif" ></div>
					</div>
				
			</div>
		</div>
		      

        <?php
		}else{
			?>

              <div  class=" col-3-md ml-1 mr-2 " >
				<div id= class="card"  style="width: 18rem;">
					<?php echo '<img height="300" width="300" src="data:image;base64,'.$row['image'].'" class="card-img-top" alt="noimage" >';?>
					<div id="ram" class="card-body">
						<h5 class="card-title"><?php echo $row['name'] ?></h5>
						<p class="card-text"><?php echo $row['aboutitem'] ?></p>
						<button type="submit" class="btn btn-primary view_data" id="<?php echo $row['id']; ?>">View Details</button>
					</div>
				</div>
			</div>

	<?php	
}
}else{
	?>
       <div  class=" col-3-md ml-1 mr-2 " >
				<div id= class="card"  style="width: 18rem;">
					<?php echo '<img height="300" width="300" src="data:image;base64,'.$row['image'].'" class="card-img-top" alt="noimage" >';?>
					<div id="ram" class="card-body">
						<h5 class="card-title"><?php echo $row['name'] ?></h5>
						<p class="card-text"><?php echo $row['aboutitem'] ?></p>
						<button type="submit" class="btn btn-primary view_data" id="<?php echo $row['id']; ?>">View Details</button>
					</div>
				</div>
			</div>
<?php
}
}
		?>
		
	</div>
</div>

<script>
	$(document).ready(function(){

		$(document).on("keyup","#search_card",function(){

			var search=$(this).val();
			$.ajax({
				url:"search.php",
				method:"post",
				data:{search:search},
				success:function(data){
					$('#refer').html(data);
        	 		animate();
					
				}

			});

		});
	

			$(document).ready(function(){


               $('.col-3-md ').hover(
                     function(){
                     	$(this).animate({
                     		marginTop: "-=1%",
                     	},200);

                     },

                     function(){
                     	$(this).animate({
                     		marginTop: "0%"
                     	},200);
                     }
               	);
			});
		</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>    
<div id="dataModal" class="modal fade">
	
	
</div>   


<div class="vas" style="padding: 200px 100px">
	<!--<button type="button" class="btn btn-default btn-lg float-right" id="myBtn">Login</button>
   
  <!-Modal -->
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
							<form action="login.php" method="POST"  id="insert_form1">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Enter email" required>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Enter password" required>
									<i class="fa fa-eye"></i>
								</div>
								<button type="submit" name="submit" id="mylogin" class="btn-success"><b>Login</b></button>
								
							</form>
						</div>
					</div>
						<div class="modal-footer">
                        <div class="col-12 forgot">
             				 <a href="signup.html" style='color:white ;font-weight: bolder;'><i>Forgot Password?</i></a></div>
            			</div>
                		</div>
			</div>
		</div>
 	</div>
 </div>
 </div>
 <!--<script>
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
</script>-->





<div id="add_data_Modal" class="modal fade" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">CONTRIBUTE.....</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body">
				<form action="insert.php" method="POST" id="insert_form" enctype="multipart/form-data">
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
					<input type="text" name="contactnum" class="form-control" id="contact" placeholder=" your contact no.name" required>
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
					<input type="file" name="image" id="image" class="form-control" required>
				</div>	
				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert">
				</div>
				<div class="form-group">
					<br><input type="submit" name="insert" id="insert" class=" btn btn-success" value="DONATE" />
				</div>
				</form>
			</div>
			<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
			</div>
			
		</div>
	</div>

	
</div>      


<script type="text/javascript">
	$(document).ready(function(){
	
               
		$(document).on("click",".view_data",function(){
              <?php
	if (isset($_SESSION['userid'])) {
		if (isset($_SESSION['update'])) {
	?>
	alert('please update your profile');
	window.location.href="vp.php";

			
			<?php
		}else{
			?>
			var contributor_id = $(this).attr("id");

			$.ajax({
				url:"final.php",
				method:"post",
				data:{contributor_id:contributor_id},
				success:function(data){
					$('#dataModal').html(data);
					$('#dataModal').modal("show");
					
				}

			});

			<?php
		}

		}else{
		?>
			        alert('login to view');
			        $('#myModal').modal("show");
			       
	<?php
}
	?>
		});
		
		
	    	
    

    $('#add').click(function(){
    <?php	
	if (isset($_SESSION['userid'])) {
	?>
    	$('#add_data_Modal').modal('show');
    	$('#insert_form')[0].reset();
    	$('#action').val('insert');
    	$('#insert').val("DONATE");
    	<?php
    }else{
    ?>
             alert('login to contribute');
             $('#myModal').modal("show");

        <?php
}
	?>     
    });


$(document).on("click",".view_service",function(){

      if (confirm('are u sure to take chance')) {
      	if (confirm('your details will be sent to contributor')) 
      	{
           var contributor_id = $(this).attr("id");
             alert(contributor_id);
      		var content = document.getElementById("contri").innerText;
      	$.post("vetri.php",{content:content,contributor_id:contributor_id});
      	      //$.post("kannimoolaganapathy.php",{contributor_id:contributor_id});
      
      	<?php

       $_SESSION['time']=time();
		   
           

          ?>
      		    	
      	}

        }
    
          window.location.href = 'vp.php';
});

       function animate()
       {
       	 $('.col-3-md ').hover(
                     function(){
                     	$(this).animate({
                     		marginTop: "-=1%",
                     	},200);

                     },

                     function(){
                     	$(this).animate({
                     		marginTop: "0%"
                     	},200);
                     }
               	);
       }

    $('#insert_form').submit(function(event){
 
 $('#add_data_Modal').modal("hide");
 alert("you details will be update soon");

        event.preventDefault();
        var image_name = $('#image').val();
        if (image_name == '') {
        	alert("please insert image");
        }
        else{

        	 $.ajax({
        	 	url:"insert.php",
        	 	method:"POST",
        	 	data:new FormData(this),
        	 	contentType:false,
        	 	processData:false,
        	 	success:function(data){

        	 		
        	 		$('#refer').html(data);
        	 		animate();
					
        	 	}
        	 });
        }

    });
    

	});
	$(document).on("click", ".view_request",function(){
		if(confirm("do you want place order")){
			var id=$(this).attr("id");
			alert(id);
			$.post("vetri.php",{contributor_id:id});
		}
	});
</script>  
   