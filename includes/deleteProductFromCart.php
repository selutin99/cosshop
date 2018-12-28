<?php
	include '../connection.php';
	global $connection;
	
	$prid = $_POST['productID'];	
	
	mysqli_query($connection, "DELETE FROM shopping_carts WHERE items_id='$prid';");
?>