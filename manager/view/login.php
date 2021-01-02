<?php
	
	$data = '';
	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'null'){
			$data = "null submission...";
		}

		if($_REQUEST['msg'] == 'invalid'){
			$data = "invalid username/password";
		}

		if($_REQUEST['msg'] == 'login_first'){
			$data = "please login first...";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>	
</head>
<body>
	<div id="error" style="color:red"><?php echo $data ?></div>
	<form method="post" action="../php/loginCheck.php">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="userName"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>