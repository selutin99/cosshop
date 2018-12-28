<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$suppID = $_POST['udid'];
	mysqli_query($connection, "DELETE FROM suppliers WHERE id='$suppID'");
?>