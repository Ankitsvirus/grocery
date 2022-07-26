<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php if(isset($_GET['updateimage'])){
				$update_id=$_GET['updateimage'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="select * from product where pid=$update_id";
				$result=mysqli_query($con, $q);
			}
?>			
<style>
input[type=text], select, textarea,input[type=file]{
    width: 40%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	background-color: #D2691E;
}
input[type=submit] {
    width: 40%;
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

div{
	 color: white;
    text-shadow: 2px 2px 4px #000000;
	font-size: 30px;
}
</style>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Product</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style9.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
</head>
<head><title>Image Update</title><link rel="stylesheet" type="text/css" href="style.css" /></head>
<body>

<ul class="absolute">
	<li ><a href="logout.php">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<li ><a href="viewcategory.php">View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a  href="insertcategory.php">Insert New Category</a></li>
	<li><a class="active" href="index.php">Home</a></li>  
	
</ul>
<center><form action="imgupdation.php" method="post" enctype="multipart/form-data" class="container">
	<?php $row=mysqli_fetch_array($result); ?>
		<input type="hidden" name="pid" readonly="readonly" value="<?php echo $row['pid'];?>"><br/><br/><br/><br/><br/><br/><br/>
		<div>Upload image:</div> <input type="file" name="image" class="button2"> <br/>
		<br/>
		<input type="submit" value="Update" id="submit" class="button"> <br/><br/>
	</form>
	</center>
</body>
</html>
