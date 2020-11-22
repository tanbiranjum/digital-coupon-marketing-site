<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<?php 

$data = "";
$err = "";
$myArray = array("","","","",""); //
$couponCode = "";
	
if(isset($_POST['submit'])){
	$couponCode = $_POST['couponCode'];
	$customerId = $_POST['customerId'];
	
	if($couponCode == ""){
		$err = $err . "Error: Coupon Code required<br/>"; //NULL validation
	}
	
	if($customerId == ""){
		$err = $err . "Error: Customer ID required<br/>";  //NULL validation
	}
	
	if ((str_word_count($err)==0) && ($h = fopen("../database/coupon.txt", "r")) !== FALSE) 
	{
		while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
		{   
			if($data[1]==$couponCode) {
				$myArray = $data;
				$couponFile = "../database/coupon.txt";
				$all_lines = file($couponFile);
				
				$update = $myArray[0].",".$myArray[1].",".$myArray[2].",".$myArray[3].",USED\n";
				// Make the change to line in array
				$all_lines["$myArray[0]"-1] = $update;
				// Put the lines back together, and write back into txt file
				file_put_contents($couponFile, implode("", $all_lines));			
				
				header('location:../view/viewCoupon.php');
				
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
	<title>Send Coupon To Customer</title>
</head>
<body>

<a href='createCoupon.php'>Generate Coupon</a> 
<a href='searchCoupon.php'>Search Coupon</a><br/><br/>
	
	<?php echo $err ?> <!--Empty error-->
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Send Coupon To Customer</legend>
			
			<label for="id">Customer ID</label><br/>
			<input type="text" id="id2" name="customerId" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Code</label><br/>
			<input type="text" id="id" name="couponCode" value="" style="margin-top:5px;"></input><br/>			
			
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

