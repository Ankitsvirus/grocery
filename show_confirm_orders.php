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
	
	$q="select uname,order_id,order_time,status from order_user where status='confirm' order by order_time";

	$result=mysqli_query($con, $q) or die(mysqli_error($con));
	$num=mysqli_num_rows($result);

	
?>

<html>
<head>
<title>Admin</title><link rel="stylesheet" type="text/css" href="style9.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
table{
	margin:0;
	position: relative;
	right: 0px; top: 100px; left: 0px;  
	border-collapse: collapse;
	border-color: #D2691E;
	font-size: 2em;
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
<body>

	
	<div class="dropdown">
	<ul class="absolute">
	<li ><a href="logout.php" id="log">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<li ><a href="vieworders.php" >View Orders</a></li>
	<li ><a href="viewcategory.php" >View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a class="active" href="index.php">Home</a></li>  
	</ul>
	</div>			
						
	<br/><br/><br/><br/><br/><br/><br/>	<br/><br/>	
	<center><h1>Confirm Orders are</h1></center>
	<a href="vieworders.php" class="a">Click here to View Pending Orders</a>
	<center><table border=1 cellspacing=0 width=90% cellpadding=2 >
		<tr>
			<th>username</th>
			<th>Order Id</th>
			<th>Order Time</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php  
			for($i=1;$i<=$num;$i++)
			{
					$row=mysqli_fetch_array($result);
					$uname=$row['uname'];
					$order_id=$row['order_id'];
					$order_time=$row['order_time'];
					$status=$row['status'];
			?>
			<tr>
			<td><?php echo $uname;?></td>
			<td><?php echo $order_id;?></td>
			<td><?php echo $order_time;?></td>
			<td><?php echo $status;?></td>
			<td><a href="view_orders_details.php?order_id=<?php echo $order_id;?>" class="a" >Details</a></td>
		
			<?php	
			}

			?>
	</table><br/><br/><br/><br/>
	</center>

</body>

<html>