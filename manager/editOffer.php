<?php
	$data = "";
	$err = "";
	
	$id = $_REQUEST['id'];

	$offerFile = "offer.txt";
	$all_lines = file($offerFile);
	$myArray = explode(',', $all_lines["$id"-1]);

	if(isset($_POST['submit'])){
		$id2 = $_POST['id2'];
		$offerName = $_POST['offerName'];
		$type = $_POST['type'];
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
		$discountAmount = $_POST['discountAmount'];
		$minimumPurchaseAmount = $_POST['minimumPurchaseAmount'];
		
		if($id2 == ""){
			$err = $err . "Id field required<br/>";
		} if(empty($offerName)) {
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
			$update = $id2.",".$offerName.",".$type.",".$startDate.",".$endDate.",".$discountAmount.",".$minimumPurchaseAmount."\n";
			// Make the change to line in array
			$all_lines["$id"-1] = $update; 
			// Put the lines back together, and write back into txt file
			file_put_contents($offerFile, implode("", $all_lines));
			
			$all_lines = file($offerFile);
			$myArray = explode(',', $all_lines["$id"-1]);
			
			header('location:viewOffer.php');
		}
	} 
?>



<html>
<head>
	<title>Offer Detail</title>
</head>
<body>
	
	<?php echo $err ?>
	<form action="" method="post">
		<fieldset style="width:220px">
		<legend>Edit Offer</legend>
			<label for="id">ID</label><br/>
			<input type="number" id="id" name="id2" value="<?php echo $myArray[0] ?>" readonly style="margin-top:5px;"></input><br/>
			
			<label for="id">Offer Name</label><br/>
			<input type="text" id="id" name="offerName" value="<?php echo $myArray[1] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Type</label><br/>
			<input type="text" id="id" name="type" value="<?php echo $myArray[2] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Start date</label><br/>
			<input type="date" id="id" name="startDate" value="<?php echo $myArray[3] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">End date</label><br/>
			<input type="date" id="id" name="endDate" value="<?php echo $myArray[4] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Discoount Amount</label><br/>
			<input type="number" id="id" name="discountAmount" value="<?php echo $myArray[5] ?>" style="margin-top:5px;"></input><br/>
			
			<label for="id">Minimum purchase Amount</label><br/>
			<input type="text" id="id" name="minimumPurchaseAmount" value="<?php echo $myArray[6] ?>" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

