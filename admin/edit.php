<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$rno = $_POST['rno'];
		$rtype = $_POST['rtype'];
		$bed = $_POST['bed'];
		$meal = $_POST['meal'];
		$price = $_POST['price'];
		$sql = "UPDATE roommanage SET rno = '$rno', rtype = '$rtype', bed = '$bed', meal = '$meal', price = '$price' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Room updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating room';
		}
	}
	else{
		$_SESSION['error'] = 'Select room to edit first';
	}

	header('location: roommanage.php');

?>