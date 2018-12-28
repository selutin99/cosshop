<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$taxid = $_POST['taxid'];
	mysqli_query($connection, "DELETE FROM taxes WHERE id='$taxid'");
?>