<?php 

session_start();

$servername="localhost";
$username="root";
$dbpassword="";
$dbname="jobportal";

$conn=mysqli_connect($servername,$username,$dbpassword,$dbname);
if(!$conn){
	
	die("could not connect:".mysqli_connect_error());
}
else{
	$id=test_input($_POST['id']);
	$type=test_input($_POST['type']);
	$name=test_input($_POST['name']);
	$salary=test_input($_POST['salary']);
	$description=test_input($_POST['description']);
	
	$sql="insert into job (id,name,salary,description,permission) values ('$id','$name','$salary','$description','request')";
	
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