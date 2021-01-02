<?php 
	require_once('../php/header.php');
	require_once('../models/couponService.php');
	
	
$data = "";
$err = "";
$couponCodeSearch = "";
	
if(isset($_POST['submit'])){
	$couponCodeSearch = $_POST['couponCodeSearch'];
	
	if($couponCodeSearch == ""){
		$err = $err . "Coupon Code required<br/>";
	}
		
	if ((str_word_count($err)==0)) 
	{
		$data = getCouponByCouponCode($couponCodeSearch);	
		
		if($data==null) {
			$err = $err . "No data found with the provided coupon code";
		}	
	}
}

?>

<html>
<head>
	<title>Search Coupon</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<a href='viewCoupon.php'>View Coupon</a> |
	<a href='createCouponView.php'>Generate Coupon</a> |
	<a href='sendCouponToCustomer.php'>Send Coupon To Customer</a><br/><br/>
	
	<div id="error"><?php echo $err ?></div><br/>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Search Coupon</legend>
			<label for="id">Coupon Code</label><br/>
			<input type="text" id="couponCodeSearch" name="couponCodeSearch" value="" style="margin-top:5px;"></input><br/>
			
			<?php if($data!="") { ?>
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
			
			<?php } ?>
		    <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

