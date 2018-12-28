<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$commentID = $_POST['cid'];
	mysqli_query($connection, "DELETE FROM comments WHERE id='$commentID'");
?>