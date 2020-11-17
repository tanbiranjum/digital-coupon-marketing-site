<?php
	$data = "";
	$err = "";

	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$offerId = $_POST['offerId'];
		$couponDisplayMessage = $_POST['couponDisplayMessage'];
		$couponCount = $_POST['couponCount'];
		
		if($id == ""){
			$err = $err . "Id field required<br/>";
		}  if(empty($offerId)) {
			$err = $err . "offerId required<br/>";
		} if(empty($couponDisplayMessage)) {
			$err = $err . "Coupon Display Message required<br/>";
		} if(empty($couponCount)) {
			$err = $err . "Coupon Count required<br/>";
		}  
		
		if(str_word_count($err)==0) {
			$couponFile = "coupon.txt";
			$all_lines = file($couponFile);
			
			while($couponCount>0) {
				$couponCode = uniqid();
				$update = $id.",".$couponCode.",".$offerId.",".$couponDisplayMessage.",Free\n";
				// Make the change to line in array
				$all_lines["$id"-1] = $update; 
				// Put the lines back together, and write back into txt file
				file_put_contents($couponFile, implode("", $all_lines));				
				
				$all_lines = file($couponFile);
				$myArray = explode(',', $all_lines["$id"-1]);
				$id = $id + 1;
				$couponCount = $couponCount - 1;
			}			
			
			header('location:viewCoupon.php');
		}
	} 
?>



<html>
<head>
	<title>Generate Coupon</title>
</head>
<body>

<a href='searchCoupon.php'>Search Coupon</a> |
<a href='sendCouponToCustomer.php'>Send Coupon To Customer</a><br/><br/>
	
	<?php echo $err ?>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Generate Coupon</legend>
			<label for="id">Start ID</label><br/>
			<input type="number" id="id" name="id" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Offer ID</label><br/>
			<input type="text" id="id" name="offerId" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Display Message</label><br/>
			<input type="text" id="id" name="couponDisplayMessage" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Total Coupon</label><br/>
			<input type="number" id="id" name="couponCount" value="" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

