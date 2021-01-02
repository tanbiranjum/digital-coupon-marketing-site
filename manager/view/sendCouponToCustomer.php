<?php 
	require_once('../php/header.php');
	require_once('../models/couponService.php');
	require_once('../models/customerService.php');

	$records = getAllActiveCoupon();
	
	$customerlist = getAllCustomer();
?>

<html>
<head>
	<title>Send Coupon To Customer</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<a href='viewCoupon.php'>View Coupon</a> |
<a href='createCouponView.php'>Generate Coupon</a>  |
<a href='searchCoupon.php'>Search Coupon</a><br/><br/>
	
	<div id="error"></div>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Send Coupon To Customer</legend>
			
			<label for="id">Customer ID</label><br/>			
			
			<select id="customerId">
				<option value='' disabled selected>-- Select Customer --</option>
				<?php
					foreach ($customerlist as $data) 
					{
						echo "<option value='". $data['id'] ."'>" ."(".$data['id'] .") " .$data['first_name'] .$data['last_name']."</option>"; 
					}	
				?>  
			</select>
			
			<br/><br/>
			<label for="id">Coupon Code</label><br/>

			<select id="couponId">
				<option value='' disabled selected>-- Select Coupon --</option>
				<?php
					while($data = mysqli_fetch_array($records))
					{
						echo "<option value='". $data['id'] ."'>" .$data['coupon_code'] ."</option>"; 
					}	
				?>  
			</select>	
			<br/>
			<input type="button" name="button" value="Send" onclick="sendCoupon()" style="margin-top:5px;">
		</fieldset>
	</form> 
	
	<script type="text/javascript" src="../scripts/coupon.js"></script>
	
</body>
</html>

