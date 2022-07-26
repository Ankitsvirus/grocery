<?php
	session_start();
	$name=$_POST['name'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');
	$q="select * from admin where name='$name' and password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($num==1)
	{
		$_SESSION['name']=$name;
		header('Refresh:2; url=index.php');
		echo "<script type='text/javascript'>alert('Login Successfull !!!')</script>";
	}
	else
	{
		header('Refresh:2; url=login.php');
		echo "<script type='text/javascript'>alert('Please Enter a valid Username & password !!!')</script>";
	}	
?>