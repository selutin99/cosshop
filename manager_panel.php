<?php
	$title='Creative Online Store - Панель управления';
	$page='manager_panel';
	
	include 'includes/header.php';
	include 'functions/admin.php';
?>
		
		<!--MAIN BLOCK-->
		<div class="container" style="min-height: 75vh;">
			<div class="row">
				<div class="col-md-3 ">
					<div class="list-group" id="myList" role="tablist">
						<h4 align="center">Товары</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#products" role="tab">Список товаров</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#discounts" role="tab">Скидки на товары</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content">
						<div class="tab-pane active" id="hello" role="tabpanel">
							<div class="row" style="margin-top: 50px;">
								<h2 align="center">Добро пожаловать в панель управления.</h4>
								<h3 align="center">Воспользуйтесь меню слева для дальнейших настроек.</h5>
							</div>
						</div>
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
					</div>	
				</div>
			</div>
		</div>
		<!--END MAIN BLOCK-->
		
<?php
	include 'includes/admin_panel/add/add_product.php';
	include 'includes/admin_panel/edit/edit_product.php';
	
	include 'includes/admin_panel/accept/accept_discount.php';
	include 'includes/admin_panel/delete/delete_discount.php';
	
	include 'includes/footer.php';
?>