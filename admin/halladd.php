<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$hno = $_POST['hno'];
		$htype = $_POST['htype'];
		$htable = $_POST['table'];
		$chair = $_POST['chair'];
		$price = $_POST['price'];
		$sql = "INSERT INTO hallmanage (hno, htype, htable, chair, price) VALUES ('$hno', '$htype', '$htable', '$chair', '$price')";

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

	header('location: hallmanage.php');
?>