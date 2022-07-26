<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if (session_status !== PHP_SESSION_ACTIVE) {
		session_start();
	}
?>

<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
          
 </script>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="bkp.css">

<style>
.form input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}

.form input[type=submit] {
    width: 100%;
    background-color: #D13939;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 8px;
    cursor: pointer;
	font-size:1.4em;
}

.form input[type=submit]:hover {
    background-color: #FE0808;
}

.main .form {
     border-radius: 5px;
   background: url('img/reg.jpg');
	
    padding: 20px;
	color:white;
	font-size:1.2em;
	margin:20px auto;
	width:600px;
}

</style>


</head>
<body >

<div class="navbar">
  <a href="#home" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Barrackpore Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=20 wight=20>Home</a>
  <a href="contact.php"><img src="img/contact.png" height=20 wight=20>Contact</a>
  <a href="#about">About</a>
  <a href="login.php" style="float:right"><img src="img/login.png" height=20 wight=20>Login</a>
  <a href="registration_page.php" style="float:right"><img src="img/reg2.png" height=20 wight=20>Register</a>
</div>
<div class="main" id="">
	
<div class="form">
	<center><img src="img/regnow.png" border=0></center>
  <form name="form1" action="registration_action.php" method="post">
	<label for="fname"> First Name: </label>
    <input type="text" id="fname" name="fname" placeholder="Enter your first name.." pattern=".{2,15}" required title="Enter a valid first name"><br/>
	
	<label for="lname"> Last Name: </label></td>
    <input type="text" id="lname" name="lname" placeholder="Enter your last name.." required pattern=".{2,15}" title="Enter a valid last name"><br/>
	<label for="email"> Email(username): </label>
    <input type="text" id="fname" name="uname" placeholder="Enter your Email.." required pattern=".{10,40}" title="Enter a valid email id"><br/>
    <label for="password"> Password: </label>
    <input type="password" name="password" placeholder="Enter a Password.." required pattern=".{8,40}" title="password must be at least 8 characters"><br/>
	
	<label for="phone_no"> Contact No: </label>
    <input type="text" name="phone_no" placeholder="Enter your Phone Number.." pattern=".{10,10}" pattern="[0-9]" required title="Enter 10 digit phone number"><br/>
	<label for="address"> Address: </label>
    <input type="text" name="address" placeholder="Enter your full Address.." pattern=".{15,60}" required title="Enter your valid and full address with pincode"><br/>
	
	<label for="location"> Nearest Location: </label>
    <input type="text" name="location" placeholder="Nearest Location.." pattern=".{6,20}" required title="Enter a valid location based on your address "><br/>

    <input type="submit" value="Register" name="submit" onclick="ValidateEmail(document.form1.uname)">
	
  </form>
 
</div>
</div>
<iframe src="ft.php" width="100%" ></iframe>
<script src="email-validation.js"></script>
</body>
</html>
