<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$delID = $_POST['udid'];
	mysqli_query($connection, "DELETE FROM deliveries WHERE id='$delID'");
?>