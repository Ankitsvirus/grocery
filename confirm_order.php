<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php
	
	$con=mysqli_connect('localhost','root');
	if(!$con){
    die("data base connection failed :" . mysqli_error());
    }
	$db_select=mysqli_select_db($con,'grocery');
	if (!$db_select){

    die("database selection failed:" . " " . mysqli_error());
    }
	
?>

<html>
<head>
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
<title>Generate Bill</title>

<style>
table{
	margin:0;
	position: relative;
	right: 0px; top: 100px; left: 0px;  
	border-collapse: collapse;
	border-color: #D2691E;
	font-size: 1em;
}
.a:link, .a:visited {
    background-color: #f44336;
    color: white;
    padding: 5px 30px;
	border-radius: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


.a:hover, .a:active {
    background-color: red;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:	#D2691E}
}
</style>
</head>

<body >
<img src="bgs3.png" width=600 height=150><br/>
<?php  if(isset($_GET['order_id'])){
				$order_id=$_GET['order_id'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				//echo $order_id;
			
				$q="UPDATE order_user SET status='confirm' WHERE order_id='$order_id'";
				$result=mysqli_query($con, $q);
			
				$q2="select uname,fname,lname,phone_no,address,location,no_of_item,total_amount,order_id,order_time from order_user,order_product where order_id=$order_id and order_id_p=$order_id LIMIT 1";
				$result2=mysqli_query($con, $q2);
				$row2=mysqli_fetch_array($result2);
				$total_amount=$row2['total_amount'];
				//echo $uname;
				$order_id=$row2['order_id'];
				
				//echo $q2;
}	
?><br/>
<h3>
<b >Order Id: <?php echo $row2['order_id'] ?> </b><br/>
<b>Ordering Time: <?php echo $row2['order_time'] ?> </b><br/>
Customer Name: <?php echo $row2['fname']; ?> <?php echo $row2['lname']; ?><br/>
Email: <?php echo $row2['uname'] ?> <br/>
Phone Number: <?php echo $row2['phone_no'] ?> <br/>
Shipping Address: <?php echo $row2['address'] ?> <br/>
Nearest Location: <?php echo $row2['location'] ?> <br/>
</h3>

<?php
	$q1="select pid,pname,net_weight,price from order_product where order_id_p='$order_id'";
	$result1=mysqli_query($con, $q1);
	//echo $q1;
	$num=mysqli_num_rows($result1);
	
?>	
						<table border=1 width=60% cellspacing=0> 
						<tr>
							<th>Sl. No</th><th>Product Id</th><th>Product Name</th><th>Net Weight</th><th>Price( <i class="fa fa-inr"></i> )</th>
						</tr>
						
<?php				     $total=0;
						for($i=1;$i<=$num;$i++)
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
								<td colspan=4>Total product Amount:</td><td> <i class="fa fa-inr"></i> <?php echo $total ?></td>
							</tr>
							
						</table><br/><br/><br/><br/><br/><br/>
						
						<h2>Total payable Amount is: <?php echo $total_amount ?> (including <i class="fa fa-inr"></i> 100 delivery charge)<br/>
						Thank You for Shopping</h2><br/>
						<button onclick="myFunction()">Generate Bill</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;<button onclick="window.location.href='vieworders.php'">Back</button>
						<script>
							function myFunction() {
							window.print();
						}
						</script>
						
</body>

</html>