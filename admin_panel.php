<?php
	$title='Creative Online Store - Панель администрирования';
	$page='admin_panel';
	
	include 'includes/header.php';
	include 'functions/admin.php';
?>
		
		<!--MAIN BLOCK-->
		<div class="container" style="min-height: 75vh;">
			<div class="row">
				<div class="col-md-3 ">
					<div class="list-group" id="myList" role="tablist">
						<h4 align="center">Пользователи</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#users" role="tab">Список пользователей</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#roles" role="tab">Привилегии пользователей</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#comments" role="tab">Комментарии пользователей</a>
						<h4 align="center">Поставщики и доставка</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#suppliers" role="tab">Список поставщиков</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#deliveries" role="tab">Список служб доставки</a>
						<h4 align="center">Товары</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#products" role="tab">Список товаров</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#discounts" role="tab">Скидки на товары</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#cat" role="tab">Категории товаров</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#taxes" role="tab">Налоги</a>
						<h4 align="center">Заказы</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#orders" role="tab">Список заказов</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content">
						<div class="tab-pane active" id="hello" role="tabpanel">
							<div class="row" style="margin-top: 50px;">
								<h2 align="center">Добро пожаловать в административную панель.</h4>
								<h3 align="center">Воспользуйтесь меню слева для дальнейших настроек.</h5>
							</div>
						</div>
						<!--USERS-->
						<div class="tab-pane" id="users" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список пользователей</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2 has-clear">
											<div class="input-group stylish-input-group">
												<input id="searchUserInput" type="text" class="form-control" placeholder="Поиск">
												<span id="removeEditUser" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									<script>
										$("#removeEditUser").click(function(){
											$("#searchUserInput").val('');
											var value = $("#removeEditUser").val().toLowerCase();
											$("#userListTable tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchUserInput").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#userListTable tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getUsers();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Email</th>
																<th>Фамилия</th>
																<th>Имя</th>
																<th>Отчество</th>
																<th>Пол</th>
																<th>Дата рождения</th>
																<th>Адрес</th>
																<th>Редакт.</th> 
																<th>Удалить</th>  
															</tr>
														";
													}
												?>
											</thead>
											<tbody id="userListTable">
												<?php
													$users = getUsers();
													if(mysqli_num_rows($users)==0){
														echo "<h2 align='center'>Пока никого нет</h2>";
													}
													else{
														while ($row = $users->fetch_assoc()) {
															echo "
																<tr>
																	";
																	if(empty($row["email"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td><a href='mailto:".$row["email"]."'>".$row["email"]."</a></td>"; }
																	if(empty($row["last_name"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["last_name"]."</td>"; }
																	if(empty($row["first_name"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["first_name"]."</td>"; }
																	if(empty($row["family_name"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["family_name"]."</td>"; }
																	if(empty($row["sex"])){ echo "<td>Не указано</td>"; }
																	else{ echo "<td>"; if($row["sex"]=='М'){ echo "Мужской"; } else{ echo "Женский"; } echo"</td>";}
																	if(empty($row["birthday"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["birthday"]."</td>"; }
																	if(empty($row["adress"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["adress"]."</td>"; }
																	echo "
																	<td><button user_id='".$row["id"]."' class='editUser btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit_user'><span class='glyphicon glyphicon-pencil'></span></button></td>
																	<td><button user_id='".$row["id"]."' class='deleteUser btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete_user' ><span class='glyphicon glyphicon-trash'></span></button></td>
																</tr> 
																";
														}
													}
												?>
											</tbody>
											<script>
												$(".deleteUser").click(function() {
													var udid = $(this).attr('user_id');
													$("#delete_user").attr("user_id",udid);
												});
												$(".editUser").click(function() {
													var uid = $(this).attr('user_id');
													$("#edit_user").attr("user_id",uid);
													
													$.ajax({
														url: "admin_queries/user_edit.php",
														type: "POST",
														data: { userID: uid },
														dataType:"JSON",
														success: function(data) {
															if( data.email ){
																$('#edituserEmail').val(data.email);
															}
															if( data.last_name ){
																$('#edituserLastName').val(data.last_name);
															}
															if( data.first_name ){
																$('#edituserFirstName').val(data.first_name);
															}
															if( data.family_name ){
																$('#editUserFamilyName').val(data.family_name);
															}
															if( data.sex ){
																if(data.sex === 'М'){
																	$('#editUserSex').val('male');
																}
																else if( data.sex === 'Ж' ){
																	$('#editUserSex').val('female');
																}
															}
															if( data.birthday ){
																$('#editUserBirthday').val(data.birthday);
															}
															if (data.adress){
																$('#editUserAdress').val(data.adress);
															}
														}
													}); 
												});
											</script>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END USERS-->
						
						<!--ROLES OF USERS-->
						<div class="tab-pane" id="roles" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список привилегий пользователей</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchUserAccess" type="text" class="form-control" placeholder="Поиск">
												<span id="removeUserAccess" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeUserAccess").click(function(){
											$("#searchUserAccess").val('');
											var value = $("#removeUserAccess").val().toLowerCase();
											$("#userAccess tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchUserAccess").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#userAccess tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getUsersAccess();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Email</th>
																<th>Фамилия</th>
																<th>Роль</th>
																<th>Действия</th>
															</tr>
														";
													}
												?>
											</thead>
											<tbody id="userAccess">
												<?php
													$users = getUsersAccess();
													if(mysqli_num_rows($users)==0){
														echo "<h2 align='center'>Пока никого нет</h2>";
													}
													else{
														while ($row = $users->fetch_assoc()) {
															echo "
																<tr>
																	<td><a href='mailto:".$row['email']."'>".$row['email']."</a></td>
																	<td>".$row["last_name"]."</td>
																	<td>
																		<select for_user='".$row["id"]."' class='form-control' id='accessLevel'".$row["id"].">
																			<option echo value='user'"; if($row["access_level"]==0){ echo "selected='selected'";} echo ">Пользователь</option>
																			<option value='admin'"; if($row["access_level"]==2){ echo "selected='selected'";} echo ">Администратор</option>
																			<option value='manager'"; if($row["access_level"]==1){ echo "selected='selected'";} echo ">Менеджер</option>
																		</select>
																	</td>
																	<td>
																		<button user_id='".$row["id"]."' class='accessUser btn btn-success' data-toggle='modal' data-target='#accept_role'>Подтвердить</button>
																	</td>
																</tr>
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
						<script>
							$(".accessUser").click(function() {
								var userID = $(this).attr('user_id');
								var userRole = $("[for_user="+userID+"]").find('option:selected').val();
								
								$("#accept_role").attr("user_id",userID);
								$("#accept_role").attr("user_role",userRole);
							});
						</script>
						<!--END ROLES OF USERS-->
						
						<!--COMMENTS OF USERS-->
						<div class="tab-pane" id="comments" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Комментарии пользователей</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchUsersComments" type="text" class="form-control" placeholder="Поиск">
												<span id="removeUserComments" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeUserComments").click(function(){
											$("#searchUsersComments").val('');
											var value = $("#removeUserComments").val().toLowerCase();
											$("#userComments tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchUsersComments").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#userComments tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getUsersComments();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Email</th>
																<th>Товар</th>
																<th>Название</th>
																<th>Содержание</th>
																<th>Дата</th>
																<th>Действия</th>
															</tr>
														";
													}
												?>
												
											</thead>
											<tbody id="userComments">
												<?php
													$users = getUsersComments();
													if(mysqli_num_rows($users)==0){
														echo "<h2 align='center'>Пока никого нет</h2>";
													}
													else{
														while ($row = $users->fetch_assoc()) {
															echo "
																<tr>
																	<td><a href='mailto:".$row['email']."'>".$row['email']."</a></td>
																	<td><a target=_blank href='single_item.php?id=".$row['product_id']."'>".$row['name']."</a></td>
																	<td>".$row['title']."</td>
																	<td>".$row['description']."</td>
																	<td>".$row['date']."</td>
																	<td><button comment_id='".$row["id"]."' class='deleteComment btn btn-danger' data-toggle='modal' data-target='#delete_comment'><span class='glyphicon glyphicon-trash'></span> Удалить</button> </td>
																</tr>
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
						<script>
							$(".deleteComment").click(function() {
								var commentID = $(this).attr('comment_id');
								$("#delete_comment").attr("comment_id",commentID);
							});
						</script>
						<!--END COMMENTS OF USERS-->
						
						<!--TAXES OF USERS-->
						<div class="tab-pane" id="taxes" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Налоги</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchTaxes" type="text" class="form-control" placeholder="Поиск">
												<span id="removeTaxes" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeTaxes").click(function(){
											$("#searchTaxes").val('');
											var value = $("#removeTaxes").val().toLowerCase();
											$("#userTaxes tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchTaxes").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#userTaxes tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="row" align="center" style="margin-bottom: 20px;">
										<button class="btn btn-success" data-toggle="modal" data-target="#add_tax">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getTaxes();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Номер</th>
																<th>Описание</th>
																<th>Страна</th>
																<th>Стоимость (руб.)</th>
																<th>Редакт.</th>
																<th>Удалить</th>
															</tr>
														";
													}
												?>
												
											</thead>
											<tbody id="userTaxes">
												<?php
													$users = getTaxes();
													if(mysqli_num_rows($users)==0){
														echo "<h2 align='center'>Пока ничего нет</h2>";
													}
													else{
														while ($row = $users->fetch_assoc()) {
															echo "
																<tr>";
																	if(empty($row["official_number"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["official_number"]."</td>"; }
																	if(empty($row["description"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["description"]."</td>"; }
																	if(empty($row["country"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["country"]."</td>"; }
																	if(empty($row["tax_rate"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["tax_rate"]."</td>"; }
																echo "
																	<td><button tax_id='".$row["id"]."' class='editTax btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit_tax'><span class='glyphicon glyphicon-pencil'></span></button></td>
																	<td><button tax_id='".$row["id"]."' class='deleteTax btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete_tax' ><span class='glyphicon glyphicon-trash'></span></button></td>
																</tr>";
														}
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<script>
							$(".deleteTax").click(function() {
								var taxid = $(this).attr('tax_id');
								$("#delete_tax").attr("tax_id",taxid);
							});
							$(".editTax").click(function() {
								var taxID = $(this).attr('tax_id');
								$("#edit_tax").attr("tax_id",taxID);
								
								$.ajax({
									url: "admin_queries/tax_edit.php",
									type: "POST",
									data: { taxID: taxID },
									dataType:"JSON",
									success: function(data) {
										if( data.official_number ){
											$('#editTaxNumber').val(data.official_number);
										}
										if( data.description ){
											$('#editTaxDesc').val(data.description);
										}
										if( data.country ){
											$('#editTaxCity').val(data.country);
										}
										if( data.tax_rate ){
											$('#editTaxCost').val(data.tax_rate);
										}
									}
								}); 
							});
						</script>
						<!--END TAXES OF USERS-->
						
						<!--SUPPLIERS-->
						<div class="tab-pane" id="suppliers" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список поставщиков</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchSuppliers" type="text" class="form-control" placeholder="Поиск">
												<span id="removeSuppliers" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeSuppliers").click(function(){
											$("#searchSuppliers").val('');
											var value = $("#removeSuppliers").val().toLowerCase();
											$("#adminSuppliers tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchSuppliers").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#adminSuppliers tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="row" align="center" style="margin-bottom: 20px;">
										<button class="btn btn-success" data-toggle="modal" data-target="#add_suppliers">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">  
											<thead>
												<?php
													$users = getAdminSuppliers();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Название</th>
																<th>Описание</th>
																<th>Город</th>
																<th>Телефон</th>
																<th>Сайт</th>
																<th>Редакт.</th>
																<th>Удалить</th>
															</tr>
														";
													}
												?>
											</thead>
											<tbody id="adminSuppliers">
												<?php
													$users = getAdminSuppliers();
													if(mysqli_num_rows($users)==0){
														echo "<h2 align='center'>Никто не хочет с нами дружить :(</h2>";
													}
													else{
														while ($row = $users->fetch_assoc()) {
															echo "
																<tr>
																	";
																	if(empty($row["name"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["name"]."</td>"; }
																	if(empty($row["description"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["description"]."</td>"; }
																	if(empty($row["city"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["city"]."</td>"; }
																	if(empty($row["phone"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td><a href='tel:".$row["phone"]."'>".$row["phone"]."</a></td>"; }
																	if(empty($row["site"])){ echo "<td>Не указано</td>"; }
																	else { echo "<td><a target=_blank href='https://www.".$row["site"]."'>".$row["site"]."</a></td>"; }
																	echo "
																	<td><button supplier_id='".$row["id"]."' class='editSupplier btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit_suppliers'><span class='glyphicon glyphicon-pencil'></span></button></td>
																	<td><button supplier_id='".$row["id"]."' class='deleteSupplier btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete_suppliers' ><span class='glyphicon glyphicon-trash'></span></button></td>
																</tr> 
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
						<script>
							$(".deleteSupplier").click(function() {
								var supid = $(this).attr('supplier_id');
								$("#delete_suppliers").attr("supplier_id",supid);
							});
							$(".editSupplier").click(function() {
								var supID = $(this).attr('supplier_id');
								$("#edit_suppliers").attr("supplier_id",supID);
								
								$.ajax({
									url: "admin_queries/supplier_edit.php",
									type: "POST",
									data: { supplierID: supID },
									dataType:"JSON",
									success: function(data) {
										if( data.name ){
											$('#editSupplierNameAdmin').val(data.name);
										}
										if( data.description ){
											$('#editSupplierDescAdmin').val(data.description);
										}
										if( data.city ){
											$('#editSupplierCityAdmin').val(data.city);
										}
										if( data.phone ){
											$('#editSupplierPhoneAdmin').val(data.phone);
										}
										if( data.site ){
											$('#editSupplierSuiteAdmin').val(data.site);
										}
									}
								}); 
							});
						</script>
						<!--END SUPPLIERS-->
						
						<!--DELIVERIES-->
						<div class="tab-pane" id="deliveries" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список служб доставки</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchDeliveries" type="text" class="form-control" placeholder="Поиск">
												<span id="removeDeliveries" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeDeliveries").click(function(){
											$("#searchDeliveries").val('');
											var value = $("#removeDeliveries").val().toLowerCase();
											$("#adminDeliveries tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchDeliveries").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#adminDeliveries tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="row" align="center" style="margin-bottom: 20px;">
										<button class="btn btn-success" data-toggle="modal" data-target="#add_deliveries">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getAdminDeliveries();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Название</th>
																<th>Описание</th>
																<th>Город</th>
																<th>Телефон</th>
																<th>Email</th>
																<th>Стоимость услуг</th>
																<th>Начальный адрес</th>
																<th>Редакт.</th>
																<th>Удалить</th>
															</tr>
														";
													}
												?>
											</thead>
											<tbody id="adminDeliveries">
												<?php
													$users = getAdminDeliveries();
													if(mysqli_num_rows($users)==0){
														echo "<h2 align='center'>Никто не хочет с нами дружить :(</h2>";
													}
													else{
														while ($row = $users->fetch_assoc()) {
															echo "
																<tr>
																	";
																	if(empty($row["name"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["name"]."</td>"; }
																	if(empty($row["description"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["description"]."</td>"; }
																	if(empty($row["city"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["city"]."</td>"; }
																	if(empty($row["phone"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td><a href='tel:".$row["phone"]."'>".$row["phone"]."</a></td>"; }
																	if(empty($row["email"])){ echo "<td>Не указано</td>"; }
																	else { echo "<td><a target=_blank href='mailto:".$row["email"]."'>".$row["email"]."</a></td>"; }
																	if(empty($row["cost_of_service"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["cost_of_service"]."</td>"; }
																	if(empty($row["start_adress"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["start_adress"]."</td>"; }
																	echo "
																	<td><button deliverie_id='".$row["id"]."' class='editDeliverie btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit_deliveries'><span class='glyphicon glyphicon-pencil'></span></button></td>
																	<td><button deliverie_id='".$row["id"]."' class='deleteDeliverie btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete_deliveries' ><span class='glyphicon glyphicon-trash'></span></button></td>
																</tr> 
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
						<script>
							$(".deleteDeliverie").click(function() {
								var delid = $(this).attr('deliverie_id');
								$("#delete_deliveries").attr("deliverie_id",delid);
							});
							$(".editDeliverie").click(function() {
								var delID = $(this).attr('deliverie_id');
								$("#edit_deliveries").attr("deliverie_id",delID);
								
								$.ajax({
									url: "admin_queries/deliverie_edit.php",
									type: "POST",
									data: { deliverieID: delID },
									dataType:"JSON",
									success: function(data) {
										if( data.name ){
											$('#editDeliveriesNameAdmin').val(data.name);
										}
										if( data.description ){
											$('#editDeliveriesDescAdmin').val(data.description);
										}
										if( data.city ){
											$('#editDeliveriesCityAdmin').val(data.city);
										}
										if( data.phone ){
											$('#editDeliveriesPhoneAdmin').val(data.phone);
										}
										if( data.email ){
											$('#editDeliveriesEmailAdmin').val(data.email);
										}
										if( data.cost_of_service ){
											$('#editDeliveriesCostAdmin').val(data.cost_of_service);
										}
										if( data.start_adress ){
											$('#editDeliveriesStartAdressAdmin').val(data.start_adress);
										}
									}
								}); 
							});
						</script>
						<!--END DELIVERIES-->
						
						<!--PRODUCTS LIST-->
						<div class="tab-pane" id="products" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список товаров</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchProducts" type="text" class="form-control" placeholder="Поиск">
												<span id="removeProducts" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeProducts").click(function(){
											$("#searchProducts").val('');
											var value = $("#removeProducts").val().toLowerCase();
											$("#productsAdmin tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchProducts").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#productsAdmin tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="row" align="center" style="margin-bottom: 20px;">
										<button class="btn btn-success" data-toggle="modal" data-target="#add_product">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getAdminProducts();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Фото</th>
																<th>Фото<br/>#1</th>
																<th>Фото<br/>#2</th>
																<th>Название</th>
																<th>Производитель</th>
																<th>Категория</th>
																<th>Добавлен</th>
																<th>Налог</th>
																<th>Описание (сокр.)</th>
																<th>Описание (полн.)</th>
																<th>Город</th>
																<th>Цена</th>
																<th>Скидочная цена</th>
																<th>Дата добавления</th>
																<th>Остаток</th>
																<th>Редакт.</th>
																<th>Удалить</th>
																<th>Редакт. фото #1</th>
																<th>Редакт. фото #2</th>
																<th>Редакт. фото #3</th>
															</tr>
														";
													}
												?>
											</thead>
											<tbody id="productsAdmin">
												<tr>
													<?php
														$users = getAdminProducts();
														if(mysqli_num_rows($users)==0){
															echo "<h2 align='center'>Мы танцуем на палубе тонущего корабля!</h2>";
														}
														else{
															while ($row = $users->fetch_assoc()) {
																echo "<tr>";
																	if(empty($row["main_photo"])) { echo "<td>_</td>"; }
																	else { echo "<td><img src='images/goods/".$row['main_photo']."' alt='".$row['prname']."' class='img-responsive'></td>"; }
																	if(empty($row["full_face_photo"])) { echo "<td>_</td>"; }
																	else { echo "<td><img src='images/goods/".$row['full_face_photo']."' alt='".$row['prname']."' class='img-responsive'></td>"; }
																	if(empty($row["profile_photo"])) { echo "<td>_</td>"; }
																	else { echo "<td><img src='images/goods/".$row['profile_photo']."' alt='".$row['prname']."' class='img-responsive'></td>"; }
																	if(empty($row["prname"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td><a target=_blank href='single_item.php?id=".$row['prid']."'>".$row["prname"]."</td>"; }
																	if(empty($row["sup"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["sup"]."</td>"; }
																	if(empty($row["cat"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["cat"]."</td>"; }
																	if(empty($row["adder"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td><a href='mailto:".$row['adder']."'>".$row["adder"]."</a></td>"; }
																	if(empty($row["tax"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row["tax"]."</td>"; }
																	if(empty($row["description_short"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".mb_substr($row["description_short"],0,30)."...</td>"; }
																	if(empty($row["description_full"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".mb_substr($row["description_full"],0,30)."...</td>"; }
																	if(empty($row["city"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row['city']."</td>"; }
																	if(empty($row["price"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row['price']."</td>"; }
																	if(empty($row["discount_price"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row['discount_price']."</td>"; }
																	if(empty($row["added_date"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row['added_date']."</td>"; }
																	if(empty($row["balance"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td>".$row['balance']."</td>"; }
																	echo "
																		<td><button prid='".$row['prid']."' class='editProduct btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit_product' ><span class='glyphicon glyphicon-pencil'></span></button></td>
																		<td><button prid='".$row['prid']."' class='deleteProduct btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete_product' ><span class='glyphicon glyphicon-trash'></span></button></td>
																		<td><button photos='".$row['photos_id']."' prid='".$row['prid']."' class='editMainPhoto btn btn-success btn-xs' style='margin-top: -15px;' data-title='Edit' data-toggle='modal' data-target='#edit_main_photo' ><span class='glyphicon glyphicon-pencil'></span></button></td>
																		<td><button photos='".$row['photos_id']."' prid='".$row['prid']."' class='editFullFacePhoto btn btn-success btn-xs' style='margin-top: -15px;' data-title='Edit' data-toggle='modal' data-target='#edit_full_face_photo' ><span class='glyphicon glyphicon-pencil'></span></button></td>
																		<td><button photos='".$row['photos_id']."' prid='".$row['prid']."' class='editProfilePhoto btn btn-success btn-xs' style='margin-top: -15px;' data-title='Edit' data-toggle='modal' data-target='#edit_profile_photo' ><span class='glyphicon glyphicon-pencil'></span></button></td>
																	";
																echo "</tr>";
															}
														}
													?>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<script>
							$(".editMainPhoto").click(function() {
								var prid = $(this).attr('prid');
								var ph = $(this).attr('photos');
								$("#edit_main_photo").attr("prid",prid);
								$("#edit_main_photo").attr("photos",ph);
							});
							$(".editFullFacePhoto").click(function() {
								var prid = $(this).attr('prid');
								var ph = $(this).attr('photos');
								$("#edit_full_face_photo").attr("prid",prid);
								$("#edit_full_face_photo").attr("photos",ph);
							});
							$(".editProfilePhoto").click(function() {
								var prid = $(this).attr('prid');
								var ph = $(this).attr('photos');
								$("#edit_profile_photo").attr("prid",prid);
								$("#edit_profile_photo").attr("photos",ph);
							});
							$(".deleteProduct").click(function() {
								var prid = $(this).attr('prid');
								$("#delete_product").attr("prid",prid);
							});
							$(".editProduct").click(function() {
								var prodID = $(this).attr('prid');
								$("#edit_product").attr("prid",prodID);
								
								$.ajax({
									url: "admin_queries/product_edit.php",
									type: "POST",
									data: { prid: prodID },
									dataType:"JSON",
									success: function(data) {
										if( data.prname ){
											$('#editProductNameAdmin').val(data.prname);
										}
										if( data.sup ){
											$('#editProductSupplierAdmin').val(data.sup);
										}
										if( data.cat ){
											$('#editProductCategoryAdmin').val(data.cat);
										}
										if( data.adder ){
											$('#editProductUserAddedAdmin').val(data.adder);
										}
										if( data.tax ){
											$('#editProductTaxAdmin').val(data.tax);
										}
										if( data.description_short ){
											$('#editProductDescriptionShortAdmin').val(data.description_short);
										}
										if( data.description_full ){
											$('#editProductDescriptionFullAdmin').val(data.description_full);
										}
										if( data.city ){
											$('#editProductCityAdmin').val(data.city);
										}
										if( data.price ){
											$('#editProductPriceAdmin').val(data.price);
										}
										if( data.discount_price ){
											$('#editProductPriceDiscountAdmin').val(data.discount_price);
										}
										if( data.added_date ){
											$('#editProductDateAdmin').val(data.added_date);
										}
										if( data.balance ){
											$('#editProductReqAdmin').val(data.balance);
										}
									}
								}); 
							});
						</script>
						<!--END PRODUCTS LIST-->
						
						<!--DISCOUNTS-->
						<div class="tab-pane" id="discounts" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Скидки на товары</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchDiscountPrices" type="text" class="form-control" placeholder="Поиск">
												<span id="removeDiscountPrices" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeDiscountPrices").click(function(){
											$("#searchDiscountPrices").val('');
											var value = $("#removeDiscountPrices").val().toLowerCase();
											$("#adminDiscounts tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchDiscountPrices").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#adminDiscounts tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getAdminDiscountsProducts();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Название товара</th>
																<th>Скидочная цена (руб.)</th>
																<th>Отмена скидки</th>
																<th>Добавление скидки</th>
															</tr>
														";
													}
												?>
											</thead>
											<tbody id="adminDiscounts">
												<?php
													$users = getAdminDiscountsProducts();
													if(mysqli_num_rows($users)==0){
														echo "<h2 align='center'>Жадность - это грех!</h2>";
													}
													else{
														while ($row = $users->fetch_assoc()) {
															echo "
																<tr>
																	";
																	if(empty($row["name"])) { echo "<td>Не указано</td>"; }
																	else { echo "<td><a target=_blank href='single_item.php?id=".$row["id"]."'>".$row["name"]."</a></td>"; }
																	if(empty($row["discount_price"])) { echo "<td><input pro='".$row['id']."' type='text' class='form-control' value=''></td>";  }
																	else { echo "<td><input pro='".$row['id']."' type='text' class='form-control' value='".$row["discount_price"]."'></td>"; }
																	echo "
																	<td><button prid='".$row["id"]."' style='margin-top: 10px;' class='deleteDiscount btn btn-danger' data-toggle='modal' data-target='#discount_delete'>Отмена</button></td>
																	<td><button prid='".$row["id"]."' class='acceptDiscount btn btn-success' data-toggle='modal' data-target='#discount_add'>Подтвердить</button></td>
																</tr> 
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
						<script>
							$(".deleteDiscount").click(function() {
								var delid = $(this).attr('prid');
								$("#discount_delete").attr("prid",delid);
							});
							$(".acceptDiscount").click(function() {
							
								var delID = $(this).attr('prid');
								$("#discount_add").attr("prid",delID);
								
								var discountValue = $("[pro="+delID+"]").val();
								$("#discount_add").attr("cost",discountValue);
							});
						</script>
						<!--DISCOUNTS-->
						
						<!--CATEGORIES-->
						<div class="tab-pane" id="cat" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список категорий</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchCategories" type="text" class="form-control" placeholder="Поиск">
												<span id="removeCategories" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeCategories").click(function(){
											$("#searchCategories").val('');
											var value = $("#removeCategories").val().toLowerCase();
											$("#shopCategories tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchCategories").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#shopCategories tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="row" align="center" style="margin-bottom: 20px;">
										<button class="btn btn-success" data-toggle="modal" data-target="#add_categorie">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getAdminCategories();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Название</th>
																<th>Редактировать</th>
																<th>Удалить</th>
															</tr>
														";
													}
												?>	
											</thead>
											<tbody id="shopCategories">
												<tr>
													<?php
														$users = getAdminCategories();
														if(mysqli_num_rows($users)==0){
															echo "<h2 align='center'>Увольте креативного директора!</h2>";
														}
														else{
															while ($row = $users->fetch_assoc()) {
																echo "
																	<tr>
																		";
																		if(empty($row["name"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["name"]."</td>"; }
																		echo "
																		<td><button cat=".$row["id"]." class='editCat btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit_categories' ><span class='glyphicon glyphicon-pencil'></span></button></td>
																		<td><button cat=".$row["id"]." class='deleteCat btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete_category' ><span class='glyphicon glyphicon-trash'></span></button></td>
																	</tr> 
																	";
															}
														}
													?>			
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<script>
							$(".deleteCat").click(function() {
								var catid = $(this).attr('cat');
								$("#delete_category").attr("cat",catid);
							});
							$(".editCat").click(function() {
								var catID = $(this).attr('cat');
								$("#edit_categories").attr("cat",catID);
								
								$.ajax({
									url: "admin_queries/categorie_edit.php",
									type: "POST",
									data: { categorieID: catID },
									dataType:"JSON",
									success: function(data) {
										if( data.name ){
											$('#editCategoriesNameAdmin').val(data.name);
										}
									}
								}); 
							});
						</script>
						<!--END CATEGORIES-->
						
						<!--ORDER LIST-->
						<div class="tab-pane" id="orders" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список заказов</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group stylish-input-group">
												<input id="searchOrders" type="text" class="form-control" placeholder="Поиск">
												<span id="removeOrders" class="input-group-addon">
													<button>
														<span class="glyphicon glyphicon-remove"></span>
													</button>  
												</span>
											</div>
										</div>
									</div>
									
									<script>
										$("#removeOrders").click(function(){
											$("#searchOrders").val('');
											var value = $("#removeOrders").val().toLowerCase();
											$("#adminOrders tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										});
										$(document).ready(function(){
										  $("#searchOrders").on("keyup", function() {
											var value = $(this).val().toLowerCase();
											$("#adminOrders tr").filter(function() {
											  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
											});
										  });
										});
									</script>
									
									<div class="table-responsive">	
										<table class="table table-bordered table-striped">   
											<thead>
												<?php
													$users = getAdminOrders();
													if(mysqli_num_rows($users)==0){
													}
													else{
														echo 
														"
															<tr>
																<th>Email</th>
																<th>Заказанные вещи</th>
																<th>Место отправления</th>
																<th>Место доставки</th>
																<th>Дата отправки</th>
																<th>Дата начала отправления</th>
																<th>Дата прибытия</th>
																<th>Дата прибытия (факт)</th>
																<th>Общая стоимость</th>
																<th>Статус заказа</th>
																<th>Детали заказа</th>
																<th>Подробности</th>
																<th>Редакт.</th>
																<th>Удалить</th>
															</tr>
														";
													}
												?>	
											</thead>
											<tbody id="adminOrders">
												<tr>
													<?php
														$users = getAdminOrders();
														if(mysqli_num_rows($users)==0){
															echo "<h2 align='center'>Нам пора сворачиваться!</h2>";
														}
														else{
															while ($row = $users->fetch_assoc()) {
																echo "<tr>";
																		if(empty($row["email"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td><a href='mailto:".$row["email"]."'>".$row["email"]."</a></td>"; }
																		echo "<td>"; 
																			$result = getListOfProductsForOrder(strval($row['products_list']));
																			while ($tech = $result->fetch_assoc()) {
																				echo "<a target=_blank style='display: block' href='single_item.php?id=".$tech['id']."'>".$tech["name"]."</a>";
																			}
																		echo "</td>";
																		if(empty($row["start_adress"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["start_adress"]."</td>"; }
																		if(empty($row["end_adress"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["end_adress"]."</td>"; }
																		if(empty($row["date_ordering"]) || $row["date_ordering"]=='0000-00-00') { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["date_ordering"]."</td>"; }
																		if(empty($row["date_departure"]) || $row["date_departure"]=='0000-00-00') { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["date_departure"]."</td>"; }
																		if(empty($row["date_arrival"]) || $row["date_arrival"]=='0000-00-00') { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["date_arrival"]."</td>"; }
																		if(empty($row["date_arrival_fact"]) || $row["date_arrival_fact"]=='0000-00-00') { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["date_arrival_fact"]."</td>"; }
																		if(empty($row["total_cost"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["total_cost"]."</td>"; }
																		if(empty($row["order_status"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["order_status"]."</td>"; }
																		if(empty($row["order_details"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["order_details"]."</td>"; }
																		if(empty($row["report"])) { echo "<td>Не указано</td>"; }
																		else { echo "<td>".$row["report"]."</td>"; }
																		echo "<td><button order=".$row['ordid']." class='editOrder btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit_order' ><span class='glyphicon glyphicon-pencil'></span></button></td>";
																		echo "<td><button order=".$row['ordid']." class='deleteOrder btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete_order' ><span class='glyphicon glyphicon-trash'></span></button></td>";
																echo "</tr>";
															}
														}
													?>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<script>
							$(".deleteOrder").click(function() {
								var ordid = $(this).attr('order');
								$("#delete_order").attr("order",ordid);
							});
							$(".editOrder").click(function() {
								var ordID = $(this).attr('order');
								$("#edit_order").attr("order",ordID);
								
								$.ajax({
									url: "admin_queries/order_edit.php",
									type: "POST",
									data: { orderID: ordID },
									dataType:"JSON",
									success: function(data) {
										if( data.email ){
											$('#editOrderEmailAdmin').val(data.email);
										}
										if( data.products_list ){
											$('#editOrderStuffAdmin').val(data.products_list);
										}
										if( data.start_adress ){
											$('#editOrderAdressStartAdmin').val(data.start_adress);
										}
										if( data.end_adress ){
											$('#editOrderAdressEndAdmin').val(data.end_adress);
										}
										if( data.date_ordering ){
											$('#editOrderDateStartAdmin').val(data.date_ordering);
										}
										if( data.date_departure ){
											$('#editOrderDateDepartAdmin').val(data.date_departure);
										}
										if( data.date_arrival ){
											$('#editOrderDateEndAdmin').val(data.date_arrival);
										}
										if( data.date_arrival_fact ){
											$('#editOrderDateEndFactAdmin').val(data.date_arrival_fact);
										}
										if( data.total_cost ){
											$('#editOrderTotalPriceAdmin').val(data.total_cost);
										}
										if( data.order_status ){
											$('#editOrderStatusAdmin').val(data.order_status);
										}
										if( data.order_details ){
											$('#editOrderDetailsAdmin').val(data.order_details);
										}
										if( data.report ){
											$('#editOrderReportAdmin').val(data.report);
										}
									}
								}); 
							});
						</script>
						<!--END ORDER LIST-->
					</div>	
				</div>
			</div>
		</div>
		<!--END MAIN BLOCK-->
<?php
	include 'includes/admin_panel/accept/accept_discount.php';
	include 'includes/admin_panel/accept/accept_role.php';
	
	include 'includes/admin_panel/add/add_deliveries.php';
	include 'includes/admin_panel/add/add_product.php';
	include 'includes/admin_panel/add/add_supplier.php';
	include 'includes/admin_panel/add/add_categorie.php';
	include 'includes/admin_panel/add/add_tax.php';
	
	include 'includes/admin_panel/add/add_main_photo.php';
	include 'includes/admin_panel/add/add_full_face_photo.php';
	include 'includes/admin_panel/add/add_profile_photo.php';
	
	include 'includes/admin_panel/delete/delete_categories.php';
	include 'includes/admin_panel/delete/delete_comment.php';
	include 'includes/admin_panel/delete/delete_deliveries.php';
	include 'includes/admin_panel/delete/delete_discount.php';
	include 'includes/admin_panel/delete/delete_order.php';
	include 'includes/admin_panel/delete/delete_suppliers.php';
	include 'includes/admin_panel/delete/delete_user.php';
	include 'includes/admin_panel/delete/delete_product.php';
	include 'includes/admin_panel/delete/delete_tax.php';
	
	include 'includes/admin_panel/edit/edit_categories.php';
	include 'includes/admin_panel/edit/edit_deliveries.php';
	include 'includes/admin_panel/edit/edit_order.php';
	include 'includes/admin_panel/edit/edit_product.php';
	include 'includes/admin_panel/edit/edit_supplier.php';
	include 'includes/admin_panel/edit/edit_user.php';
	include 'includes/admin_panel/edit/edit_tax.php';
	
	include 'includes/footer.php';
?>