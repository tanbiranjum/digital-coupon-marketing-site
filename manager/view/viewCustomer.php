<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<?php 

if (($h = fopen("../database/customer.txt", "r")) !== FALSE) 
{
    echo "<table >";
	echo "<tr>";
		echo "<td>ID</td><td>First Name</td><td>Last Name</td><td>Address</td><td>Age</td>";
	echo "</tr>";
	  
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
    {   
      echo "<tr>";
          echo "<td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>{$data[3]}</td><td>{$data[4]}</td>";
      echo "</tr>";
    }
    echo "</table>";

  // Close the file
  fclose($h);
}

?>

