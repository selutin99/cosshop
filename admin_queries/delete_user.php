<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$userID = $_POST['udid'];
	mysqli_query($connection, "DELETE FROM users WHERE id='$userID'");
?>