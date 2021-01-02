

<?php
	require_once('../php/header.php');
	require_once('../models/productService.php');

	$productlist = getAllProduct();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product List Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a href="manager.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>Product list</h3>

<?php 

if (count($productlist)>0) 
{
    echo "<table>";
	echo "<tr>";
		echo "<th>ID</th><th>Product Name</th><th>Quantity</th><th>Price</th><th>Product Type</th>";
	echo "</tr>";
	  
    foreach ($productlist as $data) 
    {   
      echo "<tr>";
          echo "<td>{$data['id']}</td><td>{$data['product_name']}</td><td>{$data['quantity']}</td>
		  <td>{$data['price']}</td><td>{$data['product_type']}</td>";
      echo "</tr>";
    }
    echo "</table>";

}

?>

</body>
</html>

<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<a href="manager.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>Product list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Product Name</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Product Type</td>			
		</tr>

		<?php 
			for($i=0; $i < count($productlist); $i++) {
		?>
				<tr>
					<td><?= $productlist[$i]['id'] ?></td>
					<td><?= $productlist[$i]['product_name'] ?></td>
					<td><?= $productlist[$i]['quantity'] ?></td>
					<td><?= $productlist[$i]['price'] ?></td>
					<td><?= $productlist[$i]['product_type'] ?></td>					
				</tr>

		<?php } ?>

	</table>
</body>
</html>


-->



