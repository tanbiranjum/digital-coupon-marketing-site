<<<<<<< HEAD:manager/php/createOffer.php
<?php
	
	//$data = "";     
	$err = "";       //

	if(isset($_POST['submit'])){   //
		$err = "";  
		$id = $_POST['id'];
		$offerName = $_POST['offerName'];
		$type = $_POST['type'];
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
		$discountAmount = $_POST['discountAmount'];
		$minimumPurchaseAmount = $_POST['minimumPurchaseAmount'];
		
		if($id == ""){              // NULL VALIDATION
			$err = $err . "Id field required<br/>";   
		}  if(empty($offerName)) {
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
		
		if(str_word_count($err)==0){            // error count is 0    
			$offerFile = "../database/offer.txt";   
			$all_lines = file($offerFile);                     //  Lines of offer file saves in $all_lines
			$update = $id.",".$offerName.",".$type.",".$startDate.",".$endDate.",".$discountAmount.",".$minimumPurchaseAmount."\n";
			// Make the change to line in array
			$all_lines["$id"-1] = $update; 
			// Put the lines back together, and write back into txt file
			file_put_contents($offerFile, implode("", $all_lines));  //implode() function returns a string from the elements of an array
			
			//file_put_contents writes data in offer file
			
			$all_lines = file($offerFile);    //
			$myArray = explode(',', $all_lines["$id"-1]);   //breaks a string into an array
			
			header('location:../view/viewOffer.php');   //Goto the view offer page
		}
	} 
?>



<html>
<head>
	<title>Offer Detail</title>
</head>
<body>
	
	<?php echo $err ?>  <!--Show empty error -->
	
	<form action="" method="post"> <!--submited in this form -->
	
		<fieldset style="width:220px">
		<legend>Create Offer</legend>
			<label for="id">ID</label><br/>
			<input type="number" id="id" name="id" value="" style="margin-top:5px;"></input><br/> 
			
			<label for="id">Offer Name</label><br/>
			<input type="text" id="id" name="offerName" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Type</label><br/>
			<input type="text" id="id" name="type" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Start date</label><br/>
			<input type="date" id="id" name="startDate" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">End date</label><br/>
			<input type="date" id="id" name="endDate" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Discoount Amount</label><br/>
			<input type="number" id="id" name="discountAmount" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Minimum purchase Amount</label><br/>
			<input type="number" id="id" name="minimumPurchaseAmount" value="" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;"> <!--        -->
		</fieldset>
	</form> 
	
</body>
</html>

=======
<?php
	
	$data = ""; 
	$err = "";  

	if(isset($_POST['submit'])){
		$err = "";  
		$id = $_POST['id'];
		$offerName = $_POST['offerName'];
		$type = $_POST['type'];
		$startDate = $_POST['startDate'];
		$endDate = $_POST['endDate'];
		$discountAmount = $_POST['discountAmount'];
		$minimumPurchaseAmount = $_POST['minimumPurchaseAmount'];
		
		if($id == ""){
			$err = $err . "Id field required<br/>";   
		}  if(empty($offerName)) {
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
		
		if(str_word_count($err)==0){
			$offerFile = "offer.txt";
			$all_lines = file($offerFile);
			$update = $id.",".$offerName.",".$type.",".$startDate.",".$endDate.",".$discountAmount.",".$minimumPurchaseAmount."\n";
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
		<legend>Create Offer</legend>
			<label for="id">ID</label><br/>
			<input type="number" id="id" name="id" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Offer Name</label><br/>
			<input type="text" id="id" name="offerName" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Type</label><br/>
			<input type="text" id="id" name="type" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Start date</label><br/>
			<input type="date" id="id" name="startDate" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">End date</label><br/>
			<input type="date" id="id" name="endDate" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Discoount Amount</label><br/>
			<input type="number" id="id" name="discountAmount" value="" style="margin-top:5px;"></input><br/>
			
			<label for="id">Minimum purchase Amount</label><br/>
			<input type="number" id="id" name="minimumPurchaseAmount" value="" style="margin-top:5px;"></input><br/>
		  
		  <input type="submit" name="submit" value="Submit" style="margin-top:5px;">
		</fieldset>
	</form> 
	
</body>
</html>

>>>>>>> remotes/upstream/main:manager/createOffer.php
