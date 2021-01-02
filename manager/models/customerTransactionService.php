<?php

	require_once('db.php');	

	function getAllCustomerTransaction(){

		$conn = getConnection();
		$sql = "select * from customer_transaction;";
		$result = mysqli_query($conn, $sql);

		$ct = array();

		while($data = mysqli_fetch_assoc($result)){
			array_push($ct, $data);
		}

		return $ct;
	}	
	
	function getCustomerTransactionByCustomerId($id){

		$conn = getConnection();
		$sql = "select * from customer_transaction where customer_id=".$id;
		$result = mysqli_query($conn, $sql);

		$ct = array();

		while($data = mysqli_fetch_assoc($result)){
			array_push($ct, $data);
		}

		return $ct;
	}	

?>

