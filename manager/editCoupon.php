<?php
	$data = "";
	$err = "";
	
	$id = $_REQUEST['id'];

	$couponFile = "coupon.txt";
	$all_lines = file($couponFile);
	$myArray = explode(',', $all_lines["$id"-1]);

	if(isset($_POST['submit'])){
		$id2 = $_POST['id2'];
		$couponCode = $_POST['couponCode'];
		$offerId = $_POST['offerId'];
		$couponDisplayMessage = $_POST['couponDisplayMessage'];
		$status = $_POST['status'];
		
		if($id == ""){
			$err = $err . "Id field required<br/>";
		}  if(empty($offerId)) {
			$err = $err . "offerId required<br/>";
		} if(empty($couponDisplayMessage)) {
			$err = $err . "Coupon Display Message required<br/>";
		}  
		
		if(str_word_count($err)==0){
			$update = $id2.",".$couponCode.",".$offerId.",".$couponDisplayMessage.",".$status."\n";
			// Make the change to line in array
			$all_lines["$id"-1] = $update; 
			// Put the lines back together, and write back into txt file
			file_put_contents($couponFile, implode("", $all_lines));			
			
			header('location:viewCoupon.php');
		}
	} 
?>



<html>
<head>
	<title>Edit Coupon</title>
</head>
<body>
	
	<?php echo $err ?>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Edit Coupon</legend>
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

