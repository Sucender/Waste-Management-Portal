<?php 

/**echo $ip;
$location=file_get_contents('http://ip-api.com/json/'.$ip);
$locdata=json_decode($location);
echo"<pre>";
print_r($locdata);**/
if(!empty($_SERVER["HTTP_CLIENT_IP");)
{
	
$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];

}
else if(!empty($IP=$_SERVER["HTTP_X_FORWARDER_FOR"])){

$IP=$_SERVER["HTTP_X_FORWARDED_FOR"];
}
else{

$IP=$_SERVER["REMOTE_ADDR"];

}
echo $IP;

?>















