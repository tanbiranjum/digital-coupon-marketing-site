<?php
	require_once('../php/header.php');
?>
<html>
<head>
	<title>Generate Coupon</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<a href='viewCoupon.php'>View Coupon</a> |
<a href='searchCoupon.php'>Search Coupon</a> |
<a href='sendCouponToCustomer.php'>Send Coupon To Customer</a><br/><br/>
	
	<div id="error"></div>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Generate Coupon</legend>			
			<label for="id">Offer ID</label><br/>
			<input type="text" id="offerId" name="offerId" value="" style="margin-top:5px;"></input><br/>

			<label for="id">Coupon Display Message</label><br/>
			<input type="text" id="displayMessage" name="couponDisplayMessage" value="" style="margin-top:5px;"></input><br/>

			<label for="id">Total Coupon</label><br/>
			<input type="number" id="totalCount" name="couponCount" value="" style="margin-top:5px;"></input><br/>

			<input type="button" name="button" value="Create" onclick="createCoupon()" style="margin-top:5px;">
		</fieldset>
	</form> 
	
	<script type="text/javascript" src="../scripts/coupon.js"></script>
	
</body>
</html>




