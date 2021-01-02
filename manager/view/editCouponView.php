<?php
	require_once('../php/header.php');
	require_once('../models/couponService.php');
	
	$id = $_REQUEST['id'];
	
	$data = getCouponById($id);	
?>


<html>
<head>
	<title>Edit Coupon</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<a href='viewCoupon.php'>View Coupon</a> |
<a href='searchCoupon.php'>Search Coupon</a> |
<a href='sendCouponToCustomer.php'>Send Coupon To Customer</a><br/><br/>
	
	<div id="error"></div>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Edit Coupon</legend>
			<label for="id">ID</label><br/>
			<input type="text" id="id" name="id" value="<?php echo $data['id'] ?>" readonly style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Code</label><br/>
			<input type="text" id="couponCode" name="couponCode" value="<?php echo $data['coupon_code'] ?>" readonly style="margin-top:5px;"></input><br/>
			
			<label for="id">Offer Id</label><br/>
			<input type="text" id="offerId" name="offerId" value="<?php echo $data['offer_id'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Coupon Display Message</label><br/>
			<input type="text" id="couponDisplayMessage" name="couponDisplayMessage" value="<?php echo $data['coupon_display_msg'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Status</label><br/>
			<input type="text" id="status2" name="status" value="<?php echo $data['status'] ?>" style="margin-top:5px;"></input><br/>
		  
		    <input type="button" name="button" value="Edit" onclick="editCoupon()" style="margin-top:5px;">
		</fieldset>
	</form> 
	
	<script type="text/javascript" src="../scripts/coupon.js"></script>
	
</body>
</html>

