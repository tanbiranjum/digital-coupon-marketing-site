<?php

	require_once('../php/header.php');
	require_once('../models/couponService.php');
	
	$data = $_REQUEST['couponData'];
	$json = json_decode($data);

	$id = $json->id; 
	
	deleteCoupon($id);
?>


