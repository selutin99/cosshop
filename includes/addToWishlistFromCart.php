<?php
	session_start();
	if(isset($_SESSION['wishlist'])){
		$_SESSION['wishlist'][] = $_POST['productID'];
	}
	else{
		$_SESSION['wishlist'] = array();
		$_SESSION['wishlist'][] = $_POST['productID'];
	}
	include '../connection.php';
	global $connection;
	
	$prid = $_POST['productID'];	
	
	mysqli_query($connection, "DELETE FROM shopping_carts WHERE items_id='$prid';");
?>