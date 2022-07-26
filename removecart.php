<?php
	session_start();
	if(!isset($_SESSION['uname']))
		header('location:http://localhost/grocery/login.php');
?>
<?php if(isset($_GET['cart_id'])){
				$cart_id=$_GET['cart_id'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="delete from cart where cart_id=$cart_id";
				$result=mysqli_query($con, $q);
			}

	if($result==1)
	{
		echo "<body onload='history.go(-1);' > <script type='text/javascript'>alert('1 item Deleted...')</script> </body>";
		
	}
	else
	{
		 header('Refresh:2; url=login.php');
		 echo "<script type='text/javascript'>alert('Failed!!!')</script>";
		
	}
			
?>