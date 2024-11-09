<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM eventmanage WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Event deleted successfully';
		}

		else{
			$_SESSION['error'] = 'Something went wrong in deleting event';
		}
	}
	else{
		$_SESSION['error'] = 'Select event to delete first';
	}

	header('location: eventmanage.php');
?>