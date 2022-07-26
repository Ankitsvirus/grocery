<?php
	session_start();
	if(!isset($_SESSION['uname']))
		header('location:http://localhost/grocery/login.php');
?>

<?php
	if(isset($_GET['uname'])){
		$uname=$_GET['uname'];
	
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
<link rel="stylesheet" href="bkp.css">
<link rel="stylesheet" href="style3.css">
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
.tblbg{
	background-color:white;
	color:blue;
	font-size:1.3em;
}
</style>
<style>
input[type=text], select, textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:1.3em;
}

.yourorder{
	background-color:gray;
	border-radius: 4px;
	font-size:2.2em;
	display: inline-block;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}	
</style>

</head>
<body>

<div class="navbar">
  <a href="#home" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=20 wight=20>Home</a>
  <a href="contact.php"><img src="img/contact.png" height=20 wight=20>Contact</a>
  <a href="aboutus.php">About</a>
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
	<center><img src="img/confirm.png" style="position:relative;overflow: none;"></center>
	<center><h1 class="yourorder"style=""><b>Confirm Your Order</b><br/></center>
		<?php 
				$q1="select * from user where uname='$uname'";
				$result1=mysqli_query($con, $q1);
				$row1=mysqli_fetch_array($result1);
		?>
		<form action="order_action.php" method="post">
		<table align="center" border=0>
			<input type="hidden" name="uid" value="<?php echo $row1['uid'];?>" >
			 <tr><th class="tblbg">First Name:</th><td><input type="text" name="fname" value="<?php echo $row1['fname'];?>" readonly></td></tr>	
			<tr><th class="tblbg">Last Name:</th><td><input type="text" name="lname" value="<?php echo $row1['lname'];?>" readonly></td></tr>
			<tr><th class="tblbg">Email:</th><td><input type="text" name="uname" value="<?php echo $row1['uname'];?>" readonly></td></tr>
			<tr><th class="tblbg">Contact No:</th><td><input type="text" name="phone_no" value="<?php echo $row1['phone_no'];?>" readonly></td></tr>
			<tr><th class="tblbg">Shipping Address<br/>(You can change):</th><td><input type="text" name="address" value="<?php echo $row1['address'];?>"></td></tr>
			<tr><th class="tblbg">Nearest Location<br/>(You can change):</th><td><input type="text" name="location" value="<?php echo $row1['location'];?>"></td></tr>
			
				
			</tr>
		</table><br/><br/>
    <table align="center" border=0>
  <tr>
    <th>Product Id</th>
    <th>Product Name</th>
	<th>Net Weight</th>
    <th>Price( <i class="fa fa-inr"></i> )</th>
  </tr>
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
						<td><?php echo $row['pid'];?></td>
						<td><?php echo $row['pname'];?></td>
						<td><?php echo $row['net_weight'];?></td>
						<td><?php echo $row['price']; ?></td>
						<?php $total=$total+$row['price']; ?>
						
						</tr>
						<?php	
						}
						?>
			
						<?php	
						}
						
						?>
						
					<tr >
						<td colspan=5 >Total number Of item: <?php echo $num; ?></td>
						<input type="hidden" name="no_of_item" value="<?php echo $num;?>" >
					</tr>		
					<tr class="total">
						<th colspan=3 class="total">TOTAL(including delivery charge <i class="fa fa-inr"></i> 100)</th>
						<th colspan=0 class="total"><?php echo $total; ?>+100=<?php echo $total+100; ?>( <i class="fa fa-inr"></i> )</th>
						<input type="hidden" name="total_amount" value="<?php echo $total;?>" >
					</tr>
					<tr >
						<th colspan=4 align="right" class="ping" ><input type="submit" name="submit" value="PLACE ORDER (CASH ON DELIVERY)" class="button button2"></th>
					</tr>				
</table>   
</form>
</div>
<iframe src="ft.php" width="100%" ></iframe>
</body>
</html>
