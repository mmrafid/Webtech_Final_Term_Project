<?php

$connect = mysqli_connect("localhost", "root", "", "jobportal");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM job 
  WHERE name LIKE '%".$search."%'
  
 ";
}


else
{
 $query = "
  SELECT * FROM job where name = '%".$search."%'
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
	 <th class="type"> <b> <u> Job type </b> </u> </th>
     <th class="job"> <b> <u> Job </b> </u> </th>
     <th class="sal"> <b> <u> Salary </b> </u> </th>
     <th class="desc"> <b> <u> Description </b> </u> </th>
    </tr>
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