<html>
<head>
<title>multiple upload</title>
</head>
<body>
<form action="#" enctype="multipart/form-data" method="post">
<input type="file" name="img[]" multiple="multiple" />
<input name="submit" type="submit" />
</form>
<?php
mysql_connect("localhost","root","");
mysql_select_db("multiple");
if(isset($_POST['submit'])){
$filename = $_FILES['img']['name'];
$tmpname = $_FILES['img']['tmp_name'];
$filetype = $_FILES['img']['type'];
//$filesize = $_FILES['img']['size'];
for($i=0; $i<=count($tmpname)-1; $i++){
$name = addslashes($filename[$i]);
$tmp = addslashes(file_get_contents($tmpname[$i]));
mysql_query("Insert into img(name,image) values('$name','$tmp')");
}
}
$res=mysql_query("SELECT * from img");
while($row = mysql_fetch_array($res)){
	//echo'<img src="data:image/jpeg;base64,.base64_encode($row['image'])."width="250" height="250">';
     echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="250" height="250">';

	}
?>
</body>
</html>
