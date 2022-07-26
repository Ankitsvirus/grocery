<?php
	session_start();
	if(!isset($_SESSION['uname']))
		header('location:http://localhost/grocery/login.php');
	
?>
<?php if(isset($_GET['uname'])){
				$uname=$_GET['uname'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="delete from user where uname='$uname'";
				$result=mysqli_query($con, $q);
			}

	if($result==1)
	{
		session_destroy();
		header('Refresh:2; url=index.php');
		echo "<script type='text/javascript'>alert('Your account hasbeen sucessfully deleted !!!')</script>";
		
	}
	else
	{
		 header('Refresh:2; url=index.php');
		 echo "<script type='text/javascript'>alert('you can't delete this account !!!')</script>";
		//header('location:http://localhost/grocery/login.php');
	}
			
?>
