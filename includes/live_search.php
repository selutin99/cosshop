<?php
	session_start();

	include '../connection.php';
	include '../functions/queries.php';
	
	global $connection;
	
	$search = iconv("UTF-8", "cp1251", $_POST['text']);
	
	$result = mysqli_query($connection, "SELECT name FROM products WHERE name LIKE '%$search%' AND balance>0");
	while ($row = $result->fetch_assoc()) {
		echo "<li class='list-group-item'><a href='search.php?q=".$row['name']."'</a>".$row['name']."</li>";
	}
	
?>