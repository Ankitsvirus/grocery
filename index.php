<?php
	session_start();
	if(!isset($_SESSION['name'])){
		header('location:http://localhost/grocery/admin/login.php');
	}	
	$name=$_SESSION['name'];
?>
<style>
 #welcome{
	height:300px;
	width:700px;
	position:absolute; 
	right: 0px; top: 300px; left: 455px; 
	font-size:6em;
	font-family:Arial, Helvetica, sans-serif; 
	text-shadow: 4px 4px 4px #000000;
 }
 .img{
	 position:fixed;
	 top:120px;
	 left:390px;
	 z-index:-1;
	
 }
</style>
<html>
<head>
	<title>Admin</title><link rel="stylesheet" type="text/css" href="style9.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script> 
$( function() {
    $("#welcome").hide(1).show(1000).animate({left: '100px'}, "slow");;
  } );
</script>
</head>

<body>


<ul class="absolute">
	<li ><a href="logout.php" id="log">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<li ><a href="vieworders.php" >View Orders</a></li>
	<li ><a href="viewcategory.php" >View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a class="active" href="index.php">Home</a></li>  
	
</ul>
<img src="img/amart.png" style="position:relative;top:40px;left:140px;">

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="welcome" >WELCOME <?php echo $name; ?></div>
<img src="img/grocery.png" class="img">
</body>
</html>