<?php

session_start();
unset($_SESSION['userid']);
header('Location: ' .'?userlogout');
if(isset($_SERVER['HTTP_REFERER'])) {
 header('Location:sihmain.php');  
} else {
 header('Location: sihmain.php');  
}

?>
