<?php
	require_once('../php/header.php');
	require_once('../models/offerService.php');
	
	$data = "";
	$err = "";
	
	$id = $_REQUEST['id'];
	
	$offer = getOfferById($id);

	if(isset($_POST['submit'])){
		$offerName = $_POST['offerName'];
		$type = $_POST['type'];
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
		$discountAmount = $_POST['discountAmount'];
		$minimumPurchaseAmount = $_POST['minimumPurchaseAmount'];
		
		if(empty($offerName)) {
			$err = $err . "Offer name required<br/>";
		} if(empty($type)) {
			$err = $err . "Type required<br/>";
		} if(empty($startDate)) {
			$err = $err . "Start Date required<br/>";
		} if(empty($endDate)) {
			$err = $err . "End Date required<br/>";
		} if(empty($discountAmount)) {
			$err = $err . "Discount Amount required<br/>";
		} if(empty($minimumPurchaseAmount)) {
			$err = $err . "Minimum Purchase Amount required<br/>";
		}
		
		if(str_word_count($err)==0) {
			
			$result = updateOffer($id, $offerName, $type, $startDate, $endDate, $discountAmount, $minimumPurchaseAmount);
			header('location:../view/viewOffer.php');
		}
	} 
?>



<html>
<head>
	<title>Offer Detail</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"> <!--add css  -->
</head>
<body>

	<a href="../view/viewOffer.php">Back</a> |
	<a href="../php/logout.php">logout</a> 
	
	<div id="error"><?php echo $err ?></div>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Edit Offer</legend>
			<label for="id">Offer Name</label><br/>
			<input type="text" id="id" name="offerName" value="<?php echo $offer['offer_name'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Type</label><br/>
			<input type="text" id="id" name="type" value="<?php echo $offer['type'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Start date</label><br/>
			<input type="date" id="id" name="startDate" value="<?php echo $offer['start_date'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">End date</label><br/>
			<input type="date" id="id" name="endDate" value="<?php echo $offer['end_date'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Discoount Amount</label><br/>
			<input type="number" id="id" name="discountAmount" value="<?php echo $offer['discount_amount'] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Minimum purchase Amount</label><br/>
			<input type="text" id="id" name="minimumPurchaseAmount" value="<?php echo $offer['min_purchase_amount'] ?>" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

