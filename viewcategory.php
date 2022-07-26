<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php
	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'grocery');	
?>
<style>
input[type=text], select, textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
td{
	font-size:1.3em;
	font-family:Arial, Helvetica, sans-serif;
}	
form{
	margin:0;
	position: relative;
	right: 0px; top: 80px; left: 0px;  
}

</style>
<html>
<head>

</head>
<head><title>View Category</title><link rel="stylesheet" type="text/css" href="style9.css" /></head>
<body>

<div class="dropdown">
<ul class="absolute">
	<li ><a href="logout.php">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<li ><a href="vieworders.php" >View Orders</a></li>
	<li ><a href="viewcategory.php" >View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a class="active" href="index.php">Home</a></li>  
</ul>
</div><br/><br/><br/><br/><br/><br/><br/><br/>
	<center><form action="view.php" method="post" enctype="multipart/form-data" >
		<table border=0>
		<tr>
		<td>Select Category: </td><td><select name="category">
		
			<option value="RICE">RICE</option>
			<option value="OILS & GHEE">OILS & GHEE</option>
			<option value="MASALAS & SPICES">MASALAS & SPICES</option>
			<option value="SAUCES & VINIGAR">SAUCES & VINIGAR</option>
			<option value="WHEAT FLOR">WHEAT FLOR</option>
			<option value="DALS & BEANS">DALS & BEANS</option>
			<option value="DRY FRUIT">DRY FRUIT</option>
			<option value="TEA & COFFIE">TEA & COFFIE</option>
			<option value="BISCUITS SNACK">BISCUITS SNACK</option>
			<option value="DETERGENT">DETERGENT</option>
			<option value="CLEANERS">CLEANERS</option>
			<option value="SKIN CARE">SKIN CARE</option>
			<option value="HAIR CARE">HAIR CARE</option>
			<option value="PERSONAL CARE">PERSONAL CARE</option>
			<option value="SHAVING NEEDS">SHAVING NEEDS</option>
			<option value="COSMETICS">COSMETICS</option>
			<option value="DEOS & PERFUMES">DEOS & PERFUMES</option>	
		</select></td>
		</tr>
		<tr>
		<br/><td colspan=2><center><input type="submit" value="Submit" name="submit"></td>
		</tr>
	</form><br/><br/></center>
	</table>
	
	</center>
</div>
</body>
</html>
