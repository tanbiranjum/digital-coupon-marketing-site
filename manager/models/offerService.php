<?php

	require_once('db.php');	

	function getAllOffer(){

		$conn = getConnection();
		$sql = "select * from offer;";
		$result = mysqli_query($conn, $sql);

		$offer = array();

		while($data = mysqli_fetch_assoc($result)){
			array_push($offer, $data);
		}

		return $offer;
	}	
	
	function getOfferById($id){

		$conn = getConnection();
		$sql = "select * from offer where id=".$id;
		$result = mysqli_query($conn, $sql);
		
		$data = mysqli_fetch_assoc($result);

		return $data;
	}
	
	function insertOffer($offerName, $type, $startDate, $endDate, $discountAmount, $minimumPurchaseAmount){

		$conn = getConnection();
		$createdBy = $_COOKIE['flag'];
		$sql = "insert into offer(`offer_name`, `type`, `start_date`, `end_date`,`discount_amount`,`min_purchase_amount`,`created_by`) 
		values('{$offerName}', '{$type}', '{$startDate}', '{$endDate}','{$discountAmount}','{$minimumPurchaseAmount}','{$createdBy}')";
  	 
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}
	
	function updateOffer($id, $offerName, $type, $startDate, $endDate, $discountAmount, $minimumPurchaseAmount){

		$conn = getConnection();
		$sql = "update offer set `offer_name`='{$offerName}', `type`='{$type}', `start_date`='{$startDate}', 
		`end_date`='{$endDate}',
		`discount_amount`='{$discountAmount}',`min_purchase_amount`='{$minimumPurchaseAmount}' 
		where id=".$id;
  	 
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}
	
	function deleteOffer($id){

		$conn = getConnection();
		$sql = "delete from offer where id=".$id;
		$result = mysqli_query($conn, $sql);

		return $result;
	}

?>