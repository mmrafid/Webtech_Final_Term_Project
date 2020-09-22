<?php

session_start();

$con = mysqli_connect('auth-db180.hostinger.com' , 'u943645959_Teamjobportal' , 'Fahim@Mushfiq@Ashfaq123');

mysqli_select_db($con, 'u943645959_jobportal' );

$name = $_POST['name'];
$password = $_POST['password'];

$s = "select * from employer where name = '$name' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['name'] = $name;
	header('location:providerHome.php');
	
}else{
	header('location:login.html');   
	
	
	
}


?>