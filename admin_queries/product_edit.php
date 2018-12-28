<?php
	session_start();
	
	include '../connection.php';
	global $connection;
	 
	$prID = $_POST['prid'];
	
	$result = mysqli_query($connection, "SELECT products.id as prid, main_photo, full_face_photo, profile_photo, suppliers.name as sup, categories.name as cat, users.email as adder, taxes.official_number as tax, products.name as prname, description_short, description_full, products.city as city, price, discount_price, added_date, balance FROM products LEFT JOIN photos ON photos_id = photos.id LEFT JOIN suppliers ON suppliers_id = suppliers.id LEFT JOIN categories ON categories_id = categories.id LEFT JOIN users ON add_by_user = users.id LEFT JOIN taxes ON tax_id = taxes.id WHERE products.id='$prID'");
	$data = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$data["main_photo"] = $row["main_photo"];
		$data["full_face_photo"] = $row["full_face_photo"];
		$data["profile_photo"] = $row["profile_photo"];
		$data["prname"] = $row["prname"];
		$data["sup"] = $row["sup"];
		$data["cat"] = $row["cat"];
		$data["adder"] = $row["adder"];
		$data["tax"] = $row["tax"];
		$data["description_short"] = $row["description_short"];
		$data["description_full"] = $row["description_full"];
		$data["city"] = $row["city"];
		$data["price"] = $row["price"];
		$data["discount_price"] = $row["discount_price"];
		$data["added_date"] = $row["added_date"];
		$data["balance"] = $row["balance"];
	}
	echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
?>