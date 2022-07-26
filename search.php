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
  <a href="home.php" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=30 wight=30>Home</a>
  <a href="contact.php"><img src="img/contact.png" height=30 wight=30>Contact</a>
  <a href="aboutus.php">About Us</a>
  <form class="navbar-form navbar-left" action="search.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search_text">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
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
<?php 
				$search_text=$_POST['search_text'];
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="select * from product where pname like '%$search_text%' or category like '%$search_text%'";
				$result=mysqli_query($con, $q);
				$num=mysqli_num_rows($result);
				
				
				
			
?>
 <br/>
	<form action="search.php" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="search_text" placeholder="Search by Product name" size=157 style="font-size:1em;border-radius:8px;" />
	<input type="submit" value="search" name="submit" class="btn btn-danger btn-xs" style="font-size:1.2em;">
	</form>
<div style="margin-left:22%;padding:40px 40px;height:1000px;width:1500px;">
		
<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<?php
							if($num>0){
						?>
					<?php  
						for($i=1;$i<=$num;$i++)
						{
							$row=mysqli_fetch_array($result);
							$category=$row['category'];
					?>
						<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading"><?php echo $row['pname'];?></div>
								<div class="panel-body">
									<a href="viewdetails.php?view_id=<?php echo $row['pid'];?>" class="viewdetails"><img src="<?php echo 'admin/img/'.$row['image'] ?>" height=160 width=130 ></a>
								</div>
								<div class="panel-heading"><?php echo "Rs.".$row['net_price'];?>
								<div class="panel-heading-2"><?php echo $row['net_weight'];?>
									<a href="addtocart.php?addtocart_id=<?php echo $row['pid']; ?>" style="float:right;" class="btn btn-danger btn-xs">AddToCart</a>
								</div>
							</div>
						</div> 
						
					</div>
					<?php	
			}
		?>
			
			<?php	
			}
			
		else{ 
		
			echo "<h1>Not Found !!!</h1>";
		}

		?>
					
				</div>
			</div>
			
			<div class="col-md-1"></div><div class="panel-footer">&copy; 2017</div>
		</div>
		
	</div>
		
</div>

</body>
</html>
