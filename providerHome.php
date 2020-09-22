<?php

session_start();

if(!isset($_SESSION['name']))
  {
	header('location:login.html');	
}

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<script src="https://kit.fontawesome.com/96c06ef8e8.js" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="providerHome.css">
	
	<title>Home::Job Provider</title>
</head>
<body>

<!-- head -->

<div class="head"> 

<div class="proPic"> 


<span> <img src="https://cdn.vox-cdn.com/thumbor/J8NnhqCNUDrJwz17AKK4qmu80TI=/0x0:2000x1333/1400x1400/filters:focal(941x74:1261x394):format(jpeg)/cdn.vox-cdn.com/uploads/chorus_image/image/55503687/spider_man_homecoming_DF_28509_R2_r.0.jpg" width="100%" /> </span>


</div>









<div class="idName"> 
<span><h2> <?php echo $_SESSION['name'];?> </h2></span>
</div>

</div>

<!-- edit -->

<div class="editProfile"> 

<a href="editProfileInfo.php"><i class="fas fa-user-edit"></i></a>

</div>




<!-- functionality -->
<section class="functionality">


<div class="functionalityTitle"> 

<h1> <span class="color1">PROVIDED</span> <span class="color2">SERVICES</span> </h1>

</div>

<div class="services">



<a href="postJob.html">
<div class="service">

<div class="serviceIcon">
<i class="fas fa-paste"></i>

</div>


<div class="serviceDesc">
<h2> Post a job </h2>
<p> Post a job to get the suitable employees for getting your job done with perfection </p>

</div>
</div>
</a>

<div class="service">

<div class="serviceIcon">
<i class="fas fa-street-view"></i>

</div>


<a href="employee.php">
<div class="serviceDesc">
<h2> Available employees </h2>
<p> Provides you freedom to choose from all employees for a better experiance with your job  </p>

</div>
</div>
</a>


<a href="jobs.php">
<div class="service">

<div class="serviceIcon">

<i class="fas fa-history"></i>
</div>

<div class="serviceDesc">
<h2> Your jobs </h2>
<p> Update the job criteria and remove the job if you've already found your employee </p>

</div>
</div>
</a>


</div>

</div></section>


<section class="footer">
<div class="footerDetails">

<span> <h3> All rights reserved by MMR inc. <br/> For more details, <a href="github.com"> CLICK HERE </a> </h3> </span>

</div>
</section>



	
</body>
</html>