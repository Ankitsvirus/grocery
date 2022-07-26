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
	$uname=$_SESSION['uname'];
	//echo $uname;
	$con=mysqli_connect('localhost','root');
	if(!$con){
    die("data base connection failed :" . mysqli_error());
    }
	$db_select=mysqli_select_db($con,'grocery');
	if (!$db_select){

    die("database selection failed:" . " " . mysqli_error());
    }
	
	$q="delete from cart where uname='$uname'";
	$result=mysqli_query($con, $q);
	//echo $q;
?>

<html>
<head>
<title>Print</title>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
</head>

<body >
<img src="bgs3.png"><br/>

<?php  if(isset($_GET['order_id'])){
				$order_id=$_GET['order_id'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				//echo $order_id;
			
				$q2="select uname,fname,lname,phone_no,address,location,no_of_item,total_amount,order_id,order_time from order_user,order_product where order_id=$order_id and order_id_p=$order_id LIMIT 1";
				$result2=mysqli_query($con, $q2);
				$row2=mysqli_fetch_array($result2);
				$total_amount=$row2['total_amount'];
				//echo $uname;
				$order_id=$row2['order_id'];
				
				//echo $q2;
}	
?>
<b>Order Id: <?php echo $row2['order_id'] ?> </b><br/>
<b>Ordering Time: <?php echo $row2['order_time'] ?> </b><br/>
Customer Name: <?php echo $row2['fname']; ?> <?php echo $row2['lname']; ?><br/>
Email: <?php echo $row2['uname'] ?> <br/>
Phone Number: <?php echo $row2['phone_no'] ?> <br/>
Shipping Address: <?php echo $row2['address'] ?> <br/>
Nearest Location: <?php echo $row2['location'] ?> <br/>


<?php
	$q1="select pid,pname,net_weight,price from order_product where order_id_p='$order_id'";
	$result1=mysqli_query($con, $q1);
	//echo $q1;
	$num=mysqli_num_rows($result1);
	
?>	
						<table border=1 width=50% cellspacing=0> 
						<tr>
							<th>Sl. No</th><th>Product Id</th><th>Product Name</th><th>Net Weight</th><th>Price( <i class="fa fa-inr"></i> )</th>
						</tr>
<?php						for($i=1;$i<=$num;$i++)
						{
							$row=mysqli_fetch_array($result1);
?>						
						
							
							<tr>
								<td><?php echo $i ?></td><td><?php echo $row['pid'] ?></td><td><?php echo $row['pname'] ?></td><td><?php echo $row['net_weight'] ?></td><td><?php echo $row['price'] ?></td>
										<?php $total=$total+$row['price']; ?>
							</tr>
						<?php
						}
						?>
							<tr>
								<td colspan=5>Total no. of item:<?php echo $num ?></td>
							</tr>
							<tr>
								<td colspan=4>Total product Amount:</td><td><i class="fa fa-inr"></i><?php echo $total ?></td>
							</tr>
						</table><br/>
						<h4>Total payable Amount is: <?php echo $total_amount ?> (including <i class="fa fa-inr"></i> 100 delivery charge)<br/>
						Thank You.</h4><br/>
						<button onclick="myFunction()">Print Order</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;<button onclick="window.location.href='index.php'">Cancel</button>
						<script>
							function myFunction() {
							window.print();
						}
						</script>
</body>

</html>