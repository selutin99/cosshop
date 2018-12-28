<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$number = $_POST['number'];
	$description = $_POST['description'];
	$city = $_POST['city'];
	$cost = $_POST['cost'];
	
	mysqli_query($connection, "INSERT INTO taxes(official_number, description, country, tax_rate) VALUES('$number', '$description', '$city', '$cost')");
?>