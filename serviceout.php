<?php
session_start();
print_r($_POST);
if (isset($_POST['id'])) {
	

	   
                      $otp=rand(100000,999999);
                      $_SESSION['otp']=$otp;
                      $to=$_SESSION['servicemail'];
					  $too=$_SESSION['username'];
                      $subject="please enter and verify the OTP";
					  $message="http://localhost/webchat/verifyotp.php";
               mail($to,$subject,$message,'From:subhakumar06597@gmail');
                     mail($too,"your otp is..",$otp,"From:subhakumar06597@gmail.com");
                     // mail($_SESSION['uemail'],"your OTP is..", $otp);
                 
                


}
else{
	$to=$_SESSION['serviceid'];
                      $subject="SERVICE CANCELLED";
                     $message="The volunteer has cancelled the service/delayed too much to reach ";
                     mail($to, $subject, $message,'From:subhakumar06597@gmail');

	unset($_SESSION['serviceid']);
                        unset($_SESSION['servicemail']);
}