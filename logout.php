<?php
	session_start();
	session_destroy();
			header('Refresh:2; url=login.php');
		 echo "<script type='text/javascript'>alert('Successfully Logout!')</script>";
	//header('location:http://localhost/grocery/index1.php');
?>