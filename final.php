<?php
if (isset($_POST['contributor_id'])) {
   
   require 'connet.php';
  $output ='';
  $query="SELECT * FROM userview WHERE id='".$_POST['contributor_id']."'";
  $stmt=mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$query)) {

			header("Location: ../gopuravinayagar.php?error=sqlerror");
		    exit();
		}
		else{
           
            mysqli_execute($stmt);
            $result=mysqli_stmt_get_result($stmt);
          //  $output.='<div class="table_responsive">
        //     <table class="table table-bordered">';
            
            while ($row=mysqli_fetch_assoc($result)) {

              $output .='
                  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Contributor Details</h4>
        <button type="button" class="close" data-dismiss="modal" >&times;</button>
        
      </div>
      <div class="modal-body" id="Contributor_details">
               <div class="table_responsive">
                 <table class="table table-bordered">
              <tr>
                  <td width="30%"><lable>Name</lable></td>
                  <td width="70%">'.$row['name'].'</td>
              </tr>
              <tr>
               <td width="30%"><lable>e-mail id</lable></td>
                  <td width="70%" id="contri" name="ram">'.$row['email'].'</td>
              </tr>
              <tr>
               <td width="30%"><lable>Contact no.</lable></td>
                  <td width="70%">'.$row['contactnum'].'</td>
              </tr>
              
              <tr>
              <td width="30%"><lable>Address</lable></td>
                  <td width="70%">'.$row['address'].'</td>
              </tr>
              <tr>
              <td width="30%"><lable>Offering Item</lable></td>
                  <td width="70%">'.$row['item'].'</td>
              </tr>
              <tr>
              <td width="30%"><lable>About the item</lable></td>
                  <td width="70%">'.$row['aboutitem'].'</td>
              </tr>
              </table>
              </div>
              </div>
              <div class="modal-footer">
        
      <button type="button" class="btn btn-primary mr-auto view_service" id="'.$row["id"].'" >DO SERVICE</button>
	   <button type="button" class="btn btn-success mr-auto view_request" id="'.$row["id"].'" >I REQUEST</button>
	  

      <button type="button" class=" btn btn-warning" data-dismiss="modal" >CLOSE</button>
      </div>
      </div>
      </div>';

                   
            }
         //   $output .='</table></div> </div>';
            echo $output;
}
}
?>