<?php 

require_once('../php/header.php');

session_start();

?>
<html>
	<head>
		<title>E Shop</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<table border="1" style="border-collapse:collapse" width="1000px;">
			<tr rowspan="4" align="center">
				<th colspan="4"><h1>Coupon Management System</h1></th>
			</tr>
			<tr valign="top">
				<td style="width:20%;">
					<br/>
					<ul style="list-style-type:none;">
						<li><a href="viewOffer.php">Offers</a></li>
						<li><a href="viewCustomer.php">Customers</a></li>
						<li><a href="viewCustomerPurchaseHistory.php">Customer Tranasction</a></li>							
						<li><a href="viewProduct.php">Products</a></li>	
						<li><a href="viewCoupon.php">Coupons</a></li>		
						<li><a href="../php/logout.php">logout</a></li>	
					</ul> 					 
					<br/><br/><br/><br/><br/><br/><br/>						
				</td>
				<td>
					<h1>Welcome Home! <?php echo $_SESSION['flag']?></h1>
				</td>						
			</tr>			
			<tr rowspan="4" align="center">				
				<td colspan="4">Copyright</td>
			</tr>
		</table>
	</body>
</html> 

