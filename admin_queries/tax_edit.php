<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	 
	$taxID = $_POST['taxID'];
	
	$result = mysqli_query($connection, "SELECT id, official_number, description, country, tax_rate FROM taxes WHERE id='$taxID'");
	$data = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data["id"] = $row["id"];
		$data["official_number"] = $row["official_number"];
		$data["description"] = $row["description"];
		$data["country"] = $row["country"];
		$data["tax_rate"] = $row["tax_rate"];
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>