<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php

	if(isset($_POST['submit'])){
	$category=$_POST['category'];
	$pname=$_POST['pname'];
	$dom=$_POST['dom'];
	$bbd=$_POST['bbd'];
	$price=$_POST['price'];
	$discount=$_POST['discount'];
	$net_price=$_POST['net_price'];
	$net_weight=$_POST['net_weight'];
	$details=$_POST['details'];
	$stock=$_POST['stock'];
	
    $image=$_FILES['image']['name'];
	
	$con=mysqli_connect('localhost','root');
	if(!$con){
    die("data base connection failed :" . mysqli_error());
    }
	$db_select=mysqli_select_db($con,'grocery');
	if (!$db_select){

    die("database selection failed:" . " " . mysqli_error());
    }
	
	
	$target = "img/".basename($_FILES['image']['name']);
	
	$q="INSERT INTO product(category,pname,dom,bbd,price,details,image,net_weight,stock,discount,net_price) values('$category','$pname','$dom','$bbd',$price,'$details','$image','$net_weight','$stock','$discount','$net_price')";
	
	$status=mysqli_query($con,$q);
		
	move_uploaded_file($_FILES['image']['tmp_name'],$target);

	mysqli_close($con);
			
	header("location:insert.php");
	
	}
?>
<html>
<head><title>Insertion</title></head>

<body>
<p><?php 
			if($status==1){ 
				echo "Record inserted";
				 
				exit();
			}
			else {
				echo "Insertion Failed";
				echo $q;
			}
		?>
	
	</p>
</body>
</html>