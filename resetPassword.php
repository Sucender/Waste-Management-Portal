<?php
	
	if(isset($_POST['newpass']))
	{
		$newpass =$_POST['newpass'];
		
	

	if (isset($_GET['email']) && isset($_GET['token'])) {
		$conn = new mysqli('localhost', 'root', '', 'forgetpass');

		$email = $conn->real_escape_string($_GET['email']);
		$token = $conn->real_escape_string($_GET['token']);
		
		$sql = $conn->query("SELECT id FROM users WHERE
			uemail='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()
		");
		
		
		if ($sql->num_rows > 0) {
			
			$newPasswordEncrypted = password_hash($newpass, PASSWORD_BCRYPT);
			$conn->query("UPDATE users SET token='', upwd = '$newPasswordEncrypted'
				WHERE uemail='$email'
			");

			echo "Your New Password Is reseted";
			exit();
		} else
			echo"sorry something went wrong!!!!";
			exit();
	} else {
		echo"sorry something went wrong!!!!";
		exit();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>Reset Password</title>
  <style type="text/css">
 	.fa{
        position: absolute;
        left: 562px;
        bottom: 357px;
      }
 	
 	.form-group {
  overflow: hidden;
  margin-bottom: 20px; }

  .form-input {
  width: 100%;
  border: 1px solid #ebebeb;
  border-radius: 5px;
  
  padding: 17px 20px;
  box-sizing: border-box;
  font-size: 14px;
  font-weight: 500;
  color: #222; }

  .container {
  width: 400px;
  position: relative;
  margin: 0 auto;
  padding:200px }

  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  height: 40px;
  width: 100px;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
 </style>

</head>
<body>
<div class="container">
	<h2>Reset Your Password</h2>
<form method="post" onsubmit="return Validate()"  >
<div class="form-group">
              <input type="password" class="form-input" name="newpass" id="password" placeholder="Password" required />
                <i class="fa fa-eye" id="eye"></i>
                            
               </div>
<div class="form-group">
                  <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" required />
                            
             </div>
<input type="submit" class="button" value="Submit">
</form>
</div>

<script type="text/javascript">

  var x = document.getElementById("password");
  var y = document.getElementById("re_password");
  var eye = document.getElementById("eye");
  eye.addEventListener('click',myFun);
  function myFun() {
    eye.classList.toggle('fa-eye-slash');
     if (x.type === "password" && y.type === "password") {
    x.type = "text";
    y.type = "text";

  } else {
    x.type = "password";
    y.type = "password";

  }
  }
</script>
<script type="text/javascript">
    function Validate() {
    	
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("re_password").value;
        if (password != confirmPassword) {
          alert("Passwords do not match");
           
            return false;
        }
        else{ 

        return true;
    }	
}
</script>


</body>
</html>

