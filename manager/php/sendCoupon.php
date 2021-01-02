<?php

	require_once('../php/header.php');
	require_once('../models/couponService.php');
	
	$data = $_REQUEST['couponData'];
	$json = json_decode($data);

	$couponId = $json->couponId;
	$customerId = $json->customerId; 
	
	echo $couponId;
	
	sendCouponToCustomer($couponId);
?>


