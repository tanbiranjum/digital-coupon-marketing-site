<?php

	require_once('db.php');	

	function getAllCoupon(){

		$conn = getConnection();
		$sql = "select * from coupon;";
		$result = mysqli_query($conn, $sql);

		$coupon = array();

		while($data = mysqli_fetch_assoc($result)){
			array_push($coupon, $data);
		}

		return $coupon;
	}
	
	function getAllActiveCoupon(){

		$conn = getConnection();
		$sql = "select * from coupon where status='ACTIVE'";
		$result = mysqli_query($conn, $sql);

		return $result;
	}

	function getCouponById($id){

		$conn = getConnection();
		$sql = "select * from coupon where id=".$id;
		$result = mysqli_query($conn, $sql);

		$coupon = mysqli_fetch_assoc($result);

		return $coupon;
	}

	function getCouponByCouponCode($couponCodeSearch){

		$conn = getConnection();
		$sql = "select * from coupon where `coupon_code`='".$couponCodeSearch."'";
		$result = mysqli_query($conn, $sql);

		$coupon = mysqli_fetch_assoc($result);

		return $coupon;
	}	
	
	
	function insertCoupon($couponCode, $offerId, $couponDisplayMsg, $status){

		$conn = getConnection();
		$createdBy = $_COOKIE['flag'];
		$sql = "insert into coupon(`coupon_code`, `offer_id`, `coupon_display_msg`, `status`,`created_by`) 
		values('{$couponCode}', '{$offerId}', '{$couponDisplayMsg}', '{$status}','{$createdBy}')";
  	 
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}
	
	function updateCoupon($id, $offerId, $couponDisplayMsg, $status){

		$conn = getConnection();
		$sql = "update coupon set  `offer_id`='{$offerId}', `coupon_display_msg`='{$couponDisplayMsg}',
		`status`='{$status}' where id=".$id;
  	 
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			throw new Exception('Coupon Update failed');
		}
	}
	
	function deleteCoupon($id){

		$conn = getConnection();
		$sql = "delete from coupon where id=".$id;
  	 
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			throw new Exception('Coupon delete failed');
		}
	}
	
	function sendCouponToCustomer($id){

		$conn = getConnection();
		$sql = "update coupon set `status`='SENT' where id=".$id;
  	 
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			throw new Exception('Coupon Update failed');
		}
	}

?>