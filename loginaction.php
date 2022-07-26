<?php

	session_start();
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$captcha=$_POST['captcha'];
	$captchaif=$_POST['captchaif'];
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');
	$q="select * from user where uname='$uname' and password='$password'";
	$result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	if($captchaif!=$captcha)
		{
		 header('Refresh:2; url=login.php');
		 echo "<script type='text/javascript'>alert('Invalid Captcha!')</script>";
		//header('location:http://localhost/grocery/login.php');
	}
	if($num==1 && $captchaif==$captcha)
	{
		$_SESSION['password']=session_id();
		$_SESSION['uname']=$uname;
		header('Refresh:2; url=index.php');
		 echo "<script type='text/javascript'>alert('Login successfull!')</script>";
		//header('location:http://localhost/grocery/index.php');
	}
	else
	{
		 header('Refresh:2; url=login.php');
		 echo "<script type='text/javascript'>alert('Login Failed!')</script>";
		//header('location:http://localhost/grocery/login.php');
	}
	
?>