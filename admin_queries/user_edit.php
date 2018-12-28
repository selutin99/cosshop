<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	 
	$userID = $_POST['userID'];
	
	$result = mysqli_query($connection, "SELECT id, email, last_name, first_name, family_name, sex, birthday, adress FROM users WHERE id='$userID'");
	$data = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data["id"] = $row["id"];
		$data["email"] = $row["email"];
		$data["first_name"] = $row["first_name"];
		$data["last_name"] = $row["last_name"];
		$data["family_name"] = $row["family_name"];
		$data["sex"] = $row["sex"];
		$data["birthday"] = $row["birthday"];
		$data["adress"] = $row["adress"];
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>