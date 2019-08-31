<?php
if (isset($_POST['email'])) {
        $conn = new mysqli('localhost', 'root', '', 'productsection');

        $email = $conn->real_escape_string($_POST['email']);

        $sql = $conn->query("SELECT uid FROM logindata WHERE uemail='$email'");

        if ($sql->num_rows > 0) {

            $token = "poiuzfgfhjk136";
            $token = str_shuffle($token);
            $token =substr($token,0,10);

	        $conn->query("UPDATE logindata SET token='$token', 
                      tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                      WHERE uemail='$email'
            ");

	        
	        $subject="Reset Password";

	        $body="
                http://localhost/webchat/resetPassword.php?email=$email&token=$token
                
                ";
            
          if (mail($email,$subject,$body,'From:subhakumar06597@gmail.com'))
                exit(json_encode(array("status" => 1, "msg" => 'Please Check Your Email Inbox!')));
            else
                exit(json_encode(array("status" => 0, "msg" => 'Something Wrong Just Happened! Please try again!')));
	        
        } else
            exit(json_encode(array("status" => 0, "msg" => 'Please Check Your Inputs!')));
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center" >
            <div class="col-md-6 col-md-offset-3" style="border: 1px solid" align="center">
                <h4 style="margin:20px">Please Enter your email address</h4>
                <input class="form-control" id="email"  placeholder="Your Email Address"><br>
                <input type="button" class="btn btn-primary"  value="Reset Password">
                <br><br>
                <p id="response"></p>
            </div>
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        var email = $("#email");

        $(document).ready(function () {
            $('.btn-primary').on('click', function () {
                if (email.val() != "") {
                    email.css('border', '1px solid green');

                    $.ajax({
                       url: 'forgotPassword.php',
                       method: 'POST',
                       dataType: 'json',
                       data: {
                           email: email.val()
                       }, success: function (response) {
                            if (!response.success)
                                $("#response").html(response.msg).css('color', "red");
                            else
                                $("#response").html(response.msg).css('color', "green");
                        }
                    });
                } else
                    email.css('border', '1px solid red');
            });
        });
    </script>
</body>
</html>
 