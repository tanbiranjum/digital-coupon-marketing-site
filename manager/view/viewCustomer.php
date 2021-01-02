<?php
	require_once('../php/header.php');
	require_once('../models/customerService.php');

	$customerlist = getAllCustomer();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer List Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a href="manager.php">Home</a> |
	<a href="../php/logout.php">logout</a>

	<h3>Customer list</h3>

<?php 

if (count($customerlist)>0) 
{
    echo "<table style='width:60%;'>";
	echo "<tr>";
		echo "<th>ID</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Age</th>";
	echo "</tr>";
	  
    foreach ($customerlist as $data) 
    {   
      echo "<tr>";
          echo "<td>{$data['id']}</td><td>{$data['first_name']}</td><td>{$data['last_name']}</td>
		  <td>{$data['address']}</td><td>{$data['age']}</td>";
      echo "</tr>";
    }
    echo "</table>";
}

?>

