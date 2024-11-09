<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$ename = $_POST['ename'];
		$decoration = $_POST['decoration'];
		$pname = $_POST['pname'];
		$contact = $_POST['contact'];
		$price = $_POST['price'];
		$sql = "INSERT INTO eventmanage (ename, decoration, pname, contact, price) VALUES ('$ename', '$decoration', '$pname', '$contact', '$price')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Hall added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: eventmanage.php');
?>