<?php
	session_destroy();

	setcookie('flag', null, time()+3600, '/');
	header('location: ../view/login.php');

?>