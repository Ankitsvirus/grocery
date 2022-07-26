<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php
	if(isset($_POST['submit'])){
		$category=$_POST['category'];
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');
	
	$q="select * from product where category='$category'";
	$result=mysqli_query($con,$q);
	//mysqli_close($con);
	$num=mysqli_num_rows($result);
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

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:	#D2691E}
}

</style>


<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" type="text/css" href="style9.css" />
	
</head>

<body>

<ul class="absolute">
	<li ><a href="logout.php">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<li ><a href="vieworders.php" >View Orders</a></li>
	<li ><a href="viewcategory.php">View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a class="active" href="index.php">Home</a></li>
</ul>
<div>
	<?php
		if($num>0){
	?>
	<center><h1>Products are</h1>
	<table border=1 cellspacing=0 width=90% cellpadding=2 >
		<tr>
			<th>ProductID</th>
			<th>Image</th>
			<th>Category</th>
			<th>Product Name</th>
			<th>Net Price</th>
			<th>Stock</th>
			<th>Availability</th>
			<th>ACTION</th>
			<th>ACTION</th>
			<th>ACTION</th>
		</tr>
		<?php  
			for($i=1;$i<=$num;$i++)
			{
				$row=mysqli_fetch_array($result);
				$category=$row['category'];
			?>
			<tr>
			<td><?php echo $row['pid'];?></td>
			<td><img src="<?php echo 'img/'.$row['image'] ?>" height=130 width=130 id="pid"><br/>
			<a class="a" href="imgupdate.php?updateimage=<?php echo $row['pid'];?>" onclick="return confirm('Are you sure?');">Edit Image</a></div></td>
			<td><?php echo $row['category'];?></td>
			<td><?php echo $row['pname'];?></td>
			<td><?php echo $row['net_price'];?></td>
			<td><?php echo $row['stock'];?></td>
			<td><?php echo $row['availability'];?></td>
		
			<td>
				<a href="moredetails.php?details=<?php echo $row['pid'];?>" class="a" >More Details</a>
			</td>
			<td>
				<a href="delete.php?delete=<?php echo $row['pid']; ?>" onclick="return confirm('Product number <?php echo $row['pid'] ?> has been successfully deleted');" class="a">Delete</a>
			</td>
			
			<td>
				<a href="update.php?update=<?php echo $row['pid'];?>" class="a" >Update</a>
			</td>
			</tr>
			
			
			</tr>
			<?php	
			}
			
		}
		else{ 
			echo "<h1 id=outofstock>Don't have any $category in stock</h1>";
		}

		?>
	</table><br/><br/><br/><br/>
	</center>
</body>
</html>	