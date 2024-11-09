<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM hallmanage WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Hall deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting hall';
		}
	}
	else{
		$_SESSION['error'] = 'Select hall to delete first';
	}

	header('location: hallmanage.php');
?>