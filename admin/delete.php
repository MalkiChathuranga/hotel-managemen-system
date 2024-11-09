<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM roommanage WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Room deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting room';
		}
	}
	else{
		$_SESSION['error'] = 'Select room to delete first';
	}

	header('location: roommanage.php');
?>