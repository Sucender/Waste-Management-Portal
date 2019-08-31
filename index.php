<!DOCTYPE html>
<html>
<head>
<title>WEBCHAT</title>
<link href="style.css" type="text/css" rel="stylesheet" >
</head>
<body>
<div id="main">
<div id="info">
<h2>login here</h2>
<form action ="login.php" method="post">
<label><b>username</b></label>
<input type="text" name="uname" placeholder="Usename"><br><br>
<label><b>Password</b></label>
<input type="text" name="pass" placeholder="Password"><br><br>
<button style="background-color:#657ed;color: white" type="submit"><b> Login</b>
</button>
</form>
<form action="signup.php" method="post">
<h2>Do not have an  account sign up here</h2>
<label>Username:</label>
<input type="text" name="uname" placeholder="Username"><br>
<br>
<label>E-mailAdd:</label>
<input type="text" name="Email" placeholder="Email"><br>
<br>
<label>Password:</label>
<input type="text" name="Password" placeholder="Password">
<br><br>
<button style="background-color:#657ed;color: white;" type="submit"><b> Signup</b>
</button>
</form>
</div>
</div>



</body>
</html>