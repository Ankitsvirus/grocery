<?php
	session_start();
	if(!isset($_SESSION['uname']))
		header('location:http://localhost/grocery/login.php');
	
?>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if (session_status !== PHP_SESSION_ACTIVE) {
		session_start();
	}
?>
<?php
	$uid=$_POST['uid'];
	$uname=$_POST['uname'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$password=$_POST['password'];
	$phone_no=$_POST['phone_no'];
	$address=$_POST['address'];
	$location=$_POST['location'];

	
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');
	
	
	$status=mysqli_query($con, "UPDATE user SET uname='$uname',fname='$fname',lname='$lname',password='$password',phone_no='$phone_no',address='$address',location='$location' WHERE uid='$uid'");

	if($status==1)
	{
		
		header('Refresh:2; url=login.php');
		 echo "<script type='text/javascript'>alert('profile updated.. please login again')</script>";
		//header('location:http://localhost/grocery/index.php');
	}
	else
	{
		 header('Refresh:2; url=registration_page.php');
		 echo "<script type='text/javascript'>alert('updation Failed!!!')</script>";
		//header('location:http://localhost/grocery/login.php');
	}
?>