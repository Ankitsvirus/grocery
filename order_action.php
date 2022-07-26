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
	$today = date("Ymd");
	$rand = sprintf("%04d", rand(0,9999999));
	$unique = $today . $rand;
?>
<?php

	if(isset($_POST['submit'])){
	$uid=$_POST['uid'];
	$uname=$_POST['uname'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone_no=$_POST['phone_no'];
	$address=$_POST['address'];
	$location=$_POST['location'];
	$no_of_item=$_POST['no_of_item'];
	$total_amount=$_POST['total_amount']+100;
	$order_id=$unique;
	
	
	
	$con=mysqli_connect('localhost','root');
	if(!$con){
    die("data base connection failed :" . mysqli_error());
    }
	$db_select=mysqli_select_db($con,'grocery');
	if (!$db_select){

    die("database selection failed:" . " " . mysqli_error());
    }
	
	$q="INSERT INTO order_user(uid,uname,fname,lname,phone_no,address,location,no_of_item,total_amount,order_id) values($uid,'$uname','$fname','$lname','$phone_no','$address','$location',$no_of_item,$total_amount,'$order_id')";
	
	$status=mysqli_query($con,$q);
	
	
	$uname=$_SESSION['uname'];
	$q1="select * from cart where uname='$uname'";
	$result=mysqli_query($con, $q1); //or die(mysqli_error($con));
	$num=mysqli_num_rows($result);
	
	
						 
						for($i=1;$i<=$num;$i++)
						{
							$row=mysqli_fetch_array($result);
							$pid=$row['pid'];
							$pname=$row['pname'];
							$net_weight=$row['net_weight'];
							$price=$row['price'];
							
							$q2="INSERT INTO order_product(pid,pname,net_weight,price,order_id_p) values($pid,'$pname','$net_weight',$price,'$order_id')";
							$st=mysqli_query($con,$q2);
							
							//echo $q2;
				
						}
							if($st==1){
								
								//header('Refresh:2; url=print_order.php');
								echo "<script type='text/javascript'>alert('Your order id is $order_id !!!')</script>";
							}else{
								
								echo "<script type='text/javascript'>alert('Order unsuccessful!!!')</script>";
							}
	}
?>

<html>
<head>
<style>
a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	border-radius: 8px;
}


a:hover, a:active {
    background-color: red;
}
</style>
<link rel="stylesheet" href="bkp.css">
</head>
<body>
<center><img src="img/barrackpore2.png" style="position:relative;overflow: none;background-color:;"></center><br/>
	<center><a href="print_order.php?order_id=<?php echo $order_id; ?>" >Print Order</a></center>					
						
			

</body>

<html>