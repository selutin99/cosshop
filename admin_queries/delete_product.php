<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$suppID = $_POST['prid'];
	mysqli_query($connection, "DELETE FROM products WHERE id='$suppID'");
?>