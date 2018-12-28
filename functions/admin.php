<?php
	function makeAdminQuery($query){
		global $connection;
		$result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($link));
		return $result;
	}
	
	/*function countProducts(){
		$query = "SELECT COUNT(*) AS cnt FROM products";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}*/
	
	function getTaxes() {
		$query = "SELECT id, official_number, description, country, tax_rate FROM taxes";
		return makeAdminQuery($query);
	}
	
	function getUsers() {
		$query = "SELECT id, email, first_name, last_name, family_name, sex, birthday, adress FROM users";
		return makeAdminQuery($query);
	}
	
	function getUsersAccess() {
		$query = "SELECT id, email, last_name, access_level	FROM users";
		return makeAdminQuery($query);
	}
	
	function getUsersComments() {
		$query = "SELECT comments.id, user_id, email, product_id, name, title, description, date FROM comments INNER JOIN users ON users.id=user_id INNER JOIN products ON product_id=products.id";
		return makeAdminQuery($query);
	}
	
	function getAdminSuppliers() {
		$query = "SELECT id, name, description, city, phone, site FROM suppliers";
		return makeAdminQuery($query);
	}
	
	function getAdminDeliveries() {
		$query = "SELECT id, name, description, city, phone, email, cost_of_service, start_adress FROM deliveries";
		return makeAdminQuery($query);
	}
	
	function getAdminDiscountsProducts() {
		$query = "SELECT id, name, discount_price FROM products";
		return makeAdminQuery($query);
	}
	
	function getAdminCategories() {
		$query = "SELECT id, name FROM categories";
		return makeAdminQuery($query);
	}
	
	function getAdminOrders() {
		$query = "SELECT orders.id as ordid, email, products_list, start_adress, end_adress, date_ordering, date_departure, date_arrival, date_arrival_fact, total_cost, order_status, order_details, report FROM orders INNER JOIN users ON user_id = users.id";
		return makeAdminQuery($query);
	}
	
	function getAdminProducts() {
		$query = "SELECT products.id as prid, photos_id, main_photo, full_face_photo, profile_photo, suppliers.name as sup, categories.name as cat, users.email as adder, taxes.official_number as tax, products.name as prname, description_short, description_full, products.city as city, price, discount_price, added_date, balance FROM products LEFT JOIN photos ON photos_id = photos.id LEFT JOIN suppliers ON suppliers_id = suppliers.id LEFT JOIN categories ON categories_id = categories.id LEFT JOIN users ON add_by_user = users.id LEFT JOIN taxes ON tax_id = taxes.id";
		return makeAdminQuery($query);
	}
?>