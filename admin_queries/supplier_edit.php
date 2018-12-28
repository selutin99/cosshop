<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	 
	$supplierID = $_POST['supplierID'];
	
	$result = mysqli_query($connection, "SELECT id, name, description, city, phone, site FROM suppliers WHERE id='$supplierID'");
	$data = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data["id"] = $row["id"];
		$data["name"] = $row["name"];
		$data["description"] = $row["description"];
		$data["city"] = $row["city"];
		$data["phone"] = $row["phone"];
		$data["site"] = $row["site"];
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>