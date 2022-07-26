<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php
	
	$con=mysqli_connect('localhost','root');
	if(!$con){
    die("data base connection failed :" . mysqli_error());
    }
	$db_select=mysqli_select_db($con,'grocery');
	if (!$db_select){

    die("database selection failed:" . " " . mysqli_error());
    }
	
?>

<html>
<head>
<title>Order Details</title>
<link rel="stylesheet" type="text/css" href="style9.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
table{
	margin:0;
	position: relative;
	right: 0px; top: 100px; left: 0px;  
	border-collapse: collapse;
	border-color: #D2691E;
	font-size: 1.5em;
}
.a:link, .a:visited {
    background-color: #f44336;
    color: white;
    padding: 5px 30px;
	border-radius: 4px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	font-size: 2em;
}


.a:hover, .a:active {
    background-color: red;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:	#D2691E}
}
</style>
</head>

<body >

	<div class="dropdown">
	<ul class="absolute">
	<li ><a href="logout.php" id="log">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<li ><a href="vieworders.php" >View Orders</a></li>
	<li ><a href="viewcategory.php" >View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a class="active" href="index.php">Home</a></li>  
	</ul>
</div>

<?php  if(isset($_GET['fid'])){
				$fid=$_GET['fid'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				//echo $order_id;
				
				
				$q="select * from feedback where fid='$fid'";
				$result=mysqli_query($con, $q);
				$row=mysqli_fetch_array($result);
				$name=$row['name'];
				$email=$row['email'];
				$contact_no=$row['contact_no'];
				$subject=$row['subject'];
				$comments=$row['comments'];
				$time=$row['time'];
				
}	
?><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<h1>
<b >Name: <?php echo $name; ?> </b><br/>
<b>Email: <?php echo $email ?> </b><br/>
Contact No: <?php echo $contact_no; ?> <br/>
Subject: <?php echo $subject; ?> <br/>
Date & time: <?php echo $time; ?> <br/><br/>

<hr width=80%><br/>
<style>
.div {
    height: 550px;
    width: 700px;
    background-color: #2BBCD9;
}
</style>
Comments:
<div class="div"><br/>
<?php echo $comments ?>
</div>
</h1>

<br/><br/><br/><br/><br/><br/><br/><br/>
</body>

</html>