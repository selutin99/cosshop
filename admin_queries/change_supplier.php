<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$suppID = $_POST['uid'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$city = $_POST['city'];
	$phone = $_POST['phone'];
	$site = $_POST['site'];
	
	mysqli_query($connection, "UPDATE suppliers SET name='$name', description='$description', city='$city', phone='$phone', site = '$site' WHERE id='$suppID'");
?>