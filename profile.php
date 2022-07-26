<?php
	session_start();
	if(!isset($_SESSION['uname']))
		header('location:http://localhost/grocery/login.php');
	$uname=$_SESSION['uname'];
?>
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if (session_status !== PHP_SESSION_ACTIVE) {
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="bkp.css">

<style>
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
<body >

<div class="navbar">
  <a href="#home" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=30 wight=30>Home</a>
  <a href="contact.php"><img src="img/contact.png" height=30 wight=30>Contact</a>
  <a href="#about">About</a>
  
  <?php
	
	if($_SESSION['password']==session_id())
	
		echo '<a href="logout.php" style="float:right"><img src="img/logout.png" height=30 wight=30>Logout</a>';
		
	else
		echo '<a href="login.php" style="float:right"><img src="img/login.png" height=30 wight=30>Login</a>';
	
	?>
	<?php
	
	if($_SESSION['password']==session_id())
	
		echo '<a href="profile.php" style="float:right"><img src="img/profile.png" height=30 wight=30>Profile</a>';
		
	
	?>
  <?php
	
	if($_SESSION['password']!=session_id())
	
		echo '<a href="registration_page.php" style="float:right"><img src="img/reg2.png" height=30 wight=30>Register</a>';
		
	
	?>
 <a href="viewcart.php?viewcartid=<?php echo $_SESSION['uname'] ?>" style="float:right"><img src="img/cart2.png" height=30 wight=30>View Cart</a>
  
  
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
  <li><a href="action.php?action_id=<?php echo "MINERAL";?>">MINERAL WATER</a></li>
  <li><a href="action.php?action_id=<?php echo "DETERGENT";?>">DETERGENT</a></li>
  <li><a href="action.php?action_id=<?php echo "CLEANERS";?>">CLEANERS</a></li>
  <li><a href="action.php?action_id=<?php echo "SKIN";?>">SKIN CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "HAIR";?>">HAIR CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "PERSONAL";?>">PERSONAL CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "SHAVING";?>">SHAVING NEEDS</a></li>
  <li><a href="action.php?action_id=<?php echo "COSMETICS";?>">COSMETICS</a></li>
  <li><a href="action.php?action_id=<?php echo "DEOS";?>">DEOS & PERFUMES</a></li>
</ul><br/>
	<form action="search.php" method="post" >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" class="unknown" name="search_text" placeholder="Search by Product name" size=130 style="font-size:1em;border-radius:8px;" />
	<input type="submit" value="search" name="submit" class="btn btn-danger btn-xs" style="font-size:1em;">
	</form>
<div style="margin-left:25%;padding:60px 16px;height:1000px;">
		
		<div>
            <h1>Your Profile</h1>
			<?php $con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				//echo $order_id;
			
				$q="select * from user where uname='$uname'";
				$result=mysqli_query($con, $q);
				$row=mysqli_fetch_array($result);
			?>	
			<?php echo $row['fname'] ?> <?php echo $row['lname'] ?><br/>
			<?php echo $row['uname'] ?><br/>
			<?php echo $row['phone_no'] ?><br/>
			<?php echo $row['address'] ?><br/>
			<?php echo $row['location'] ?><br/>

        </div>  <br/><br/><br/><br/><br/> 
			<a href="update_profile.php?uname=<?php echo $uname;?>" class="a">Update my Profile</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="order_status.php?uname=<?php echo $uname;?>" class="a">Know my order Status</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="delete_profile.php?uname=<?php echo $uname;?>" class="a">Delete my Profile</a>
			
</div>

</div>

<iframe src="ft.php" width="100%" ></iframe>
</body>
</html>
