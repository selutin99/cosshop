<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	 
	$categorieID = $_POST['categorieID'];
	
	$result = mysqli_query($connection, "SELECT id, name FROM categories WHERE id='$categorieID'");
	$data = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data["id"] = $row["id"];
		$data["name"] = $row["name"];
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>