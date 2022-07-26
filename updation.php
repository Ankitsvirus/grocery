<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php
	$pid=$_POST['pid'];
	$category=$_POST['category'];
	$pname=$_POST['pname'];
	$dom=$_POST['dom'];
	$bbd=$_POST['bbd'];
	$net_weight=$_POST['net_weight'];
	$price=$_POST['price'];
	$discount=$_POST['discount'];
	$net_price=$_POST['net_price'];
	$stock=$_POST['stock'];
	$details=$_POST['details'];
	
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');
	
	
	$status=mysqli_query($con, "UPDATE product SET category='$category',pname='$pname',dom='$bbd',net_weight='$net_weight',price='$price',discount='$discount',net_price='$net_price',stock='$stock',details='$details',entry_time=now() WHERE pid='$pid'");

	header("location:viewcategory.php");
	//mysqli_close($con);
?>