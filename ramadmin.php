<?php
session_start();
require 'connet.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				
</head>
<body>
	<?php
$query="SELECT * FROM userview;";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt,$query)) {

			header('Location: ../profile.php?error=sql_error');
		    exit();
		}
		else{
			//mysqli_stmt_bind_param($stmt,"s",$_SESSION['uemail']);
            mysqli_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result)>0) {
            	?>
            	<!DOCTYPE html>
            	<html>
            	<head>
            		<title></title>
            	</head>
            	<body>
            	<h4 class="ml-4">REWARDS DETAILS:</h4>
				<div class="container" style="width: 700px;">
			       
                       <div class="table_responsive">
                 <table class="table table-bordered">

                 	<th>volunteer id</th>
                 	<th>volunteer_name</th>
                 	<th>contact no.</th>
                 	<th>address</th>
                 	<th>services done</th>
                 	<?php while ($row=mysqli_fetch_assoc($result)) {
                 	 ?>
                 	<tr id="<?php  echo $row['uid'];?>">
                 	<td><?php echo $row['id']?></td>
                 	<td> <?php echo $row['name'] ?></td>
                 	<td> <?php echo $row['contactnum'] ?></td>
                 	<td> <?php echo $row['address'] ?></td>
                 	<td> <?php echo $row['servicedone'] ?></td>
                 	
                     <?php }
                     ?>
                 </tr>
                 </table>
          </div>
          </div>
            	</body>
            	</html>
         <?php   }

		}
 
                             
               	
              


			?>

           

		
	
</body>
</html>