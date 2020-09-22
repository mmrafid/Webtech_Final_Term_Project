<?php
include_once 'editProfileDb.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE employer set id='" . $_POST['id'] . "'name='" . $_POST['name'] . "', username='" . $_POST['username'] . "', email='" . $_POST['email'] . "' ,password='" . $_POST['password'] . "' ,image='" . $_POST['image'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM employer WHERE name='" . $_GET['name'] . "'");
$row= mysqli_fetch_array($result);
?>



<html>
<head>
<title>Update Employee Data</title>
</head>
<body>


<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employer List</a>
</div>


ID: <br>
<input type="id" name="id" class="ib" value="<?php echo $row['id']; ?>">
<input type="id" name="id"  value="<?php echo $row['id']; ?>">
<br>




Username: <br>
<input type="name" name="username" class="ib" value="<?php echo $row['username']; ?>">
<input type="name" name="username"  value="<?php echo $row['username']; ?>">
<br>




Name: <br>
<input type="name" name="name" class="ib" value="<?php echo $row['name']; ?>">
<input type="name" name="name"  value="<?php echo $row['name']; ?>">
<br>



Email:<br>
<input type="email" name="email" class="ib" value="<?php echo $row['email']; ?>">
<br>



Image:<br>
<input type="file" name="image" class="ib" value="<?php echo $row['image']; ?>">
<br>




<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>