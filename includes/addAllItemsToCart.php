<?php
	session_start();
	
	include '../connection.php';
	include '../functions/queries.php';
	global $connection;
	
	$user = $_SESSION['userID'];
	
	if($_SESSION['auth']=='yes' || isset($_COOKIE['user'])){
		foreach ($_SESSION['wishlist'] as $row) {
			$result = getAllProductsFromWishList($row);
			$prid = $result['id'];
			$price = $result['price'];
			mysqli_query($connection, "INSERT INTO shopping_carts(items_id, user_id, qty, total_cost) VALUES('$prid', '$user', '$price', NULL);");
		}
		unset($_SESSION['wishlist']);
	}
	else{
		http_response_code(404);
		die();
	}
?>