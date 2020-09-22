
<?php 

session_start();

$servername="auth-db180.hostinger.com";
$username="u943645959_Teamjobportal";
$dbpassword="Fahim@Mushfiq@Ashfaq123";
$dbname="u943645959_jobportal";

$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$conn){
	
	die("could not connect:".mysqli_connect_error());
}
else{
	$id=test_input($_POST['id']);
	$name=test_input($_POST['name']);
	$username=test_input($_POST['username']);
	$email=test_input($_POST['email']);
	$password=test_input($_POST['password']);
	
	$sql="insert into employer (id,name,username,email,password) values ('$id','$name','$username','$email','$password')";
	
	if(mysqli_query($conn,$sql)){
		echo "Info inserted...";
	}
	else{
		echo "Failed Inserting info...";
	}
	mysqli_close($conn);
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}



?>

















