
<?php
	error_reporting(E_ALL ^ E_NOTICE);
	if (session_status !== PHP_SESSION_ACTIVE) {
		session_start();
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
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
<link rel="stylesheet" href="style4.css">
<link rel="stylesheet" href="bkp.css">
<link rel="stylesheet" href="footer.css">
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


div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
	border-radius: 5px;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 800px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
	height:250px;


}

#myImg:hover {opacity: 0.7; }
</style>

</head>

<body >

<div class="navbar">
  <a href="home.php" style="font-size:1.5em; background-color: #4CAF50;" id="myDIV2">Amart Grocery Shop</a>
  <a href="index.php"><img src="img/home2.png" height=30 wight=30>Home</a>
  <a href="contact.php?uname=<?php echo $_SESSION['uname'] ?>"><img src="img/contact.png" height=30 wight=30>Contact Us</a>
  <a href="aboutus.php">About Us</a>
  <form class="navbar-form navbar-left" action="search.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search_text">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" name="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  
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
	<?php
	$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
	$uname=$_SESSION['uname'];
	$q1="select * from cart where uname='$uname'";
	$result1=mysqli_query($con,$q1);
	$num1=mysqli_num_rows($result1);
	?>
 <a href="viewcart.php?viewcartid=<?php echo $_SESSION['uname'] ?>" style="float:right"><img src="img/cart2.png" height=30 wight=30>
  View Cart(<?php echo $num1; ?>)</a>
  
  
</div>


	
<div class="main" id="">
<center><img src="img/amart.png" style="position:relative;overflow: none;"></center>
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
  <li><a href="action.php?action_id=<?php echo "BISCUITS";?>">BISCUITS SNACK</a></li>
  <li><a href="action.php?action_id=<?php echo "DETERGENT";?>">DETERGENT</a></li>
  <li><a href="action.php?action_id=<?php echo "CLEANERS";?>">CLEANERS</a></li>
  <li><a href="action.php?action_id=<?php echo "SKIN";?>">SKIN CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "HAIR";?>">HAIR CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "PERSONAL";?>">PERSONAL CARE</a></li>
  <li><a href="action.php?action_id=<?php echo "SHAVING";?>">SHAVING NEEDS</a></li>
  <li><a href="action.php?action_id=<?php echo "COSMETICS";?>">COSMETICS</a></li>
  <li><a href="action.php?action_id=<?php echo "DEOS";?>">DEOS & PERFUMES</a></li>
  <br/><br/><br/><br/><br/><br/>
  <li><img src="gp.gif" ></li>
</ul>

	<!--<form action="search.php" method="post">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="search_text" placeholder="Search by Product name or category..." size=161 style="font-size:1em;border-radius:8px;" />
	<input type="submit" value="search" name="submit" class="btn btn-danger btn-xs" style="font-size:1.2em;">
	</form> -->
	
   
<div style="margin-left:24%;padding:30px 16px;height:500px;">
		

            <!-- <center><img id="imgBanner" class="imageSlide" src="" alt="" width=950 height=300/></center> -->
			<div class="container" style="height:500;width:950px">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/2.jpg" alt="Chania" style="height:400px;width:1000px">
        <div class="carousel-caption">
          <h3><a href="#" class="btn btn-primary btn-lg btn btn-danger">SHOP NOW</a></h3>
          
        </div>
      </div>

      <div class="item">
        <img src="images/6.png" alt="Chania" style="height:400px;width:1000px">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/3.jpg" alt="Flower" style="height:400px;width:1000px">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="images/m.jpg" alt="Flower" style="height:400px;width:1000px">
        <div class="carousel-caption">
          <h3>MASALAS & SPICES</h3>
          
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
   
      <marquee scrollamount=10>
	  <a href="show_offer.php">
	  <img src="img/sd.png" height="150px"><img src="img/dis.png" height="150px">
	  </a>
	  </marquee> 
	  
	  
	 
	 
	 
	 
	 
	 
	 
	 

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "RICE";?>">
      <img src="images/rice2.gif" alt="rice" id="myImg">
    </a>
    <div class="desc">RICE</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "OILS";?>">
      <img src="images/oils.jpg" alt="oiles & ghee" id="myImg">
    </a>
    <div class="desc">OILS & GHEE</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "MASALAS";?>">
      <img src="images/masala.jpg" alt="masalas" id="myImg">
    </a>
    <div class="desc">MASALAS & SPICES</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "SAUCES";?>">
      <img src="images/sauces.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">SAUCES & VINIGAR</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "WHEAT";?>">
      <img src="images/wheat.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">WHEAT FLOR</div>
  </div>
</div>  

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "DALS";?>">
      <img src="images/dals.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">DALS & BEANS</div>
  </div>
</div> 

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "DRY";?>">
      <img src="images/dry.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">DRY FRUIT</div>
  </div>
</div> 

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "TEA";?>">
      <img src="images/tea.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">TEA & COFFIE</div>
  </div>
</div> 

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "BISCUITS";?>">
      <img src="images/biscuit.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">BISCUITS SNACK</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "DETERGENT";?>">
      <img src="images/detergent.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">DETERGENT</div>
  </div>
</div> 	
  
<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "CLEANERS";?>">
      <img src="images/cleaners.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">CLEANERS</div>
  </div>
</div>	  
	  

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "SKIN";?>">
      <img src="images/skin.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">SKIN CARE</div>
  </div>
</div>  
	  

<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "HAIR";?>">
      <img src="images/hair.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">HAIR CARE</div>
  </div>
</div>	  


<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "PERSONAL";?>">
      <img src="images/pc.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">PERSONAL CARE</div>
  </div>
</div>

  
<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "SHAVING";?>">
      <img src="images/shave.png" alt="Mountains" id="myImg">
    </a>
    <div class="desc">SHAVING NEEDS</div>
  </div>
</div>
	   
<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "COSMETICS";?>">
      <img src="images/cosmetics.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">COSMETICS</div>
  </div>
</div>	

<!-- ==============================================================	 
<div class="responsive">
  <div class="gallery">
    <a href="action.php?action_id=<?php echo "DEOS";?>">
      <img src="images/deo.jpg" alt="Mountains" id="myImg">
    </a>
    <div class="desc">DEOS & PERFUMES</div>
  </div>
</div>  
	  
-->	 	  
	  
	  
</div>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

</body>
</html>
<iframe src="ft.php" width="100%" ></iframe>