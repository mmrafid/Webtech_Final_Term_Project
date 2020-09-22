<?php
include_once 'editProfileDb.php';
$result = mysqli_query($conn,"SELECT * FROM employer");
?>
<!DOCTYPE html>
<html>
<head>

<title>Update employer data</title>
</head>
<body>
<section class="data">

<div>
<input class="ib" id="id" type="id" name="id" placeholder="YOUR ID"/>
</div>

<div>
<input class="ib" id="name" type="name" name="name" placeholder="YOUR name"/>
</div>

<div>
<input class="ib" id="name" type="name" name="username" placeholder="YOUR ID"/>
</div>

<div>
<input class="ib" id="email" type="email" name="email" placeholder="YOUR ID"/>
</div>

<div>
<input class="ib" id="photo" type="file" name="image" placeholder="YOUR ID"/>
</div>

<div>
<td class="ib">Action</td>
</div>

<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<section class="<?php if(isset($classname)) echo $classname;?>">
<div><?php echo $row["id"]; ?></div>
<div><?php echo $row["name"]; ?></div>
<div><?php echo $row["username"]; ?></div>
<div><?php echo $row["email"]; ?></div>
<div><?php echo $row["image"]; ?></div>
<div class="btn"><a href="editProfile.php?name=<?php echo $row["name"];?>" > Update </a></div>
</section>
<?php
$i++;
}
?>
</section>
</body>
</html>