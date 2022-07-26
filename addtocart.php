<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		//header('location:http://localhost/grocery/login.php');
		header('Refresh:2; url=login.php');
		 echo "<script type='text/javascript'>alert('You hvae to login first!')</script>";
	}	
?>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if (session_status !== PHP_SESSION_ACTIVE) {
		session_start();
	}
?>
<?php if(isset($_GET['addtocart_id'])){
				$addtocart_id=$_GET['addtocart_id'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$uname=$_SESSION['uname'];
				$q="select * from user where uname='$uname'";
				$result=mysqli_query($con, $q); //or die(mysqli_error($con));
				$num=mysqli_num_rows($result);
				
				$q2="select * from product where pid=$addtocart_id";
				$result2=mysqli_query($con, $q2); //or die(mysqli_error($con));
				$num2=mysqli_num_rows($result2);
			}

				//echo $q;
				//echo $_SESSION['uname'];
				
				//header('location: viewcategory.php');
			

				
				
				$row=mysqli_fetch_array($result); 
				$uid=$row['uid'];
				$uname=$row['uname'];
				
				$row2=mysqli_fetch_array($result2);
				$pid=$row2['pid'];
				$pname=$row2['pname'];
				$net_weight=$row2['net_weight'];
				$net_price=$row2['net_price'];
				
				$q3="INSERT INTO cart(uid,uname,pid,pname,net_weight,price) values($uid,'$uname',$pid,'$pname','$net_weight',$net_price)";
				
				$status=mysqli_query($con,$q3);
	
	if($status==1)
	{
		echo "<body onload='history.go(-1);' > <script type='text/javascript'>alert('1 item added...')</script> </body>";
		
		//header("location:javascript://history.go(-1)");
		
		//header('Refresh:2; url=action.php');
		 //echo "<script type='text/javascript'>alert('1 item added...')</script>";
		//header('location:http://localhost/grocery/index.php');
	}
	else
	{
		 header('Refresh:2; url=login.php');
		// echo "<script type='text/javascript'>alert('Failed!!!')</script>";
		//header('location:http://localhost/grocery/login.php');
	}
				//echo $_SESSION['uname'];
				
				//header('location: viewcategory.php');
			
?>

