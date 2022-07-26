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
input[type=text], input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	font-size:0.7em;
	background-color: gray;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 2px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:1.5em;
}

input[type=submit]:hover {
    background-color: #45a049;
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
<body >

<div class="navbar">
  <a href="#home" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=20 wight=20>Home</a>
  <a href="#contact"><img src="img/contact.png" height=20 wight=20> Contact</a>
  <a href="#about">About</a>
  
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
  <li><a href="action.php?action_id=<?php echo "MINERAL";?>">MINERAL WATER</a></li>
  <li><a href="action.php?action_id=<?php echo "DETERGENT";?>">DETERGENT</a></li>
  <li><a href="action.php?action_id=<?php echo "CLEANERS";?>">CLEANERS</a></li>
  <li><a href="action.php?action_id=<?php echo "SKIN";?>">SKIN CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "HAIR";?>">HAIR CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "PERSONAL";?>">PERSONAL CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "SHAVING";?>">SHAVING NEEDS</a></li>
  <li><a href="action.php?action_id=<?php echo "COSMETICS";?>">COSMETICS</a></li>
  <li><a href="action.php?action_id=<?php echo "DEOS";?>">DEOS & PERFUMES</a></li>
</ul>

<div style="margin-left:25%;padding:60px 16px;">
		
		<div>
            <h1>Update your Profile</h1>
			<?php
				$q="select * from user where uname='$uname'";
				$result=mysqli_query($con,$q);
				$row=mysqli_fetch_array($result);
				
			?>
	 <form action="update_profile_action.php" method="post">
	 <input type="hidden" id="uid" name="uid" value="<?php echo $row['uid'] ?>">
		<label for="fname"> First Name: </label>
		<input type="text" id="fname" name="fname" value="<?php echo $row['fname'] ?>"><br/>
	
		<label for="lname"> Last Name: </label></td>
		<input type="text" id="lname" name="lname" value="<?php echo $row['lname'] ?>"><br/>
		<label for="email"> Email(username): </label>
		<input type="text" id="fname" name="uname" value="<?php echo $row['uname'] ?>"><br/>
		<label for="password"> Password: </label>
		<input type="password" name="password" value="<?php echo $row['password'] ?>"><br/>
	
		<label for="phone_no"> Contact No: </label>
		<input type="text" name="phone_no" value="<?php echo $row['phone_no'] ?>"><br/>
		<label for="address"> Address: </label>
		<input type="text" name="address" value="<?php echo $row['address'] ?>"><br/>
	
		<label for="location"> Nearest Location: </label>
		<input type="text" name="location" value="<?php echo $row['location'] ?>"><br/>

		<input type="submit" value="Update" name="submit" >
	
  </form>
			   
</div>
<div style="color:red">* Before Updation You have to make sure that your order status is not pending.
</div>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<iframe src="ft.php" width="100%" ></iframe>
</body>

</html>
