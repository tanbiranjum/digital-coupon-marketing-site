<?php

	require_once('../php/header.php');
	require_once('../models/couponService.php');
	
	$data = $_REQUEST['couponData'];
	$json = json_decode($data);

	$offerId = $json->offerId;
	$couponDisplayMsg = $json->displayMessage; 
	$status = $json->status; 
	$id = $json->id; 
	
	updateCoupon($id, $offerId, $couponDisplayMsg, $status);
?>


