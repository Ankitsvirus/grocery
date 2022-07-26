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
<?php if(isset($_GET['uname'])){
				$uname=$_GET['uname'];
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				
			}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="bkp.css">

<style>
table{
	margin:0;
	position: relative;
	right: 0px; top: 100px; left: 0px;  
	border-collapse: collapse;
	border-color: #D2691E;
	font-size: 1em;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:	#D2691E}
}
.a:link, .a:visited {
    background-color: #f44336;
    color: white;
    padding: 5px 30px;
	border-radius: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	font-size: 20px;
}


.a:hover, .a:active {
    background-color: red;
}
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

.button1 {
    background-color:#333; 
    color: white; 
    
}
.button1:hover {
    background-color: red;
    color: white;
}
div{
	 font-size: 1.2em;
}
</style>
</head>
<body>
</head>
<body bgcolor="">

<div class="navbar">
  <a href="home.php" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
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
	
	if($_SESSION['password']==session_id())
	
		echo '<a href="profile.php" style="float:right"><img src="img/profile.png" height=20 wight=20>Profile</a>';
		
	
	?>
  <?php
	
	if($_SESSION['password']!=session_id())
	
		echo '<a href="registration_page.php" style="float:right"><img src="img/reg2.png" height=20 wight=20>Register</a>';
		
	
	?>
 <a href="viewcart.php?viewcartid=<?php echo $_SESSION['uname'] ?>" style="float:right"><img src="img/cart2.png" height=20 wight=20>View Cart</a>
  
  
</div>
		
<div class="main" id="">
 <ul>
  <li><a class="active" href="#home">Select Product Type</a></li>
  <li><a href="action.php?action_id=<?php echo "RICE";?>">RICE</a></li>
  <li><a href="action.php?action_id=<?php echo "OILS";?>">OILS & GHEE</a></li>
  <li><a href="action.php?action_id=<?php echo "MASALAS";?>">MASALAS & SPICES</a></li>
  <li><a href="action.php?action_id=<?php echo "SAUCES";?>">SAUCES & VINIGAR</a></li>
  <li><a href="action.php?action_id=<?php echo "WHEAT";?>">WHEAT FLOR</a></li>
  <li><a href="action.php?action_id=<?php echo "DALS";?>">DALS & BEANS</a></li>
  <li><a href="action.php?action_id=<?php echo "DRY";?>">DRY FRUIT</a></li>
  <li><a href="action.php?action_id=<?php echo "TEA";?>">TEA & COFFIE</a></li>
  <li><a href="action.php?action_id=<?php echo "BISCUITS";?>">BISCUITS SNACK</a></li>
  <li><a href="action.php?action_id=<?php echo "DETERGENT";?>">DETERGENT</a></li>
  <li><a href="action.php?action_id=<?php echo "CLEANERS";?>">CLEANERS</a></li>
  <li><a href="action.php?action_id=<?php echo "SKIN";?>">SKIN CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "HAIR";?>">HAIR CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "PERSONAL";?>">PERSONAL CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "SHAVING";?>">SHAVING NEEDS</a></li>
  <li><a href="action.php?action_id=<?php echo "COSMETICS";?>">COSMETICS</a></li>
  <li><a href="action.php?action_id=<?php echo "DEOS";?>">DEOS & PERFUMES</a></li>
</ul>

<div style="margin-left:25%;padding:60px 16px;height:1000px;">
		
		<div>
            <h1>Your Order Status</h1>
			<table border=1 width=70% cellspacing=0>
			<tr>
				<th>Order Id</th><th>Date & time</th><th>Status</th>
			</tr>
			<?php 
			
				$q="select * from order_user where uname='$uname' order by order_time desc";
				$result=mysqli_query($con, $q);
				$num=mysqli_num_rows($result);
				
				for($i=1;$i<=$num;$i++)
				{
					$row=mysqli_fetch_array($result);
					$uname=$row['uname'];
					$order_id=$row['order_id'];
					$order_time=$row['order_time'];
					$status=$row['status'];
			?>	
			<tr>
				<td><?php echo $order_id;?></td>
				<td><?php echo $order_time;?></td>
				<td><?php echo $status;?></td>
			</tr>
			<?php
				}
		?>
	</table>
        
</div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<iframe src="ft.php" width="100%" ></iframe>
</body>
</html>
