<?php
	function makeQuery($query){
		global $connection;
		$result = mysqli_query($connection, $query) or die("Ошибка " . mysqli_error($link));
		return $result;
	}
	
	function countProducts(){
		$query = "SELECT COUNT(*) AS cnt FROM products";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}
	
	function getProductsList($start, $num) {
		$query = "SELECT products.id AS prid, main_photo, name, description_short, added_date, price, discount_price FROM products INNER JOIN photos ON products.id=photos.id WHERE balance > 0 ORDER BY added_date LIMIT $start, $num";
		return makeQuery($query);
	}

	function getNewProducts() {
		$query = "SELECT products.id AS prid, main_photo, name, description_short, price FROM products INNER JOIN photos ON products.id=photos.id WHERE discount_price IS NULL AND balance > 0 ORDER BY products.id DESC LIMIT 3";
		return makeQuery($query);
	}
	
	function getDiscounts() {
		$query = "SELECT products.id AS prid, main_photo, name, description_short, price, discount_price FROM products INNER JOIN photos ON products.id=photos.id WHERE discount_price IS NOT NULL AND balance > 0 ORDER BY products.id LIMIT 3";
		return makeQuery($query);
	}
	
	function getProduct($id) {
		$query = "SELECT products.id AS prid, main_photo, categories_id, full_face_photo, profile_photo, name, description_short, description_full, price, discount_price, added_date, balance FROM products INNER JOIN photos ON products.id=photos.id WHERE products.id='$id'";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}
	
	function getSuitableProduct($id, $cat_id) {
		$query = "SELECT products.id AS prid, main_photo, name, description_short, price, discount_price FROM products INNER JOIN photos ON products.id=photos.id WHERE products.id!='$id' AND categories_id!='$cat_id' AND balance > 0 LIMIT 3";
		return makeQuery($query);
	}
	
	function getComments($id) {
		$query = "SELECT avatar, email, title, description, date FROM comments INNER JOIN users ON user_id=users.id WHERE comments.product_id='$id'";
		return makeQuery($query);
	}
	
	function addComment($user_id, $product_id, $title, $description, $date){
		$query = "INSERT INTO comments (user_id, product_id, title, description, date) VALUES('$user_id', '$product_id', '$title', '$description', '$date')";
		return makeQuery($query);
	}
	
	function getCategories() {
		$query = "SELECT id, name FROM categories";
		return makeQuery($query);
	}
	
	function getDeliveries() {
		$query = "SELECT id, name, cost_of_service, start_adress FROM deliveries";
		return makeQuery($query);
	}
	
	function getSuppliers() {
		$query = "SELECT id, name FROM suppliers";
		return makeQuery($query);
	}
	
	function getEmails($email){
		$query = "SELECT email FROM users WHERE email = '$email'";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}	
	
	function getUser($email){
		$query = "SELECT id, email, password, access_level FROM users WHERE email = '$email'";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}
	
	function addUser($email, $password){
		$query = "INSERT INTO users (email, password) VALUES('$email', '$password')";
		makeQuery($query);
	}
	
	function getUserProfile($id){
		$query = "SELECT id, email, password, first_name, last_name, family_name, sex, birthday, avatar, adress FROM users WHERE id = '$id'";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}
	
	function deleteUser($id){
		$query = "DELETE FROM users WHERE id = '$id'";
		makeQuery($query);
	}
	
	function updateUser($array, $id){
		$query = "UPDATE users SET email='$array[0]', last_name='$array[1]', first_name='$array[2]', family_name='$array[3]', sex='$array[4]', birthday='$array[5]', adress='$array[6]', avatar='$array[7]' WHERE id = '$id'";
		makeQuery($query);
	}
	
	function updateUserWithoutAvatar($array, $id){
		$query = "UPDATE users SET email='$array[0]', last_name='$array[1]', first_name='$array[2]', family_name='$array[3]', sex='$array[4]', birthday='$array[5]', adress='$array[6]' WHERE id = '$id'";
		makeQuery($query);
	}
	
	function updatePasswordUser($password, $id){
		$query = "UPDATE users SET password='$password' WHERE id = '$id'";
		makeQuery($query);
	}
	
	function updatePasswordUserByEmail($password, $email){
		$query = "UPDATE users SET password='$password' WHERE email = '$email'";
		makeQuery($query);
	}
	
	function getUserOrders($id){
		$query = "SELECT orders.id, products_list, order_status, deliveries.name, total_cost, date_ordering FROM orders LEFT JOIN deliveries ON deliveries.id=orders.delivery_id LEFT JOIN users ON users.id = orders.user_id WHERE users.id='$id'";
		return makeQuery($query);
	}
	
	function findCountProducts($q){
		$query = "SELECT COUNT(*) as cnt FROM products WHERE balance>0 AND name LIKE '%$q%'";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}
	
	function findProductsList($q, $start, $num) {
		$query = "SELECT products.id AS prid, main_photo, name, description_short, added_date, price, discount_price FROM products INNER JOIN photos ON products.id=photos.id WHERE name LIKE '%$q%' AND balance > 0 ORDER BY added_date LIMIT $start, $num";
		return makeQuery($query);
	}
	
	function returnName($q) {
		$query = "SELECT name FROM categories WHERE id = '$q'";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}
	
	function findProductsListByCategory($q, $start, $num) {
		$query = "SELECT products.id AS prid, main_photo, name, description_short, added_date, price, discount_price FROM products INNER JOIN photos ON products.id=photos.id WHERE categories_id = '$q' AND balance > 0 ORDER BY added_date LIMIT $start, $num";
		return makeQuery($query);
	}
	
	function findProductsListForWishList($set){
		$query = "SELECT products.id AS prid, main_photo, tax_rate, name, description_short, added_date, price, discount_price, balance FROM products INNER JOIN photos ON products.id=photos.id LEFT JOIN taxes ON taxes.id=products.id WHERE balance > 0 AND products.id IN($set)";
		return makeQuery($query);
	}
	
	function getListOfProductsForOrder($set){
		$query = "SELECT id, name FROM products WHERE id IN($set)";
		return makeQuery($query);
	}
	
	function findUniqueProductsForCart($userID){
		$query = "SELECT DISTINCT items_id FROM shopping_carts WHERE user_id='$userID'";
		return makeQuery($query);
	}
	
	function findProductsListForCart($set){
		$query = "SELECT products.id AS prid, main_photo, tax_rate, name, description_short, added_date, price, discount_price, balance FROM products INNER JOIN photos ON products.id=photos.id LEFT JOIN taxes ON taxes.id=products.id WHERE balance > 0 AND products.id IN($set)";
		return makeQuery($query);
	}
	
	function getAllProductsFromWishList($productID){
		$query = "SELECT id, price FROM products WHERE id = '$productID'";
		$result = makeQuery($query);
		return mysqli_fetch_assoc($result);
	}
?>