<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php
	if(isset($_GET['details'])){
				$details=$_GET['details'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="select * from product where pid=$details";
				$result=mysqli_query($con, $q);
				
				//$num=mysqli_num_rows($result);
			}
?>
<style>
table{
	margin:0;
	position: relative;
	right: 0px; top: 100px; left: 0px;  
	border-collapse: collapse;
	border-color: #D2691E;
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

th, td, tr {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	font-size:1.1em;
	font-family:Arial, Helvetica, sans-serif;
}

tr:hover{background-color:	#D2691E}

</style>
<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style9.css" />
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
</head>

<body>

<ul class="absolute">
	<li ><a href="logout.php">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<<li ><a href="vieworders.php" >View Orders</a></li>
	<li ><a href="viewcategory.php">View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a class="active" href="index.php">Home</a></li> 
	
</ul>
<div>
	
	<center><h1>Product Details</h1>
	<table border=0 cellspacing=0 width=90% cellpadding=2 >
		
			<?php  
			$i=1;
			while($row=mysqli_fetch_array($result)){
			
			?>	
			<tr>
			
			<td><img src="<?php echo 'img/'.$row['image'] ?>" height=160 width=163><br/><br/>
				&nbsp;<a class="a" href="imgupdate.php?updateimage=<?php echo $row['pid'];?>" onclick="return confirm('Are you sure?');">Edit Image</a>
			</td>
			<td>
			
			<b><u>Product Id:</b></u> <?php echo $row['pid'];?><br/>	
			<b><u>Category:</b></u> <?php echo $row['category'];?><br/>
			<b><u>Product Name:</b></u> <?php echo $row['pname'];?><br/>
			<b><u>Date of Manufacture:</b></u> <?php echo $row['dom'];?><br/>
			<b><u>Best Before Date:</b></u> <?php echo $row['bbd'];?><br/>
			<b><u>Net Weight:</b></u> <?php echo $row['net_weight'];?><br/>
			<b><u>Price:</b></u> <i class="fa fa-inr"></i> <?php echo $row['price'];?><br/>
			<b><u>Discount:</b></u> <?php echo $row['discount'];?><br/>
			<b><u>Net Price:</b></u> <i class="fa fa-inr"></i> <?php echo $row['net_price'];?><br/>
			<b><u>Stock:</b></u> <?php echo $row['stock'];?><br/>
			<b><u>Availability:</b></u> <?php echo $row['availability'];?><br/>
			<b><u>Last Updation Time:</b></u> <?php echo $row['entry_time'];?><br/>
		
			<td>
				<a href="delete.php?delete=<?php echo $row['pid']; ?>" onclick="return confirm('Product number <?php echo $row['pid'] ?> has been successfully deleted');" class="a">Delete</a>
			</td>
			
			<td>
				<a href="update.php?update=<?php echo $row['pid'];?>" class="a" >Update</a>
			</td>
			<tr>
				<td colspan=4 ><b><u>Product Description:</b></u> <br/>
					<?php echo $row['details'];?></td>
			</tr>
			<?php
				$i++;			
			}
		?>

	</table><br/><br/><br/><br/>
	</center>
</body>
</html>	