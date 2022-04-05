<?php 
if(isset($_SERVER['HTTP_HOST']) && $_SERVER['HTTP_HOST']=='localhost'){
	$conn=new mysqli("localhost","root","","db_mycranium");
}
else{
	$conn=new MySQLi("vps.Softwarebss.com","softwarebss_crenium","Crenium@2021","softwarebss_crenium");
}
if($conn->connect_errno){
	echo "connection failed";
}
date_default_timezone_set('Asia/Kolkata');
?>
