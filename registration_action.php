<?php

	if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$phone_no=$_POST['phone_no'];
	$address=$_POST['address'];
	$location=$_POST['location'];
	
	
	$con=mysqli_connect('localhost','root');
	if(!$con){
    die("data base connection failed :" . mysqli_error());
    }
	$db_select=mysqli_select_db($con,'grocery');
	if (!$db_select){

    die("database selection failed:" . " " . mysqli_error());
    }
		
		
	$q="INSERT INTO user(fname,lname,uname,password,phone_no,address,location) values('$fname','$lname','$uname','$password',$phone_no,'$address','$location')";
	//echo $q;
	$status=mysqli_query($con,$q);
	
	if($status==1)
	{
		
		header('Refresh:2; url=login.php');
		 echo "<script type='text/javascript'>alert('You have successfully registred. Now you can login...')</script>";
		//header('location:http://localhost/grocery/index.php');
	}
	else
	{
		 header('Refresh:2; url=registration_page.php');
		 echo "<script type='text/javascript'>alert('Registration Failed!!!')</script>";
		//header('location:http://localhost/grocery/login.php');
	}
	

	
	}
?>
