<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$site = $_POST['site'];
	
	mysqli_query($connection, "INSERT INTO suppliers (name, description, city, phone, site) VALUES('$name', '$description', '$city', '$phone', '$site')");
?>