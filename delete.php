<?php
require 'connet.php';

if(isset($_POST["id"]))
{
foreach($_POST["id"] as $id)
{
$sql="DELETE FROM wholedata WHERE id ='".$id."'";
mysqli_query($conn,$sql);
}

}


?>