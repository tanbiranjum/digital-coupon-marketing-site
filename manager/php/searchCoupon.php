<<<<<<< HEAD:manager/php/searchCoupon.php
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<a href='createCoupon.php'>Generate Coupon</a> 
<a href='sendCouponToCustomer.php'>Send Coupon To Customer</a><br/><br/>

<?php 

$data = "";
$err = "";
$myArray = array("","","","","");
$couponCodeSearch = "";
	
if(isset($_POST['submit'])){
	$couponCodeSearch = $_POST['couponCodeSearch'];
	
	if($couponCodeSearch == ""){ //NULL validation
		
		$err = $err . "Error: Coupon Code required<br/>";
	}
		
	if ((str_word_count($err)==0) && ($h = fopen("../database/coupon.txt", "r")) !== FALSE) //
	{
		while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
		{   
			if($data[1]==$couponCodeSearch) {
				$myArray = $data;
				break;
			}
		}

	  // Close the file
	  fclose($h);
	}
}

?>

<html>
<head>
	<title>Search Coupon</title>
</head>
<body>
	
	<?php echo $err ?>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Search Coupon</legend>
			<label for="id">Coupon Code</label><br/>
			<input type="text" id="couponCodeSearch" name="couponCodeSearch" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">ID</label><br/>
			<input type="text" id="id2" name="id2" value="<?php echo $myArray[0] ?>" readonly style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Code</label><br/>
			<input type="text" id="id" name="couponCode" value="<?php echo $myArray[1] ?>" readonly style="margin-top:5px;"></input><br/>
			
			<label for="id">Offer Id</label><br/>
			<input type="number" id="id" name="offerId" value="<?php echo $myArray[2] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Display Message</label><br/>
			<input type="text" id="id" name="couponDisplayMessage" value="<?php echo $myArray[3] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Status</label><br/>
			<input type="text" id="id" name="status" value="<?php echo $myArray[4] ?>" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

=======
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<a href='createCoupon.php'>Generate Coupon</a> |
<a href='sendCouponToCustomer.php'>Send Coupon To Customer</a><br/><br/>

<?php 

$data = "";
$err = "";
$myArray = array("","","","","");
$couponCodeSearch = "";
	
if(isset($_POST['submit'])){
	$couponCodeSearch = $_POST['couponCodeSearch'];
	
	if($couponCodeSearch == ""){
		$err = $err . "Coupon Code required<br/>";
	}
		
	if ((str_word_count($err)==0) && ($h = fopen("coupon.txt", "r")) !== FALSE) 
	{
		while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
		{   
			if($data[1]==$couponCodeSearch) {
				$myArray = $data;
				break;
			}
		}

	  // Close the file
	  fclose($h);
	}
}

?>

<html>
<head>
	<title>Search Coupon</title>
</head>
<body>
	
	<?php echo $err ?>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Search Coupon</legend>
			<label for="id">Coupon Code</label><br/>
			<input type="text" id="couponCodeSearch" name="couponCodeSearch" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">ID</label><br/>
			<input type="text" id="id2" name="id2" value="<?php echo $myArray[0] ?>" readonly style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Code</label><br/>
			<input type="text" id="id" name="couponCode" value="<?php echo $myArray[1] ?>" readonly style="margin-top:5px;"></input><br/>
			
			<label for="id">Offer Id</label><br/>
			<input type="text" id="id" name="offerId" value="<?php echo $myArray[2] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Display Message</label><br/>
			<input type="text" id="id" name="couponDisplayMessage" value="<?php echo $myArray[3] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Status</label><br/>
			<input type="text" id="id" name="status" value="<?php echo $myArray[4] ?>" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

>>>>>>> remotes/upstream/main:manager/searchCoupon.php
