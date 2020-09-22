<?php
$servername="auth-db180.hostinger.com";
$username="u943645959_Teamjobportal";
$dbpassword="Fahim@Mushfiq@Ashfaq123";
$dbname="u943645959_jobportal";

// Create connection
$conn = new mysqli($servername, $username, $dbpassword , $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>