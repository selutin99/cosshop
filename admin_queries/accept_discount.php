<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$productID = $_POST['prid'];
	$costVal = $_POST['costVal'];
	
	if(!empty($costVal)){
		mysqli_query($connection, "UPDATE products SET discount_price='$costVal' WHERE id='$productID'");
	}
	else{
		mysqli_query($connection, "UPDATE products SET discount_price=NULL WHERE id='$productID'");
	}
?>