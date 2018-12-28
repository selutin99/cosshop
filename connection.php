<?php
	$host = 'localhost'; 
	$database = 'cosshop';
	$user = 'root';
	$password = '';
	
	$connection = mysqli_connect($host, $user, $password, $database) 
	or die("Ошибка " . mysqli_error($connection));
?>