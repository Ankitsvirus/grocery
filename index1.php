<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
            var picPaths = ['images/1.jpg','images/2.jpg','images/3.jpg','images/4.jpg','images/5.jpg'];
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
                setTimeout(swapImage,2000);
            }

            window.onload=function() {
                imgCont = document.getElementById('imgBanner');
                swapImage();
            }
 </script>
<link rel="stylesheet" href="style3.css">
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px;
	border-radius: 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color:#333; 
    color: white; 
    
}
.button1:hover {
    background-color: red;
    color: white;
}

</style>
</head>
<body>
</head>
<body >

<div class="navbar">
  <a href="#home" style="font-size:1.5em; background-color: #4CAF50;">Barrackpore Grocery Shop</a>
  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="login.php" style="float:right">Login</a>
  <a href="registration_page.php" style="float:right">Register</a>
  <a href="#" style="float:right">View Cart</a>
  
  
</div>
		
<div class="main" id="">
 <ul>
  <li><a class="active" href="#home">Select Product Type</a></li>
  <li><a href="action.php?action_id=<?php echo "RICE";?>">RICE</a></li>
  <li><a href="action.php?action_id=<?php echo "OILS";?>">OILS & GHEE</a></li>
  <li><a href="action.php?action_id=<?php echo "MASALAS";?>">MASALAS & SPICES</a></li>
  <li><a href="action.php?action_id=<?php echo "SAUCES";?>">SAUCES & VINIGAR</a></li>
  <li><a href="action.php?action_id=<?php echo "WHEAT";?>">WHEAT FLOR</a></li>
  <li><a href="action.php?action_id=<?php echo "DALS";?>">DALS & BEANS</a></li>
  <li><a href="action.php?action_id=<?php echo "DRY";?>">DRY FRUIT</a></li>
  <li><a href="action.php?action_id=<?php echo "TEA";?>">TEA & COFFIE</a></li>
  <li><a href="action.php?action_id=<?php echo "MINERAL";?>">MINERAL WATER</a></li>
  <li><a href="action.php?action_id=<?php echo "DETERGENT";?>">DETERGENT</a></li>
  <li><a href="action.php?action_id=<?php echo "CLEANERS";?>">CLEANERS</a></li>
  <li><a href="action.php?action_id=<?php echo "SKIN";?>">SKIN CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "HAIR";?>">HAIR CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "PERSONAL";?>">PERSONAL CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "SHAVING";?>">SHAVING NEEDS</a></li>
  <li><a href="action.php?action_id=<?php echo "COSMETICS";?>">COSMETICS</a></li>
  <li><a href="action.php?action_id=<?php echo "DEOS";?>">DEOS & PERFUMES</a></li>
</ul>

<div style="margin-left:25%;padding:60px 16px;height:1000px;">
		
		<div>
            <center><img id="imgBanner" class="imageSlide" src="" alt="" width=900 height=300/></center>
        </div>        
       
</div>
</div>

</body>
</html>
