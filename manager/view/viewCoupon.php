<?php
	require_once('../php/header.php');
	require_once('../models/couponService.php');

	$couponlist = getAllCoupon();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Coupon List Page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<a href='createCouponView.php'>Generate Coupon</a> |
	<a href='searchCoupon.php'>Search Coupon</a> |
	<a href='sendCouponToCustomer.php'>Send Coupon To Customer</a> |
	<a href="manager.php">Home</a> |
	<a href="../php/logout.php">logout</a>

	<h3>Coupon list</h3>

<?php 

if (count($couponlist)>0) 
{
    echo "<table>";
	
	echo "<tr>";
		echo "<th>ID</th><th>Coupon code</th><th>Offer ID</th><th>Coupon Display Message</th><th>Status</th><th>Action</th>";
	echo "</tr>";
	  
    foreach ($couponlist as $data) 
    {   
      echo "<tr>";
          echo "<td>{$data['id']}</td><td>{$data['coupon_code']}</td><td>{$data['offer_id']}</td>
		  <td>{$data['coupon_display_msg']}</td><td>{$data['status']}</td>
		  <td><a href='editCouponView.php?id={$data['id']}'>Edit</a> | <a href='deleteCouponView.php?id={$data['id']}'>Delete</a></td>";
      echo "</tr>";
    }
    echo "</table>";
}

?>

