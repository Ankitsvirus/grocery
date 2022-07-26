<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php if(isset($_GET['delete'])){
				$delete_id=$_GET['delete'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="delete from product where pid=$delete_id";
				$result=mysqli_query($con, $q);
			}

				echo "Product_number $delete_id has been successfully deleted";
				
				header('location: viewcategory.php');
			
?>
