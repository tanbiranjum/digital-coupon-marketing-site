<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<a href='createOffer.php'>Create Offer</a> <br/><br/>

<?php 

if (($h = fopen("offer.txt", "r")) !== FALSE) 
{
    echo "<table >";
	echo "<tr>";
		echo "<td>ID</td><td>Offer Name</td><td>Offer Type</td><td>Start date</td><td>End date</td><td>Discount Amount</td>
		<td>Minimum Purchase Amount</td><td>Action</td>";
	echo "</tr>";
	  
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
    {   
      echo "<tr>";
          echo "<td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>{$data[3]}</td><td>{$data[4]}</td>
		  <td>{$data[5]}</td><td>{$data[6]}</td><td><a href='editOffer.php?id={$data[0]}'>Edit</a></td>";
      echo "</tr>";
    }
    echo "</table>";

  // Close the file
  fclose($h);
}

?>

