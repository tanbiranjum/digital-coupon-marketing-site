<?php

	require_once('db.php');

	function validate($userName,$password){
		
		console.log($userName." ".$password);	
		$conn = getConnection();
		$sql = "select * from login_user where user_name='{$userName}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	/*function getById($id){

		$conn = getConnection();
		$sql = "select * from employees where id=".$id;
		$result = mysqli_query($conn, $sql);

		$employee =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($employee, $data);//array_push() function inserts one or more elements to the end of an array
		}

		return $employee;
	}


	function getAllEmployee(){

		$conn = getConnection();
		$sql = "select * from employees";
		$result = mysqli_query($conn, $sql);

		$employee =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($employee, $data);
		}

		return $employee;
	}


	function insertEmployees($employee){

		$conn = getConnection();
		$sql = "insert into employees(`employeename`, `contactno`, `username`, `password`) values('{$employee['employeename']}', '{$employee['contactno']}', '{$employee['username']}', '{$employee['password']}')";
  
         //$sql = INSERT INTO `employees`(`employeename`, `contactno`, `username`, `password`) VALUES ([],[employeename],[contactno],[username],[password])
		 
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteEmployees($id){
		$conn = getConnection();
		$sql = "delete from employees where id=".$id;
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateEmployees($employee){
    
	$conn = getConnection();
		//$sql = "insert into users values('{$id['id']}', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['type']}')";

		$sql = "UPDATE `employees` SET `id`='{$employee['id']}',`employeename`='{$employee['employeename']}',
		`contactno`='{$employee['contactno']}',
		`username`='{$employee['username']}',`password`='{$employee['password']}' WHERE id='{$employee['id']}'";
		
		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	} */

?>