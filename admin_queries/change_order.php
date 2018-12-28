<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$orderID = $_POST['ordid'];
	$email = $_POST['email'];
	$stuff = $_POST['stuff'];
	$start_adress = $_POST['start_adress'];
	$end_adress = $_POST['end_adress'];
	$start_date = $_POST['start_date'];
	$date_depart = $_POST['date_depart'];
	$end_date = $_POST['end_date'];
	$end_date_fact = $_POST['end_date_fact'];
	$total_cost = $_POST['total_cost'];
	$status = $_POST['status'];
	$details = $_POST['details'];
	$report = $_POST['report'];
	
	$result = mysqli_query($connection, "SELECT id FROM users WHERE email='$email'");
	$result = mysqli_fetch_assoc($result);
	$userID = $result["id"];
	
	mysqli_query($connection, "UPDATE orders SET user_id='$userID', products_list='$stuff', start_adress='$start_adress', end_adress='$end_adress', 
							   date_ordering = '$start_date', date_departure = '$date_depart', date_arrival = '$end_date', date_arrival_fact = '$end_date_fact', 
							   total_cost = '$total_cost', order_status = '$status', order_details = '$details', report = '$report' WHERE id='$orderID'");
?>