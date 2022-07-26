<?php
	session_start();
	if(!isset($_SESSION['name']))
      //header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<style>
input[type=text], select, textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 2px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:1.5em;
}

input[type=submit]:hover {
    background-color: #45a049;
}
td{
	font-size:1.3em;
	font-family:Arial, Helvetica, sans-serif;
}	
form{
	margin:0;
	position: relative;
	right: 0px; top: 80px; left: 0px;  
}

</style>
<html>
<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert Product</title>
  <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $("#form").hide(100).show(1000);
  } );
 
  $( function() {
    $(".datepicker").datepicker({
        dateFormat: 'mm/yy'
        });
  } );
  $(function() {
    $('.upper').keyup(function() {
        this.value = this.value.toUpperCase();
    });
});
$(function(){
    
    $('#pointspossible').on('input', function() {
      calculate();
    });
    $('#pointsgiven').on('input', function() {
     calculate();
    });
    function calculate(){
        var pPos = parseInt($('#pointspossible').val()); 
        var pEarned = parseInt($('#pointsgiven').val());
        var perc="";
	var res="";
        if(isNaN(pPos) || isNaN(pEarned)){
            perc=" ";
	    res=" ";
           }else{
           perc = ((pPos/100) * pEarned).toFixed(3);
	   res = Math.round((pEarned - perc));
           }
        
        $('#pointsperc').val(res);
    }

});
  </script>
</head>
<head><title>Insert</title><link rel="stylesheet" type="text/css" href="style9.css" /></head>
<body>

<ul class="absolute">
	<li ><a href="logout.php">Logout</a></li>
	<li ><a href="feedback.php">Feedback</a></li>
	<li ><a href="vieworders.php" >View Orders</a></li>
	<li ><a href="viewcategory.php">View Product</a></li>
	<li><a href="insert.php">Insert New Product</a></li>
	<li><a class="active" href="index.php">Home</a></li>  
	
</ul>

<div>
	<center><form action="insertion.php" id="form" method="post" enctype="multipart/form-data" >
		<table border=0>
		<tr>
		<td>Product Category: </td><td><select name="category">
			<option value="RICE">RICE</option>
			<option value="OILS & GHEE">OILS & GHEE</option>
			<option value="MASALAS & SPICES">MASALAS & SPICES</option>
			<option value="SAUCES & VINIGAR">SAUCES & VINIGAR</option>
			<option value="WHEAT FLOR">WHEAT FLOR</option>
			<option value="DALS & BEANS">DALS & BEANS</option>
			<option value="DRY FRUIT">DRY FRUIT</option>
			<option value="TEA & COFFIE">TEA & COFFIE</option>
			<option value="BISCUITS SNACK">BISCUITS SNACK</option>
			<option value="DETERGENT">DETERGENT</option>
			<option value="CLEANERS">CLEANERS</option>
			<option value="SKIN CARE">SKIN CARE</option>
			<option value="HAIR CARE">HAIR CARE</option>
			<option value="PERSONAL CARE">PERSONAL CARE</option>
			<option value="SHAVING NEEDS">SHAVING NEEDS</option>
			<option value="COSMETICS">COSMETICS</option>
			<option value="DEOS & PERFUMES">DEOS & PERFUMES</option>		
		</select></td>
		</tr>
		<tr>
		<td>Product Name: </td><td> <input type="text" name="pname" class="upper" required><td>
		</tr>
		<tr>
		<td>Date of Manufacture: </td><td><input type="text" name="dom" class="datepicker" value="NA" required>
		</tr>
		
		<tr>
		<td>Best Before Date: </td><td><input type="text" name="bbd" class="datepicker" value="NA" required>
		</tr>
		<tr>
		<td>Net Weight: </td><td><input type="text" name="net_weight" required>
		</tr>
		<tr>
		<td>Price( <i class="fa fa-inr"></i> ) : </td><td><input type="text" name="price" id="pointsgiven">
		</tr>
		<tr>
		<td>Discount(%) : </td><td><input type="text" name="discount" id="pointspossible">
		</tr>
		<tr>
		<td>Net Price( <i class="fa fa-inr"></i> ) : </td><td><input type="text" name="net_price" id="pointsperc" >
		</tr>
		<tr>
		<td>Total Stocks: </td><td><input type="text" name="stock" >
		</tr>
		<tr>
		<tr>
		<td>Details: </td><td><textarea rows="4" cols="50" name="details" ></textarea>
		</tr>
		<tr>
		<td>Upload Product Image: </td><td><input type="file" name="image"> </div></td>
		</tr>
		<tr>
		<br/><td colspan=2><center><input type="submit" value="Save" name="submit" onclick="return confirm('Record inserted');"></center></td>
		</tr>
	</form><br/><br/>
	</table>
	
	</center>
</div>
</body>
</html>
