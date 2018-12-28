<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$productID = $_POST['did'];
	mysqli_query($connection, "UPDATE products SET discount_price=NULL WHERE id='$productID'");
?>