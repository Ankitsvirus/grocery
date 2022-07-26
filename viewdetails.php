
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if (session_status !== PHP_SESSION_ACTIVE) {
		session_start();
	}
?>

<?php if(isset($_GET['view_id'])){
				$view_id=$_GET['view_id'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="select * from product where pid=$view_id";
				$result=mysqli_query($con, $q);
				$num=mysqli_num_rows($result);
			}

				//echo "ProductId $view_id has been successfully selected";
				//echo $q;
				
				
			
?>
<!DOCTYPE html>
<html>
<head>
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

.button1 {
    background-color:#333; 
    color: white; 
    
}
.button1:hover {
    background-color: red;
    color: white;
}

</style>
</head>
<body>
</head>
<body >

<div class="navbar">
  <a href="#home" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=30 wight=30>Home</a>
  <a href="contact.php"><img src="img/contact.png" height=30 wight=30>Contact Us</a>
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
		
<table border=0 cellspacing=0 width=90% cellpadding=2 >
		
			<?php
							if($num>0){
						?>
					<?php  
						for($i=1;$i<=$num;$i++)
						{
							$row=mysqli_fetch_array($result);
							$category=$row['category'];
					?>
			<tr>
			
			<td><img src="<?php echo 'admin/img/'.$row['image'] ?>" height=310 width=300><br/><br/>
				
			</td>
			<td>
			
			
			<h1 style="font-variant: small-caps; font-family:Latin"><?php echo $row['pname'];?></h1><br/></br>
			<b>Date of Manufacture:</b> <?php echo $row['dom'];?><br/>
			<b>Best Before Date:</b> <?php echo $row['bbd'];?><br/>
			<b>Net Weight:</b> <?php echo $row['net_weight'];?><br/>
			<b>Price:</b> <?php echo $row['price'];?><br/>
			<b>Discount:</b> <?php echo $row['discount'];?>%<br/>
			<b>Net Price:</b> <?php echo $row['net_price'];?><br/><br/><br/><br/>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="addtocart.php?addtocart_id=<?php echo $row['pid']; ?>" style="float:center; font-size:2em;" class="btn btn-danger btn-xs">AddToCart</a>
		
			</td>
			</tr>
			<tr>
				<td colspan=2 ><br/><br/><br/><br/><b>Description:</b><br/>
					<?php echo $row['details'];?></td>
			</tr>
			<?php	
			}
		?>
			
			<?php	
			}
			
		

		?>

	</table>
		
</div>
</div>
<iframe src="ft.php" width="100%" ></iframe>
</body>
</html>
