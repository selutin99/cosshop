<?php
	$title='Creative Online Store - Профиль';
	$page='profile';
	
	include 'includes/header.php';
	
	$user = getUserProfile($_SESSION['userID']);
?>
		
		<!--MAIN BLOCK-->
		<div class="container" style="min-height: 75vh;">
			<div class="row">
				<div class="col-md-3 ">
					<div class="list-group" id="myList" role="tablist">
						<a class="list-group-item list-group-item-action active" data-toggle="list" href="#profile" role="tab">Мой профиль</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#my_orders" role="tab">Мои заказы</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#edit" role="tab">Редактировать профиль</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#editPassword" role="tab" id="ChangePassword">Изменить пароль</a>
						<a class="list-group-item list-group-item-action" href="contacts.php" onclick="gotoContacts();">Написать менеджеру</a>
						<a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#deleteModal" id="deleteProfile" style="cursor: pointer;">Удалить профиль</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content">
						<!--PROFILE-->
						<div class="tab-pane active" id="profile" role="tabpanel">
							<div class="panel panel-info">
								<div class="panel-heading" style="padding: 20px;">
									<h3 class="panel-title"><?php echo $user['email']; ?></h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/profiles/<?php if(empty($user['avatar'])){ echo "avatar.png"; } else{ echo $user['avatar'];} ?>" class="img-circle img-responsive"> </div>
										<div class=" col-md-9 col-lg-9 "> 
											<table class="table table-user-information">
												<tbody>
													<tr>
														<td>Email: </td>
														<td><a href="mailto:pupkin@yandex.ru"><?php echo $user['email']; ?></a></td>
													<tr>
														<td>Имя: </td>
														<td><?php 
																if(empty($user['first_name'])){ 
																	echo "Не указано";
																} 
																else{
																	echo $user['first_name'];
																}
															?>
														</td>
													</tr>
													<tr>
														<td>Фамилия: </td>
														<td><?php 
																if(empty($user['last_name'])){ 
																	echo "Не указано";
																} 
																else{
																	echo $user['last_name'];
																}
															?>
														</td>
													</tr>
													<tr>
														<td>Отчество: </td>
														<td><?php 
																if(empty($user['family_name'])){ 
																	echo "Не указано";
																} 
																else{
																	echo $user['family_name'];
																}
															?>
														</td>
													</tr>
											   
													<tr>
														<tr>
															<td>Пол: </td>
															<td>
																<?php 
																	if(empty($user['sex'])){ 
																		echo "Не указано";
																	} 
																	else{
																		if($user['sex']=='М'){
																			echo "Мужской";
																		}
																		else if($user['sex']=='Ж'){
																			echo "Женский";
																		}
																	}
																?>
															</td>
														</tr>
														<tr>
															<td>Дата рождения: </td>
															<td><?php 
																	if(empty($user['birthday'])){ 
																		echo "Не указано";
																	} 
																	else{
																		echo $user['birthday'];
																	}
																?>
															</td>
														</tr>
														<td>Адрес</td>
														<td><?php 
																if(empty($user['adress'])){ 
																	echo "Не указано";
																} 
																else{
																	echo $user['adress'];
																}
															?>
														</td> 
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<a href="shopping_cart.php" class="btn btn-primary">Корзина</a>
									<a href="wishlist.php" class="btn btn-primary">Избранные товары</a>
								</div>
							</div>
						</div>
						<!--END PROFILE-->
						
						<!--MY ORDERS-->
						<div class="tab-pane" id="my_orders" role="tabpanel">
							<div class="panel panel-info">
								<div class="panel-heading" style="padding: 20px;">
									<h3 class="panel-title">Список заказов</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-12"> 
											<div class="table-responsive">	
												<table class="table table-bordered table-striped">
													<?php 
													$ordersTst = getUserOrders($_SESSION['userID']);
														if(mysqli_num_rows($ordersTst)==0){
															
														}
														else{
															echo "
																<tr>
																	<th>ID заказа</th>
																	<th>Список продуктов</th>
																	<th>Служба доставки</th>
																	<th>Дата заказа</th>
																	<th>Стоимость заказа</th>
																</tr>
															";
														}
													?>
													<thead>
														
													</thead>
													<tbody>
														<?php
															$orders = getUserOrders($_SESSION['userID']);
															if(mysqli_num_rows($orders)==0){
																echo "<h2 align='center'>Пока ничего не заказано</h2>";
															}
															else{
																while ($row = $orders->fetch_assoc()) {
																	echo "<tr><td>".$row['id']."</td>
																		  <td>"; 
																			$result = getListOfProductsForOrder(strval($row['products_list']));
																			while ($tech = $result->fetch_assoc()) {
																				echo "<a style='display: block' href='single_item.php?id=".$tech['id']."'>".$tech["name"]."</a>";
																			}
																		  echo"</td>
																		  <td>".$row['name']."</td>
																		  <td>".$row['date_ordering']."</td>
																		  <td>".$row['total_cost']." р.</td></tr>
																		 ";
																}
															}
														?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<a href="shopping_cart.php" class="btn btn-primary">Корзина</a>
									<a href="wishlist.php" class="btn btn-primary">Избранные товары</a>
								</div>
							</div>
						</div>
						<!--END MY ORDERS-->
						
						<!--EDIT PROFILE-->
						<div class="tab-pane" id="edit" role="tabpanel">
							<div class="panel panel-info">
								<div class="panel-heading" style="padding: 20px;">
									<h3 class="panel-title">Изменить профиль</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-9 col-lg-9" style="margin-left: 20px; margin-right: 20px;"> 
											<form method="post" enctype="multipart/form-data">
											  <div class="form-group row">
												<label for="email" class="col-4 col-form-label">Email</label> 
												<div class="col-8">
												  <input id="email" name="emailProfile" type="email" placeholder="Email" class="form-control here" value="<?php echo $user["email"]?>">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="lastname" class="col-4 col-form-label">Фамилия</label> 
												<div class="col-8">
												  <input id="lastname" name="lastnameProfile" placeholder="Фамилия" class="form-control here" type="text" value="<?php echo $user["last_name"]?>">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="firstname" class="col-4 col-form-label">Имя</label> 
												<div class="col-8">
												  <input id="firstname" name="firstnameProfile" placeholder="Имя" class="form-control here" type="text" value="<?php echo $user["first_name"]?>">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="familyname" class="col-4 col-form-label">Отчество</label> 
												<div class="col-8">
												  <input id="familyname" name="familynameProfile" placeholder="Отчество" class="form-control here" type="text" value="<?php echo $user["family_name"]?>">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="select" class="col-4 col-form-label">Пол</label> 
												<div class="col-8">
												  <select id="select" name="selectSex" class="form-control">
													<option value="male">Мужской</option>
													<option value="female">Женский</option>
												  </select>
												</div>
											  </div>
											  <div class="form-group row">
												<label for="birthday" class="col-4 col-form-label">Дата рождения</label> 
												<div class="col-8">
												  <input id="birthday" name="birthdayProfile" placeholder="Дата рождения" class="form-control here" type="date" value="<?php echo $user["birthday"]?>">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="adress" class="col-4 col-form-label">Адрес</label> 
												<div class="col-8">
												  <input id="adress" name="adressProfile" placeholder="Адрес" class="form-control here" type="text" value="<?php echo $user["adress"]?>">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="avatar" class="col-4 col-form-label">Аватар</label> 
												<div class="col-8">
													<input id="avatar" name="image" class="form-control here" type="file" accept="image/*" value="<?php echo $user["avatar"]?>">
												</div>
											  </div> 
											  <div class="form-group row">
												<label for="pass" class="col-4 col-form-label">Текущий пароль</label> 
												<div class="col-8">
												  <input id="pass" name="passProfile" placeholder="Текущий пароль" minlength="6" class="form-control here" type="password" required>
												</div>
											  </div> 
											  <div class="form-group row">
												<div class="offset-4 col-8 text-center">
												  <button name="updateProfile" type="submit" class="btn btn-primary">Обновить профиль</button>
												  <p class="updateProfileStatus"></p>
												</div>
											  </div>
											  <?php
												if(isset($_POST['updateProfile'])){	
												
													$email = trim(urldecode(htmlspecialchars($_POST['emailProfile'])));
													
													$lastname = trim(urldecode(htmlspecialchars($_POST['lastnameProfile'])));
													$firstname = trim(urldecode(htmlspecialchars($_POST['firstnameProfile'])));
													$familyname = trim(urldecode(htmlspecialchars($_POST['familynameProfile'])));
													
													$sex = trim(urldecode(htmlspecialchars($_POST['selectSex'])));
													$birthday = trim(urldecode(htmlspecialchars($_POST['birthdayProfile'])));
													$adress = trim(urldecode(htmlspecialchars($_POST['adressProfile'])));
													
													$password = trim(urldecode(htmlspecialchars($_POST['passProfile'])));
													$password = md5($password);
													
													$_SESSION['profileUpdate'] = true;
													
													if($password==$user['password']){
														
														if($sex==='male'){
															$sexUpdate = 'М';
														}
														else{
															$sexUpdate = 'Ж';
														}
														
														if(isset($_FILES['image']) && !empty($_FILES["image"]["name"]) ){
															
															$path = 'images/profiles/';
															$ext = array_pop(explode('.',$_FILES['image']['name']));
															$new_name = uniqid().'.'.$ext;
															$full_path = $path.$new_name;
															move_uploaded_file($_FILES['image']['tmp_name'], $full_path);
															
															$userArray = array($email, $lastname, $firstname, $familyname, $sexUpdate, $birthday, $adress, $new_name);
															updateUser($userArray, $_SESSION['userID']);
														
														}
														else{
															$userArray = array($email, $lastname, $firstname, $familyname, $sexUpdate, $birthday, $adress);
															updateUserWithoutAvatar($userArray, $_SESSION['userID']);
														}
														$_SESSION['profileUpdate'] = false;
														echo "<script>window.location.href = window.location.href;</script>";
														
													}
													else{
														echo "<script>$('.updateProfileStatus').append('<p class=\"updatePasswordStatus\" style=\"color: red;\">Неверный пароль</p>');</script>";
														$_SESSION['profileUpdate'] = false;
													}
													
													if(isset($_SESSION['profileUpdate']) && $_SESSION['profileUpdate'] == false) {
														echo "<script>$('.list-group a[href=\"#edit\"]').tab('show');</script>";
														echo "<script>$('.list-group a[href=\"#edit\"]').addClass('active');</script>";
														
														echo "<script>$('.list-group a[href=\"#profile\"]').removeClass('active');</script>";
														echo "<script>$('.list-group a[href=\"#my_orders\"]').removeClass('active');</script>";
														echo "<script>$('.list-group a[href=\"#editPassword\"]').removeClass('active');</script>";
														echo "<script>$('.list-group a[href=\"#deleteModal\"]').removeClass('active');</script>";
														
														$_SESSION['profileUpdate'] = true;
													}
												}
											  ?>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--END EDIT PROFILE-->
						
						<!--EDIT PASSWORD-->
						<div class="tab-pane" id="editPassword" role="tabpanel">
							<div class="panel panel-info">
								<div class="panel-heading" style="padding: 20px;">
									<h3 class="panel-title">Изменить пароль</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-9 col-lg-9" style="margin-left: 20px; margin-right: 20px;"> 
											<form method="post">
											  <div class="form-group row">
												<label for="oldPassword" class="col-4 col-form-label">Новый пароль</label> 
												<div class="col-8">
												  <input id="oldPass" name="newPasswordUpdate" type="password" placeholder="Новый пароль" minlength="6" class="form-control here">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="currentPassword" class="col-4 col-form-label">Текущий пароль</label> 
												<div class="col-8">
												  <input id="currPass" name="currentPassword" type="password" placeholder="Текущий пароль" minlength="6" class="form-control here">
												</div>
											  </div>
											  <div class="form-group row">
												<div class="offset-4 col-8 text-center">
												  <button name="updatePassword" type="submit" class="btn btn-primary">Обновить пароль</button>
												  <p class="updatePasswordStatus"></p>
												</div>
											  </div>
											  <?php
												if(isset($_POST['updatePassword'])){
													
													$newPassword = trim(urldecode(htmlspecialchars($_POST['newPasswordUpdate'])));
													$newPassword = md5($newPassword);
													
													$password = trim(urldecode(htmlspecialchars($_POST['currentPassword'])));
													$password = md5($password);
													
													$_SESSION['passwordUpdate'] = true;
													
													if($password !== $newPassword){
														if($password==$user['password']){
														
															updatePasswordUser($newPassword, $_SESSION['userID']);
															echo "<script>$('.updatePasswordStatus').append('<p class=\"updatePasswordStatus\" style=\"color: green;\">Пароль успешно обновлён</p>');</script>";
															$_SESSION['passwordUpdate'] = false;
														
														}
														else{
															echo "<script>$('.updatePasswordStatus').append('<p class=\"updatePasswordStatus\" style=\"color: red;\">Неверный пароль</p>');</script>";
															$_SESSION['passwordUpdate'] = false;
														}
													}
													else{
														echo "<script>$('.updatePasswordStatus').append('<p class=\"updatePasswordStatus\" style=\"color: red;\">Пароли совпадают</p>');</script>";
														$_SESSION['passwordUpdate'] = false;
													}
													
													if(isset($_SESSION['passwordUpdate']) && $_SESSION['passwordUpdate'] == false) {
														echo "<script>$('.list-group a[href=\"#editPassword\"]').tab('show');</script>";
														echo "<script>$('.list-group a[href=\"#editPassword\"]').addClass('active');</script>";
														
														echo "<script>$('.list-group a[href=\"#profile\"]').removeClass('active');</script>";
														echo "<script>$('.list-group a[href=\"#my_orders\"]').removeClass('active');</script>";
														echo "<script>$('.list-group a[href=\"#edit\"]').removeClass('active');</script>";
														echo "<script>$('.list-group a[href=\"#deleteModal\"]').removeClass('active');</script>";
														
														$_SESSION['passwordUpdate'] = true;
													}
												}
											  ?>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--END EDIT PASSWORD-->
					</div>
				</div>
			</div>
		</div>
		<!--END MAIN BLOCK-->
<?php
	include 'includes/profile/delete_profile.php';
	include 'includes/resize_image.php';
	include 'includes/footer.php';
?>

<script>

	$('#ChangePassword').click(function(){
		$('.updatePasswordStatus').empty();
	});
</script>