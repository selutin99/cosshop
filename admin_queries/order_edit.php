<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	 
	$orderID = $_POST['orderID'];
	
	$result = mysqli_query($connection, "SELECT orders.id as ordid, email, products_list, start_adress, end_adress, date_ordering, date_departure, date_arrival, date_arrival_fact, total_cost, order_status, order_details, report FROM orders INNER JOIN users ON user_id = users.id WHERE orders.id='$orderID'");
	$data = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data["ordid"] = $row["ordid"];
		$data["email"] = $row["email"];
		$data["products_list"] = $row["products_list"];
		$data["start_adress"] = $row["start_adress"];
		$data["end_adress"] = $row["end_adress"];
		$data["date_ordering"] = $row["date_ordering"];
		$data["date_departure"] = $row["date_departure"];
		$data["date_arrival"] = $row["date_arrival"];
		$data["date_arrival_fact"] = $row["date_arrival_fact"];
		$data["total_cost"] = $row["total_cost"];
		$data["order_status"] = $row["order_status"];
		$data["order_details"] = $row["order_details"];
		$data["report"] = $row["report"];
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>