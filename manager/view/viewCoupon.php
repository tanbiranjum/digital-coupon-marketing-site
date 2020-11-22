<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

<a href='../php/createCoupon.php'>Generate Coupon</a> 
<a href='../php/searchCoupon.php'>Search Coupon</a> 
<a href='../php/sendCouponToCustomer.php'>Send Coupon To Customer</a><br/><br/>

<?php 

if (($h = fopen("../database/coupon.txt", "r")) !== FALSE) 
{
    echo "<table>";
	echo "<tr>";
		echo "<td>ID</td><td>Coupon Code</td><td>Offer ID</td><td>Coupon Display Message</td>
		<td>Status</td><td>Action</td>";
	echo "</tr>";
	  
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
    {   
      echo "<tr>";
          echo "<td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>{$data[3]}</td>
		  <td>{$data[4]}</td><td><a href='../php/editCoupon.php?id={$data[0]}'>Edit</a>";
      echo "</tr>";
    }
    echo "</table>";

  // Close the file
  fclose($h);
}

?>

