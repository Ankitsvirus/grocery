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
	if(isset($_GET['viewcartid'])){
		$uname=$_GET['viewcartid'];
	
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');
	
	$q="select * from cart where uname='$uname'";
	$result=mysqli_query($con,$q);
	//echo $q;
	$num=mysqli_num_rows($result);
	
	}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="bkp.css">

<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
<script type="text/javascript">

 </script>
<link rel="stylesheet" href="style3.css" >
<link rel="stylesheet" href="bkp.css" >
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
	border-radius: 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}


table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:hover{background-color:#BFC35C}

th {
    background-color: #4CAF50;
    color: white;
}
.total{
	background-color: #FFA500;
    color: white;
	font-size: 1.5em;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	
    bottom: 200px;
    right: 150px;
}
.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.ping{
	 background-color: white;
}
</style>
</head>
<body>
</head>
<body>

<div class="navbar">
  <a href="home.php" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=20 wight=20>Home</a>
  <a href="contact.php"><img src="img/contact.png" height=20 wight=20>Contact Us</a>
  <a href="aboutus.php">About Us</a>
  
  <?php
	
	if($_SESSION['password']==session_id())
	
		echo '<a href="logout.php" style="float:right"><img src="img/logout.png" height=20 wight=20>Logout</a>';
		
	else
		echo '<a href="login.php" style="float:right"><img src="img/login.png" height=20 wight=20>Login</a>';
	
	?>
  <?php
	
	if($_SESSION['password']!=session_id())
	
		echo '<a href="registration_page.php" style="float:right"><img src="img/reg2.png" height=20 wight=20>Register</a>';
		
	
	?>
 <a href="viewcart.php?viewcartid=<?php echo $_SESSION['uname'] ?>" style="float:right"><img src="img/cart2.png" height=20 wight=00>View Cart</a>
  
  
</div>
		

<div style="padding:60px 16px;height:1000px;">
	<center><img src="img/cart3.png" style="position:relative;overflow: none;background-color:;"></center>	
	<center><h1>Your Cart<br/>
		<?php echo $uname; ?></h1></center>

<input type="hidden" name="uname" value="<?php echo $uname;?>" >	
    <table align="center" border=0>
  <tr>
    <th>Product Id</th>
    <th>Product Name</th>
	<th>Net Weight</th>
    <th>Price( <i class="fa fa-inr"></i> )</th>
	<th>Remove Item</th>
						<?php
							if($num>0){
								$total=0;
						?>
						<?php  
						for($i=1;$i<=$num;$i++)
						{
							$row=mysqli_fetch_array($result);
							
							
						?>
						<tr>
						<td><?php echo $row['pid'];?></td><input type="hidden" name="pid" value="<?php echo $row['pid'];?>" >
						<td><?php echo $row['pname'];?></td>
						<td><?php echo $row['net_weight'];?></td>
						<td><?php echo $row['price']; ?></td><input type="hidden" name="price" value="<?php echo $row['price'];?>" >
						<?php $total=$total+$row['price']; ?>
						<td><a href="removecart.php?cart_id=<?php echo $row['cart_id']; ?>">Remove</a></td>
						</tr>
						<?php	
						}
						?>
			
						<?php	
						}
						
						?>
						
						
					<tr class="total">
						<th colspan=3 class="total">TOTAL</th>
						<th colspan=2 class="total"><i class="fa fa-inr"></i> <?php echo $total; ?></th>
					</tr>
					<?php 
						if($total>300){
					?>
					<tr >
						<th colspan=5 align="right" class="ping" ><a href="placeorder.php?uname=<?php echo $uname ?>" class="button button2">PROCEED TO CHECKOUT</a></th>
					</tr>
					<?php }else{ ?>
						<tr >
						<td colspan=5 style="color:red;">*Minimum shopping Amount is <i class="fa fa-inr"></i>300 to Place Order</td>
						</tr>
					<?php } 
						
					?>
						
</table>   

</div>
<iframe src="ft.php" width="100%" ></iframe>
</body>
</html>
