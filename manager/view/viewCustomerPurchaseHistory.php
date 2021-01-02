<?php
	require_once('../php/header.php');
	require_once('../models/customerTransactionService.php');

	$ct = getAllCustomerTransaction();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer Transaction List Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a href="manager.php">Home</a> |
	<a href="../php/logout.php">logout</a>

	<h3>Customer Transaction History</h3>
<?php 

if (count($ct)>0) 
{
    echo "<table>";
	echo "<tr>";
		echo "<th>ID</th><th>Customer ID</th><th>Product ID</th><th>Quantity</th><th>Price</th><th>Total Price</th>
		<th>Date</th><th>Customer Detail</th>";
	echo "</tr>";  
	
    foreach ($ct as $data) 
    {   
      echo "<tr>";
          echo "<td>{$data['id']}</td><td>{$data['customer_id']}</td><td>{$data['product_id']}</td>
		  <td>{$data['quantity']}</td><td>{$data['price']}</td><td>{$data['total_price']}</td><td>{$data['date']}</td>
		  <td><a href='customerDetail.php?id={$data['customer_id']}'>Customer Detail</a></td>";
      echo "</tr>";
    }
    echo "</table>";	
}

?>

