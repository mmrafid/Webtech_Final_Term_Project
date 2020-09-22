<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Your Jobs </title>
	
	<link rel="stylesheet" href="jobs.css">
	
</head>
<body>
	

<?php


$servername="auth-db180.hostinger.com";
$username="u943645959_Teamjobportal";
$dbpassword="Fahim@Mushfiq@Ashfaq123";
$dbname="u943645959_jobportal";


$conn = new mysqli($servername, $username, $dbpassword, $dbname);

$output = '';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM job";
$result = $conn->query($sql);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <center> <div class="table-responsive">
   <table class="table">
    <tr>
     <th class="id"> <b> <u> Id <b> </u> </th>
	 <th class="type"> <b> <u> Job type </b> </u> </th>
     <th class="job"> <b> <u> Job </b> </u> </th>
     <th class="sal"> <b> <u> Salary </b> </u> </th>
     <th class="desc"> <b> <u> Description </b> </u> </th>
    </tr>
	</center>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td> <center> '.$row["id"].' </center> </td>
	<td> <center> '.$row["type"].' </center> </td>
    <td> <center> '.$row["name"].' </center></td>
    <td> <center> '.$row["salary"].' </center> </td>
    <td> <center> '.$row["description"].' </center> </td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'oopss ... No data found...';
}
?>

</body>
</html>
