<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
	$productID = $_POST['prid'];
	
	$name = $_POST['name'];
	$supplier = $_POST['supplier'];
	$category = $_POST['category'];
	$adder = $_POST['adder'];
	$tax = $_POST['tax'];
	$description_short = $_POST['description_short'];
	$description_full = $_POST['description_full'];
	$city = $_POST['city'];
	$price = $_POST['price'];
	$discount_price = $_POST['discount_price'];
	$added_date = $_POST['added_date'];
	$balance = $_POST['balance'];
	
	/**********EMAIL***********/
	$user = mysqli_query($connection, "SELECT id FROM users WHERE email='$adder'");
	$added_by = mysqli_fetch_assoc($user);
	$userID = $added_by["id"];
	/********END EMAIL********/
	
	/**********SUPPLIER***********/
	$sup = mysqli_query($connection, "SELECT id FROM suppliers WHERE name='$supplier'");
	$supper = mysqli_fetch_assoc($sup);
	$supplier = $supper["id"];
	/********END SUPPLIER********/
	
	/**********CATEGORY***********/
	$cat = mysqli_query($connection, "SELECT id FROM categories WHERE name='$category'");
	$cate = mysqli_fetch_assoc($cat);
	$category = $cate["id"];
	/********END CATEGORY********/
	
	/**********CATEGORY***********/
	$tax = mysqli_query($connection, "SELECT id FROM taxes WHERE official_number='$tax'");
	$tax = mysqli_fetch_assoc($tax);
	$tax = $tax["id"];
	/********END CATEGORY********/
	
	mysqli_query($connection, "UPDATE products SET suppliers_id='$supplier', categories_id='$category', add_by_user='$userID', tax_id='$tax', 
							   name = '$name', description_short = '$description_short', description_full = '$description_full', city = '$city', 
							   price = '$price', discount_price = '$discount_price', added_date = '$added_date', balance = '$balance' WHERE id='$productID'");
?>