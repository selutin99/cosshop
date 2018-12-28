<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$orderID = $_POST['orderID'];
	mysqli_query($connection, "DELETE FROM orders WHERE id='$orderID'");
?>