<?php

	require_once('db.php');	

	function getAllCustomer(){

		$conn = getConnection();
		$sql = "select * from customer;";
		$result = mysqli_query($conn, $sql);

		$customer = array();

		while($data = mysqli_fetch_assoc($result)){
			array_push($customer, $data);
		}

		return $customer;
	}	
	
	function getCustomerById($id){

		$conn = getConnection();
		$sql = "select * from customer where id=".$id;
		$result = mysqli_query($conn, $sql);

		$data = mysqli_fetch_assoc($result);		

		return $data;
	}

?>