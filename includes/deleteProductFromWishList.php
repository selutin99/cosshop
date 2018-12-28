<?php
	session_start();
	$for_delete = array_search($_POST['productID'],$_SESSION['wishlist']);
	unset($_SESSION['wishlist'][$for_delete]);
?>