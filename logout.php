<?php

	session_start();
	
	if(isset($_SESSION['userID'])){
		unset($_SESSION['userID']);
	}
	if(isset($_SESSION['auth'])){
		unset($_SESSION['auth']);
	}
	if(isset($_SESSION['access'])){
		unset($_SESSION['access']);
	}
	if(isset($_COOKIE['user'])){
		unset($_COOKIE['user']);
	}
	
	session_unset();
	session_destroy();
	
	header("location: index.php");
	exit();

?>