<?php
	$pid=$_POST['pid'];
	$image=$_FILES['image']['name'];
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');
	
	$target = "img/".basename($_FILES['image']['name']);
	
	$status=mysqli_query($con, "UPDATE product SET image='$image' WHERE pid='$pid'");
	
	move_uploaded_file($_FILES['image']['tmp_name'],$target);
	header("location:viewcategory.php");
	//mysqli_close($con);
?>
