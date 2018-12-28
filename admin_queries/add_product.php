<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	
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
	$user = mysqli_query($connection, "SELECT id FROM users WHERE email='$adder' LIMIT 1");
	$added_by = mysqli_fetch_assoc($user);
	$userID = $added_by["id"];
	/********END EMAIL********/
	
	/**********SUPPLIER***********/
	$sup = mysqli_query($connection, "SELECT id FROM suppliers WHERE name='$supplier' LIMIT 1");
	$supper = mysqli_fetch_assoc($sup);
	$supplier = $supper["id"];
	/********END SUPPLIER********/
	
	/**********CATEGORY***********/
	$cat = mysqli_query($connection, "SELECT id FROM categories WHERE name='$category' LIMIT 1");
	$cate = mysqli_fetch_assoc($cat);
	$category = $cate["id"];
	/********END CATEGORY********/
	
	/**********TAX***********/
	$tax = mysqli_query($connection, "SELECT id FROM taxes WHERE official_number='$tax' LIMIT 1");
	$tax = mysqli_fetch_assoc($tax);
	$tax = $tax["id"];
	/********END TAX********/
	
	mysqli_query($connection, "INSERT INTO products (suppliers_id, categories_id, add_by_user, tax_id, name, description_short, description_full, city, price, discount_price, added_date, balance) 
							   VALUES('$supplier', '$category', '$userID', '$tax', '$name', '$description_short', '$description_full', '$city', '$price', '$discount_price', '$added_date', '$balance')");						   
?>