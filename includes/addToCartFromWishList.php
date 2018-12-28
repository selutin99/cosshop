<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$prid = $_POST['productID'];
	$user = $_SESSION['userID'];
	$price = $_POST['price'];
	
	if($_SESSION['auth']=='yes' || isset($_COOKIE['user'])){
		mysqli_query($connection, "INSERT INTO shopping_carts(items_id, user_id, qty, total_cost) VALUES('$prid', '$user', '$price', NULL);");
		
		$for_delete = array_search($_POST['productID'],$_SESSION['wishlist']);
		unset($_SESSION['wishlist'][$for_delete]);
	}
	else{
		http_response_code(404);
		die();
	}
?>