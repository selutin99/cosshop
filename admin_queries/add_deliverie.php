<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$name = $_POST['name'];
	$description = $_POST['description'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$cost = $_POST['cost'];
	$adress = $_POST['adress'];
	
	mysqli_query($connection, "INSERT INTO deliveries (name, description, city, phone, email, cost_of_service, start_adress) 
							   VALUES('$name', '$description', '$city', '$phone', '$email', '$cost', '$adress')");
?>