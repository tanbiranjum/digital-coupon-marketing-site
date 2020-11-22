<<<<<<< HEAD:manager/php/logout.php
<?php
	
	session_start();
	session_destroy();

	
	header('location: ../login.php');

=======
<?php
	
	session_start();
	session_destroy();

	
	header('location: login.php');

>>>>>>> remotes/upstream/main:manager/logout.php
?>