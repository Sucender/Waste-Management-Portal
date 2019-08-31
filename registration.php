<?php include('server.php')?>

<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>
<div class="container">
<div class="header">
<h2>Registration</h2>
</div>
<form action="registration.php" method="post">
<?php include(errors.php)?>
<div>
<label for="username">UserName</label>
<input type="text" name="username" required>
</div>
<div>
<label for="email">Email</label>
<input type="email" name="email" required>
</div>
<div>
<label for="password">Password</label>
<input type="password" name="password" required>
</div>
<div>
<label for="password">Confirm Password</label>
<input type="password" name="password_2" required>
</div>
<button type="submit">Submit</button>
<p>Already a user<a href="logins.php"><b>LogIn</b></a></p>
</form>


</div>
</div>




</body>