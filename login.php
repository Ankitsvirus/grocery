<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<style>

form {
    
	
	margin:73px auto;
	padding:20px;
	width:500px;
	position:absolute;
	right:100px;
	
	-moz-box-shadow:0 0 1px #444 inset;
	-webkit-box-shadow:0 0 10px #444 inset;
	box-shadow:0 0 20px #444 inset;
	
}

input[type=text], input[type=password] {
    width: 95%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	border-radius:8px;
}

input[type=submit] {
    background: url(img/login.jpg);
    border: 0;
    display: block;
    height: _the_image_height;
    width: _the_image_width;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 10%;
    }
}

a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: red;
}
.img{
	position:fixed;
	top:40px;
	right:200px;

}
.uimg{
	position:fixed;
	top:240px;
	left:727px;
}
.lockimg{
	position:fixed;
	top:320px;
	left:727px;
}
html { 
  background: url(img/back.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>

<body >
<center><img src="img/barrackpore2.png" style="position:fixed;overflow: none;right:10px;top:-20px;"></center>
<center>

<br/><br/>  
<br/><br/>  
<center><img src="img/userlogin.png" class="img" height=150 width=300></center>

<form action="loginaction.php" method="post">

<div class="imgcontainer">
    <?php
		function generateRandomString($length = 10) {
		return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
		}
		$captcha=generateRandomString();
	?>
  </div>
	<input type="hidden" name="captcha" value="<?php echo $captcha?>">
  <div class="container">

    <label><b>Username</b></label>
    <img src="img/uname.png" height=35 width=35 class="uimg">
	<input type="text" placeholder="Enter username" name="uname" required>

    <label><b>Password</b></label>
    <img src="img/lock.png" height=35 width=35 class="lockimg">
	<input type="password" placeholder="Enter Password" name="password" required><br/> <br/> 
     <?php
	echo "<font style='background-color:yellow;color=red;font-size:160%;'>$captcha</font> " ;
	?><input type="text" placeholder="Enter the above code here" name="captchaif" required> <br/>
    <input type="image" src="img/login.jpg" height="80" width="270"><br/>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  
</form>

</body>
</html>
