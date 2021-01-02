<?php
	require_once('../php/header.php');
	require_once('../models/offerService.php');
	
		
	$data = "";     
	$err = "";       
	$id = $_REQUEST['id'];
	$data = deleteOffer($id); 
	
	header('location: ../view/viewOffer.php');

?>

