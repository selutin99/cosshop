<?php
	session_start();
	
	include '../connection.php';
	include '../functions/queries.php';
	global $connection;
	
	$user = $_SESSION['userID'];
	$deliveryID = $_POST['delID'];
	$startAdress = $_POST['stAD'];
	$endAdress = $_POST['enAD'];
	$totalPrice = $_POST['total'];
	
	$query = "SELECT DISTINCT items_id FROM shopping_carts WHERE user_id='$user'";
	$result = mysqli_query($connection, $query);
	while ($row = $result->fetch_assoc()) {
		$cart_array[] = $row['items_id'];
		$pro = $row['items_id'];
		mysqli_query($connection, "UPDATE products SET balance=balance-1 WHERE id='$pro'");
	}
	if(count($cart_array)>1){
		$cart_array = implode(',',$cart_array);
	}
	else{
		$cart_array = implode('',$cart_array);
	}
	$productsList = $cart_array;
	
	$dateT = date('Y-m-d');
	
	mysqli_query($connection, "INSERT INTO orders(user_id, delivery_id, products_list, start_adress, end_adress, date_ordering, date_departure, date_arrival, date_arrival_fact, total_cost, order_status, order_details, report) VALUES('$user', '$deliveryID', '$productsList', '$startAdress', '$endAdress' , '$dateT' , NULL, NULL, NULL, '$totalPrice', NULL, NULL, NULL);");
	mysqli_query($connection, "DELETE FROM shopping_carts WHERE user_id='$user'");
	
	/**********EMAIL***********/
	$user = mysqli_query($connection, "SELECT email FROM users WHERE id='$user'");
	$user = mysqli_fetch_assoc($user);
	$userEmail = $user["email"];
	/********END EMAIL********/
	
	$result = getListOfProductsForOrder(strval($productsList));
	$message="Продукты: \r\n";
	while ($tech = $result->fetch_assoc()) {
		$message.=$tech['name'].'  ';
	}
	$message.="\r\n";
	$message.="Стоимость: ".$totalPrice;
	
	mail($userEmail, "Заказ оформлен", $message);
?>