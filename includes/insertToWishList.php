<?php
	session_start();
	if(isset($_SESSION['wishlist'])){
		$_SESSION['wishlist'][] = $_POST['productID'];
	}
	else{
		$_SESSION['wishlist'] = array();
		$_SESSION['wishlist'][] = $_POST['productID'];
	}
?>