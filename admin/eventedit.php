<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$ename = $_POST['ename'];
		$decoration = $_POST['decoration'];
		$pname = $_POST['pname'];
		$contact = $_POST['contact'];
		$price = $_POST['price'];
		$sql = "UPDATE eventmanage SET ename = '$ename', decoration = '$decoration', pname = '$pname', contact = '$contact', price = '$price' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating event';
		}
	}
	else{
		$_SESSION['error'] = 'Select event to edit first';
	}

	header('location: eventmanage.php');

?>