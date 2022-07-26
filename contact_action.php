<?php

	if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	$subject=$_POST['subject'];
	$comments=$_POST['comments'];

	if($subject==""){
		header('Refresh:2; url=contact.php');
		echo "<script type='text/javascript'>alert('Please choose a subject...')</script>";
	}
	else{
	$con=mysqli_connect('localhost','root');
	if(!$con){
    die("data base connection failed :" . mysqli_error());
    }
	$db_select=mysqli_select_db($con,'grocery');
	if (!$db_select){

    die("database selection failed:" . " " . mysqli_error());
    }
		
		
	$q="INSERT INTO feedback(name,email,contact_no,subject,comments) values('$name','$email','$contact_no','$subject','$comments')";
	
	$status=mysqli_query($con,$q);
	if($status==1)
	{
		
		header('Refresh:2; url=contact.php');
		 echo "<script type='text/javascript'>alert('Your Message has been succeaafully sent')</script>";
		//header('location:http://localhost/grocery/index.php');
	}
	else
	{
		 header('Refresh:2; url=contact.php');
		 echo "<script type='text/javascript'>alert('Message sending Failed!!!')</script>";
		//header('location:http://localhost/grocery/login.php');
	}
	
	}
	
}
?>
