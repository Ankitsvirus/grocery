
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if (session_status !== PHP_SESSION_ACTIVE) {
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
<script type="text/javascript">
            var picPaths = ['images/1.png','images/2.jpg','images/3.jpg','images/4.jpg','images/5.jpg','images/6.png'];
            var curPic = -1;
            //preload the images for smooth animation
            var imgO = new Array();
            for(i=0; i < picPaths.length; i++) {
                imgO[i] = new Image();
                imgO[i].src = picPaths[i];
            }

            function swapImage() {
                curPic = (++curPic > picPaths.length-1)? 0 : curPic;
                imgCont.src = imgO[curPic].src;
                setTimeout(swapImage,3000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
 </script>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="bkp.css">
<link rel="stylesheet" href="footer.css">
<style>
.myimg{
	position:absolute;
	top:200px;
	right:50px;
	   -ms-transform: rotate(3deg); /* IE 9 */
    -webkit-transform: rotate(3deg); /* Chrome, Safari, Opera */
    transform: rotate(3deg);
}
.myimg2{
	position:absolute;
	top:200px;
	right:1200px;
	   -ms-transform: rotate(0deg); /* IE 9 */
    -webkit-transform: rotate(0deg); /* Chrome, Safari, Opera */
    transform: rotate(0deg);
}
</style>

</head>

<body >

<div class="navbar">
  <a href="home.php" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Amart Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=30 wight=30>Home</a>
  <a href="contact.php"><img src="img/contact.png" height=30 wight=30>Contact Us</a>
  <a href="aboutus.php">About</a>
  
  <?php
	
	if($_SESSION['password']==session_id())
	
		echo '<a href="logout.php" style="float:right"><img src="img/logout.png" height=30 wight=30>Logout</a>';
		
	else
		echo '<a href="login.php" style="float:right"><img src="img/login.png" height=30 wight=30>Login</a>';
	
	?>
	<?php
	
	if($_SESSION['password']==session_id())
	
		echo '<a href="profile.php" style="float:right"><img src="img/profile.png" height=30 wight=30>Profile</a>';
		
	
	?>
  <?php
	
	if($_SESSION['password']!=session_id())
	
		echo '<a href="registration_page.php" style="float:right"><img src="img/reg2.png" height=30 wight=30>Register</a>';
		
	
	?>
 <a href="viewcart.php?viewcartid=<?php echo $_SESSION['uname'] ?>" style="float:right"><img src="img/cart2.png" height=30 wight=30>View Cart</a>
  </div>
 <div class="main" id=""> 
<center><img src="img/amart.png"></center><br/>
<center><img src="img/ankit.jpg" height=340  align="left" ></center><br/>
<center><img src="img/ankit.jpg" height=430 align="right"></center><br/>
<center><img src="img/about.jpg"></center><br/>
<center><h2><U><b>CONTACT NOW</b></U></h2>
<p style=" font-size: 20px; text-align: center;font-family:Papyrus;color:#484D47;border-radius:8px;width:50%">
Contact us on <a href="url.html"><u>Sam Higginbottom University of Agriculture, Technology and Sciences</u></a> NEAR by SBI Bank Naini Prayagraj.  
EMAIL ME : AWEBAMART@GMAIL.COM, ANKITSHUKLA5121999@GMAIL.COM,
MOBILE NO. +917991430269, +918858270360</p></center>
<center><img src="img/ankit.jpg" height=330 align="left" ></center><br/>
<center><p style=" font-size: 20px; text-align: center;font-family:Papyrus;color:#484D47;border-radius:8px;width:50%">
<b><B><u>Team Details (2017 BATCH)</U></b></b><BR><BR>
 <a href="ankit resume.pdf"><u><b>Ankit Shukla</b></u></a> , mobile no.+917991430269 , GMAIL ID- ankitshukla5121999@gmail.com<br>
<B>Aryan Singh</B> , mobile no.+919026924923 GMAIL ID-arayansinghraghuvanshi306@gmail.com<br>
<B>Nitesh Vishwakarma</B> , mobile no.+918318236914 , GMAIL ID-vishwakarmanitesh468@gmail.com</center>
	

	  
	  
	 
	 
	 
	 
	 
	 
	 
	 

 	  
	  
	  
</div>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</body>
</html>
<iframe src="ft.php" width="100%" ></iframe>