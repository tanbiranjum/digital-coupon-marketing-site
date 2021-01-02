<?php

	require_once('db.php');	

	function getAllProduct(){

		$conn = getConnection();
		$sql = "select * from product;";
		$result = mysqli_query($conn, $sql);

		$product = array();

		while($data = mysqli_fetch_assoc($result)){
			array_push($product, $data);
		}

		return $product;
	}	

?>