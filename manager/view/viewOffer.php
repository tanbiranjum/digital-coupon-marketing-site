<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>


<?php
	require_once('../php/header.php');
	require_once('../models/offerService.php');
	
	$offerlist = getAllOffer();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Offer List Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a href="manager.php">Home</a> |
	<a href="../php/logout.php">logout</a> |
	<a href='../php/createOffer.php'>Create Offer</a>

	<h3>Offer list</h3>
	
	

<?php 

if (count($offerlist)>0) 
{
    echo "<table >";
	echo "<tr>";
		echo "<th>ID</th><th>Offer Name</th><th>Offer Type</th><th>Start date</th><th>End date</th><th>Discount Amount</th>
		<th>Minimum Purchase Amount</th><th>Action</th>";
	echo "</tr>";
	  
    foreach ($offerlist as $data) 
    {   
      echo "<tr>";
          echo "<td>{$data['id']}</td><td>{$data['offer_name']}</td><td>{$data['type']}</td>
		  <td>{$data['start_date']}</td><td>{$data['end_date']}</td><td>{$data['discount_amount']}</td>
		  <td>{$data['min_purchase_amount']}</td>
		  <td><a href='../php/editOffer.php?id={$data['id']}'>Edit</a> |
		  <a href='../php/deleteOffer.php?id={$data['id']}'>Delete</a></td>";
      echo "</tr>";
    }
    echo "</table>";
}

?>
