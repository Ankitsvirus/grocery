<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<style>

form {
    
	background-color:white;
	border:1px solid blue;
	margin:20px auto;
	padding:20px;
	width:500px;
	
	-moz-box-shadow:0 0 1px #444 inset;
	-webkit-box-shadow:0 0 1px #444 inset;
	box-shadow:0 0 5px #444 inset;
	
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
	top:130px;
}
.loginhere{
	position:fixed;
	top:100px;
	right:600px;

}
.uimg{
	position:fixed;
	top:240px;
	left:415px;
}
.lockimg{
	position:fixed;
	top:320px;
	left:415px;
}
</style>
<img src="img/admin_login.jpg" class="img">
<body>
<img src="img/amart.png" style="position:fixed;top:-12px;left:290px;">
<center>
<br/><br/>  
<br/><br/>  
<center><h2><center><img src="img/userlogin.png" class="loginhere" height=150 width=300></center></h2></center>

<form action="validation.php" method="post">
<div class="imgcontainer">
    
  </div>

  <div class="container">
  <br/><br/><br/>
    <label><b>Username</b></label>
	<img src="img/uname.png" height=35 width=35 class="uimg">
    <input type="text" placeholder="Enter username" name="name" required>

    <label><b>Password</b></label>
	<img src="img/lock.png" height=35 width=35 class="lockimg">
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <input type="image" src="img/login.jpg" height="80" width="270"><br/>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  
</form>

</body>
</html>
