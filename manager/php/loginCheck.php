<?php
	require_once('../models/userLoginService.php');

	if(isset($_REQUEST['submit'])){
		$userName = $_REQUEST['userName'];
		$password = $_REQUEST['password'];

		if(empty($userName) || empty($password)){
			header('location: ../view/login.php?msg=null');
		}else{
			$status = validate($userName,$password);

			if($status){
				setcookie('flag', $userName, time()+3600, '/');
				session_start();
				$_SESSION["flag"] = $userName;
				header('location: ../view/manager.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>