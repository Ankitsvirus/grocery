<?php
	session_start();
	if(!isset($_SESSION['name']))
		header('location:http://localhost/grocery/admin/login.php');
	$name=$_SESSION['name'];
?>
<?php if(isset($_GET['update'])){
				$update_id=$_GET['update'];
				
				$con=mysqli_connect('localhost','root');
				mysqli_select_db($con,'grocery');
				$q="select * from product where pid=$update_id";
				$result=mysqli_query($con, $q);
			}
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

</style>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Product</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style9.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
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
<head><title>Insert</title><link rel="stylesheet" type="text/css" href="style.css" /></head>
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
	<center><form action="updation.php" method="post" enctype="multipart/form-data" >
	<?php $row=mysqli_fetch_array($result); ?>
		<table border=0>
		<tr><td>Product ID: </td><td><input type="text" name="pid" readonly="readonly" value="<?php echo $row['pid'];?>" ></td></tr>
		<tr>
		<td>Product Category: </td><td><select name="category" >
			<option <?php if($row['category']=="RICE") {echo "selected";}?> value="RICE">RICE</option>
			<option <?php if($row['category']=="OILS & GHEE") {echo "selected";}?> value="OILS & GHEE">OILS & GHEE</option>
			<option <?php if($row['category']=="MASALAS & SPICES") {echo "selected";}?> value="MASALAS & SPICES">MASALAS & SPICES</option>
			<option <?php if($row['category']=="SAUCES & VINIGAR") {echo "selected";}?> value="SAUCES & VINIGAR">SAUCES & VINIGAR</option>
			<option <?php if($row['category']=="WHEAT FLOR") {echo "selected";}?> value="WHEAT FLOR">WHEAT FLOR</option>
			<option <?php if($row['category']=="DALS & BEANS") {echo "selected";}?> value="DALS & BEANS">DALS & BEANS</option>
			<option <?php if($row['category']=="DRY FRUIT") {echo "selected";}?> value="DRY FRUIT">DRY FRUIT</option>
			<option <?php if($row['category']=="TEA & COFFIE") {echo "selected";}?> value="TEA & COFFIE">TEA & COFFIE</option>
			<option <?php if($row['category']=="BISCUITS SNACK") {echo "selected";}?> value="BISCUITS SNACK">BISCUITS SNACK</option>
			<option <?php if($row['category']=="DETERGENT") {echo "selected";}?> value="DETERGENT">DETERGENT</option>
			<option <?php if($row['category']=="CLEANERS") {echo "selected";}?> value="CLEANERS">CLEANERS</option>
			<option <?php if($row['category']=="SKIN CARE<") {echo "selected";}?> value="SKIN CARE">SKIN CARE</option>
			<option <?php if($row['category']=="HAIR CARE") {echo "selected";}?> value="HAIR CARE">HAIR CARE</option>
			<option <?php if($row['category']=="PERSONAL CARE") {echo "selected";}?> value="PERSONAL CARE">PERSONAL CARE</option>
			<option <?php if($row['category']=="SHAVING NEEDS") {echo "selected";}?> value="SHAVING NEEDS">SHAVING NEEDS</option>
			<option <?php if($row['category']=="COSMETICS") {echo "selected";}?> value="COSMETICS">COSMETICS</option>
			<option <?php if($row['category']=="DEOS & PERFUMES") {echo "selected";}?> value="DEOS & PERFUMES">DEOS & PERFUMES</option>		
		</select></td>
		</tr>
		<tr>
		<td>Product Name: </td><td> <input type="text" name="pname" class="upper" value="<?php echo $row['pname'];?>" required><td>
		</tr>
		<tr>
		<td>Date of Manufacture: </td><td><input type="text" name="dom" class="datepicker" value="<?php echo $row['dom'];?>" required>
		</tr>
		
		<tr>
		<td>Best Before Date: </td><td><input type="text" name="bbd" class="datepicker" value="<?php echo $row['bbd'];?>" required>
		</tr>
		<tr>
		<td>Net Weight: </td><td><input type="text" name="net_weight" value="<?php echo $row['net_weight'];?>" required>
		</tr>
		<tr>
		<td>Price( <i class="fa fa-inr"></i> ) : </td><td><input type="text" name="price" id="pointsgiven" value="<?php echo $row['price'];?>">
		</tr>
		<tr>
		<td>Discount(%) : </td><td><input type="text" name="discount" id="pointspossible" value="<?php echo $row['discount'];?>">
		</tr>
		<tr>
		<td>Net Price( <i class="fa fa-inr"></i> ) : </td><td><input type="text" name="net_price" id="pointsperc" value="<?php echo $row['net_price'];?>">
		</tr>
		<tr>
		<td>Total Stocks: </td><td><input type="text" name="stock" value="<?php echo $row['stock'];?>">
		</tr>
		<tr>
		<tr>
		<td>Details: </td><td><textarea rows="4" cols="50" name="details" ><?php echo $row['details'];?></textarea>
		</tr>
		<tr>
		<br/><td colspan=2><center><input type="submit" value="Update" name="submit" onclick="return confirm('Are you sure?');"></center></td>
		</tr>
	</form><br/><br/>
	</table>
	
	</center>
</div>
</body>
</html>
