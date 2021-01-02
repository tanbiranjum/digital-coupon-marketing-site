<?php
require_once('../php/header.php');
require_once('../models/customerService.php');
require_once('../models/customerTransactionService.php');
$id = $_REQUEST['id'];

$customer = getCustomerById($id);
$ct = getCustomerTransactionByCustomerId($id);
?>


<html>
<head>
	<title>Customer Detail</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a href="../view/viewCustomerPurchaseHistory.php">Back</a> |
	<a href="../php/logout.php">logout</a>
	
	<hr>Customer Detail<hr><br/>

	<table>
		<tr><td>ID</td><td><?php echo $customer['id'] ?></td></tr>
		<tr><td>First Name</td><td><?php echo $customer['first_name'] ?></td></tr>
		<tr><td>Last Name</td><td><?php echo $customer['last_name'] ?></td></tr>
		<tr><td>Address</td><td><?php echo $customer['address'] ?></td></tr>
		<tr><td>Age</td><td><?php echo $customer['age'] ?></td></tr>
	</table>
	
	<br/>
	<hr>Transaction History<hr><br/>
	
	<?php 

	if (count($ct)>0) 
	{
		echo "<table>";
		echo "<tr>";
			echo "<th>ID</th><th>Customer ID</th><th>Product ID</th><th>Quantity</th><th>Price</th><th>Total Price</th>
			<th>Date</th>";
		echo "</tr>";  
		
		foreach ($ct as $data) 
		{   
		  echo "<tr>";
			  echo "<td>{$data['id']}</td><td>{$data['customer_id']}</td><td>{$data['product_id']}</td>
			  <td>{$data['quantity']}</td><td>{$data['price']}</td><td>{$data['total_price']}</td><td>{$data['date']}</td>";
		  echo "</tr>";
		}
		echo "</table>";	
	}

	?>
	
</body>
</html>

