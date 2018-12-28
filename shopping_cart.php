<?php
	$title='Creative Online Store - Корзина';
	$page='shopping_cart';
	
	include 'includes/header.php';
	
	$cart_array = array();
	$total_price = 0;
	
	$result = findUniqueProductsForCart($_SESSION['userID']);
	while ($row = $result->fetch_assoc()) {
		$cart_array[] = $row['items_id'];
	}
	$cart_array = implode(',',$cart_array);
?>
		<!--MAIN BLOCK-->
		<div class="container" style="min-height: 75vh;">
			<h2 align="center" style="margin-bottom: 20px;">Корзина</h2>
			<table id="cart" class="table table-hover table-condensed">
				<thead>
					<?php
						if(!empty($cart_array)){
							echo "
								<tr>
									<th style='width:50%'>Товары</th>
									<th style='width:15%'>Цена</th>
									<th style='width:10%'>Остаток</th>
									<th style='width:15%'>Реальная стоимость</th>
									<th style='width:10%'>Действия</th>
								</tr>
							";
						}
					?>
					
				</thead>
				<tbody>
					<?php
						if(!empty($cart_array)){
							$result = findProductsListForCart($cart_array);
							while ($row = $result->fetch_assoc()) {
								echo "<tr>
										<td data-th='Товар'>
											<div class='row'>
												<div class='col-sm-4 col-md-4'>
													<a class='thumbnail' href='#' data-image-id='' data-toggle='modal' data-title='".$row['name']."' data-image='images/goods/".$row['main_photo']."' data-target='#image-gallery'>
														<img src='images/goods/".$row['main_photo']."' alt=".$row['title']." class='img-responsive'/>
													</a>
												</div>
												<div class='col-sm-7'>
													<h4 class='nomargin'><a href='single_item.php?id=".$row['prid']."'>".$row['name']."</a></h4>
													<p>".$row['description_short']."</p>
												</div>
											</div>
										</td>";
										if(!empty($row['discount_price'])){ echo "<td data-th='Цена' class='table_price'>".$row['discount_price']." р.</td>";}
										else{ echo "<td data-th='Цена' class='table_price'>".$row['price']." р.</td>";}
										echo "
										<td data-th='Остаток' class='table_qua'>&nbsp ".$row["balance"]." шт.</td>";
										if(!empty($row['discount_price'])){ echo "<td data-th='Реал. цена' class='table_price'>".intval($row["discount_price"]+$row["tax_rate"])." р.</td>";}
										else{ echo "<td data-th='Реал. цена' class='table_price'>".intval($row["price"]+$row["tax_rate"])." р.</td>"; }
										echo"
										<td class='actions' data-th=''>";
											if(empty($row['discount_price'])){
												echo "<button title='Добавить в избранные товары' prod_id=".$row["prid"]." class='wishlistAdder btn btn-info btn-sm' style='margin-right: 10px;'><span class='glyphicon glyphicon-heart'></span></button>";
											}
											echo "<button title='Удалить из корзины' prod_id=".$row["prid"]." type='button' class='removerProductCart btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></button>								
										</td></tr>";
								if(!empty($row["discount_price"])){
									$total_price+= intval($row["discount_price"]+$row["tax_rate"]);
								}
								else{
									$total_price+= intval($row["price"]+$row["tax_rate"]);
								}
							}
						}
						else{
							echo "<h3 align='center' style='margin-top: 40px;'>Пока здесь пусто</h3>";
							echo "<div style='text-align: center'>
									<a href='products.php' class='btn btn-success'> Начать шопинг</a>
								  </div>";
						}
					?>
				</tbody>
				<tfoot>
					<?php
						if(!empty($cart_array)){
							echo "
								<tr class='visible-xs'>
									<td class='total_price'><strong>Всего: ".$total_price." р.</strong></td>
								</tr>
								<tr>
									<td><a href='products.php' id='continue_shopping' class='btn btn-primary'><i class='fa fa-angle-left'></i> Продолжить шопинг</a></td>
									<td colspan='2' class='hidden-xs'></td>
									<td class='hidden-xs text-center total_price'><strong>Всего: ".$total_price." р.</strong></td>
									<td><a href='#' id='ordered' total='".$total_price."' data-toggle='modal' data-target='#acceptOrderModal' class='btn btn-success btn-block'>Оформить заказ <i class='fa fa-angle-right'></i></a></td>
								</tr>
							";
						}
					?>
				</tfoot>
			</table>
		</div>
		
		<!--END MAIN BLOCK-->
		
<?php
	include 'includes/resize_image.php';
	include 'includes/footer.php';
?>

<script>
	$(".removerProductCart").click(function() {
	   var trid = $(this).attr('prod_id');
	   $.ajax({
			url: "includes/deleteProductFromCart.php",
			type: "POST",
			data: { productID: trid },
			success: function(data) {
				window.location.href=window.location.href;
			}
		});     
	});
	$(".wishlistAdder").click(function() {
	   var trid = $(this).attr('prod_id');
	   $.ajax({
			url: "includes/addToWishlistFromCart.php",
			type: "POST",
			data: { productID: trid },
			success: function(data) {
				window.location.href=window.location.href;
			}
		});     
	});
</script>
