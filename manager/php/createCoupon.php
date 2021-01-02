<?php

	require_once('../php/header.php');
	require_once('../models/couponService.php');
	
	$data = $_REQUEST['couponData']; //comes from js in string format
	$json = json_decode($data); //json format

	$couponCount = $json->totalCount;
	while($couponCount>0) {
		$couponCode = uniqid();	

		$offerId = $json->offerId;
		$couponDisplayMsg = $json->displayMessage; 
		
		insertCoupon($couponCode, $offerId, $couponDisplayMsg, 'ACTIVE');
		$couponCount = $couponCount - 1;
	}		
?>


