<?php 

session_start();  //

if(isset($_SESSION['flag'])){  //
?>
<html>
	<head>
		<title>MANAGER</title>
	</head>
	<body>
		<table border="1" style="border-collapse:collapse" width="1000px;">
			<tr rowspan="4" align="center">
				<th colspan="4" align="center"><h1>Welcome Home Page! <?php echo $_SESSION['username']?></h1>
				<a href="../php/logout.php">logout</a></th>
			</tr>
			<tr valign="top">
				<td style="width:20%;">
					<br/>
					<ul style="list-style-type:none;"> <!---ul defines an unordered(bulleted) list-->
					
						<li><a href="viewOffer.php" target="mid">Offers</a></li> <!--li tag defines a list item-->
						<!--        -->
	
						
						<li><a href="viewCustomer.php" target="mid">Customers</a></li>
						<li><a href="viewCustomerPurchaseHistory.php" target="mid">Customer Tranasction</a></li>							
						<li><a href="viewProduct.php" target="mid">Products</a></li>	
						<li><a href="viewCoupon.php" target="mid">Coupons</a></li>	
						
					</ul> 		
					
					<br/><br/><br/><br/><br/><br/><br/>	
				</td>				
				
				<td style="width:80%;height:100%" valign="top">
					<br/>
					<iframe name="mid" src="viewOffer.php" frameBorder="0" style="width:100%;height:450px"></iframe>  <!-- iframe  -->
				</td>
			</tr>			
			<tr rowspan="4" align="center">				
				<td colspan="4">Copyright</td>
			</tr>
		</table>
	</body>
</html> 

<?php

	}else{
		header('location: ../login.php?msg=login_first');  //
	}

?>