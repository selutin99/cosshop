<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$delID = $_POST['uid'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$cost = $_POST['cost'];
	$adress = $_POST['adress'];
	
	mysqli_query($connection, "UPDATE deliveries SET name='$name', description='$description', city='$city', phone='$phone', email = '$email', cost_of_service = '$cost', start_adress = '$adress' WHERE id='$delID'");
?>