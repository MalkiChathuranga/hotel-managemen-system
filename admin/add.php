<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$rno = $_POST['rno'];
		$rtype = $_POST['rtype'];
		$bed = $_POST['bed'];
		$meal = $_POST['meal'];
		$price = $_POST['price'];
		$sql = "INSERT INTO roommanage (rno, rtype, bed, meal, price) VALUES ('$rno', '$rtype', '$bed', '$meal', '$price')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Room added successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: roommanage.php');
?>