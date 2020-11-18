<?php

$id = $_REQUEST['id'];

$customerFile = "customer.txt";
$all_lines = file($customerFile);
$myArray = explode(',', $all_lines["$id"-1]);
?>


<html>
<head>
	<title>Customer Detail</title>
</head>
<body>
	
	<hr>Customer Detail<hr><br/>

	<table>
		<tr><td>ID</td><td></td><td><?php echo $myArray[0] ?></td></tr>
		<tr><td>First Name</td><td></td><td><?php echo $myArray[1] ?></td></tr>
		<tr><td>Last Name</td><td></td><td><?php echo $myArray[2] ?></td></tr>
		<tr><td>Address</td><td></td><td><?php echo $myArray[3] ?></td></tr>
		<tr><td>Age</td><td></td><td><?php echo $myArray[4] ?></td></tr>
	</table>
	
	<hr>Transaction History<hr><br/>
	
	<?php 

	if (($h = fopen("customer_transaction.txt", "r")) !== FALSE) 
	{
		echo "<table><tr></tr>";
		echo "<tr>";
			echo "<td>ID</td><td>Product ID</td><td>Quantity</td><td>Price</td><td>Total Price</td>
			<td>Date</td>";
		echo "</tr>";
		  
		while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
		{   
			if($data[1]==$id) {
				echo "<tr>";
					echo "<td>{$data[0]}</td><td>{$data[2]}</td><td>{$data[3]}</td><td>{$data[4]}</td>
					  <td>{$data[5]}</td><td>{$data[6]}</td>";
				echo "</tr>";	
			}		  
		}
		echo "</table>";

	  // Close the file
	  fclose($h);
	}

	?>
	
</body>
</html>

