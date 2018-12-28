<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$name = $_POST['name'];
	
	mysqli_query($connection, "INSERT INTO categories(name, description) VALUES('$name', NULL)");
?>