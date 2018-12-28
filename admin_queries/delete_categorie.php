<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$catID = $_POST['cat'];
	mysqli_query($connection, "DELETE FROM categories WHERE id='$catID'");
?>