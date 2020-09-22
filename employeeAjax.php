<?php

include "searchDb.php";

if (isset($_POST['search'])) {

   $name = $_POST['search'];

   $Query = "SELECT * FROM job WHERE name = '$name'";

   $ExecQuery = MySQLi_query($con, $Query);

   echo '
<ul>
   ';
   
   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
   
   <li onclick='fill("<?php echo $Result['*']; ?>")'>
   <a>
   
       <?php echo $Result['*']; ?>
   </li></a>
   
   <?php
}}
?>
</ul>
