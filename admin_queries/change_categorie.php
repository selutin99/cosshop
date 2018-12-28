<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$catID = $_POST['catID'];
	$name = $_POST['name'];
	
	mysqli_query($connection, "UPDATE categories SET name='$name' WHERE id='$catID'");
?>