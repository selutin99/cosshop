<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$taxID = $_POST['taxID'];
	$number = $_POST['number'];
	$description = $_POST['description'];
	$city = $_POST['city'];
	$cost = $_POST['cost'];
	
	mysqli_query($connection, "UPDATE taxes SET official_number='$number', description='$description', country='$city', tax_rate='$cost' WHERE id='$taxID'");
?>