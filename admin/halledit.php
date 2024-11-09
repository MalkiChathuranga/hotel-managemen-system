<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$hno = $_POST['hno'];
		$htype = $_POST['htype'];
		$htable = $_POST['htable'];
		$chair = $_POST['chair'];
		$price = $_POST['price'];
		$sql = "UPDATE hallmanage SET hno = '$hno', htype = '$htype', htable = '$htable', chair = '$chair', price = '$price' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Hall updated successfully';
		}
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating hall';
		}
	}
	else{
		$_SESSION['error'] = 'Select hall to edit first';
	}

	header('location: hallmanage.php');

?>