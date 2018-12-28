<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$userID = $_POST['uid'];
	$role = $_POST['userRole'];
	if($role=='user'){
		$role=0;
	}
	else if($role=='manager'){
		$role=1;
	}
	else if($role=='admin'){
		$role=2;
	}
	else{
		$role=0;
	}
	
	mysqli_query($connection, "UPDATE users SET access_level='$role' WHERE id='$userID'");
?>