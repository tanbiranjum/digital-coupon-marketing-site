<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<?php 

if (($h = fopen("customer_transaction.txt", "r")) !== FALSE) 
{
    echo "<table>";
	echo "<tr>";
		echo "<td>ID</td><td>Customer ID</td><td>Product ID</td><td>Quantity</td><td>Price</td><td>Total Price</td>
		<td>Date</td><td>Customer Detail</td>";
	echo "</tr>";
	  
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
    {   
      echo "<tr>";
          echo "<td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>{$data[3]}</td><td>{$data[4]}</td>
		  <td>{$data[5]}</td><td>{$data[6]}</td><td><a href='customerDetail.php?id={$data[1]}'>Customer Detail</a></td>";
      echo "</tr>";
    }
    echo "</table>";

  // Close the file
  fclose($h);
}

?>

