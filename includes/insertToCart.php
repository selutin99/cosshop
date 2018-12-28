<?php	
	session_start();
	if($_SESSION['auth']=='yes' || isset($_COOKIE['user'])){
		include '../connection.php';
		global $connection;
		
		$prid = $_POST['productID'];
		$user = $_SESSION['userID'];
		$price = $_POST['price'];	
		
		mysqli_query($connection, "INSERT INTO shopping_carts(items_id, user_id, qty, total_cost) VALUES('$prid', '$user', '$price', NULL);");
	}
	else{
		http_response_code(404);
		die();
	}
?>