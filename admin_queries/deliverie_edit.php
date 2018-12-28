<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	 
	$deliverieID = $_POST['deliverieID'];
	
	$result = mysqli_query($connection, "SELECT id, name, description, city, phone, email, cost_of_service, start_adress FROM deliveries WHERE id='$deliverieID'");
	$data = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data["id"] = $row["id"];
		$data["name"] = $row["name"];
		$data["description"] = $row["description"];
		$data["city"] = $row["city"];
		$data["phone"] = $row["phone"];
		$data["email"] = $row["email"];
		$data["cost_of_service"] = $row["cost_of_service"];
		$data["start_adress"] = $row["start_adress"];
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>