<?php

$connect = mysqli_connect('auth-db180.hostinger.com' , 'u943645959_Teamjobportal' , 'Fahim@Mushfiq@Ashfaq123' , "u943645959_jobportal");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM jobseeker_reg 
  WHERE username LIKE '%".$search."%'
  
 ";
}


else
{
 $query = "
  SELECT * FROM jobseeker_reg where username = '%".$search."%'
 ";
}

$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table">
    <tr>
     <th class="id"> <b> <u> Id <b> </u> </th>
	 <th class="type"> <b> <u> Username </b> </u> </th>
     <th class="job"> <b> <u> Email </b> </u> </th>
     <th class="sal"> <b> <u> Phone Number </b> </u> </th>
     <th class="desc"> <b> <u> City </b> </u> </th>
	 <th class="desc"> <b> <u> Address </b> </u> </th>
	 <th class="desc"> <b> <u> Qualification </b> </u> </th>
	 <th class="desc"> <b> <u> Name </b> </u> </th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td> <center> '.$row["id"].' </center> </td>
	<td> <center> '.$row["username"].' </center> </td>
    <td> <center> '.$row["email"].' </center></td>
    <td> <center> '.$row["PhoneNumber"].' </center> </td>
    <td> <center> '.$row["city"].' </center> </td>
	<td> <center> '.$row["Address"].' </center> </td>
	<td> <center> '.$row["Qualification"].' </center> </td>
	<td> <center> '.$row["Name"].' </center> </td>
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