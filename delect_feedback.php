<?php if(isset($_GET['fid'])){
				$fid=$_GET['fid'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="delete from feedback where fid=$fid";
				$result=mysqli_query($con, $q);
			}

				
				header('location: feedback.php');
			
?>
