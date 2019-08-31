<?php
session_start();

if(isset($_SESSION['username'])){
	$_SESSION['msg']="you must log in first to view this page";
	header("location:logins.php");
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header("location: logins.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>HomePage</title>
</head>
<body>
<h1> This is the home page</h1>
<?php
if(isset($_SESSION['success'])):?>
<div>
<h3>
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>
//user logs in print information about him
<?php if(isset($_SESSION['username'])):?>
<h3> WELCOME<strong><?php echo $_SESSION['username'];?></strong></h3>
<button><a href="indexw.php?logout=1"></a></button>
<?php endif ?>


</body>
</html>