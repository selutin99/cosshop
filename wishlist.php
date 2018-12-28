<?php
	$title='Creative Online Store - Избранные товары';
	$page='wishlist';

	include 'includes/header.php';
	
	if(!empty($_SESSION['wishlist'])){
		$total_price = 0;
		$_SESSION['wishlist'] = array_unique($_SESSION['wishlist']);
		$products_values = implode(',',$_SESSION['wishlist']);
	}
?>	
		<!--MAIN BLOCK-->
		<div class="container" style="min-height: 75vh;">
			<h2 align="center" style="margin-bottom: 20px;">Избранные товары</h2>
			<table id="cart" class="table table-hover table-condensed">
				<thead>
					<?php
						if(!empty($_SESSION['wishlist'])){
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
						if(!empty($_SESSION['wishlist'])){
							$result = findProductsListForWishList($products_values);
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
										</td>
										<td data-th='Цена' class='table_price'>".$row['price']." р.</td>
										<td data-th='Остаток' class='table_qua'>&nbsp ".$row["balance"]." шт.</td>
										<td data-th='Реал. цена' class='table_price'>".intval($row["price"]+$row["tax_rate"])." р.</td>
										<td class='actions' data-th=''>";
										if(!empty($row['discount_price'])){
											echo "<button title='Добавить в корзину' cost=".intval($row["discount_price"]+$row["tax_rate"])." prod_id=".$row["prid"]." class='shoppingcartAdder btn btn-info btn-sm'><span class='glyphicon glyphicon-shopping-cart'></span></button>";
										}
										else{
											echo "<button title='Добавить в корзину' cost=".intval($row["price"]+$row["tax_rate"])." prod_id=".$row["prid"]." class='shoppingcartAdder btn btn-info btn-sm'><span class='glyphicon glyphicon-shopping-cart'></span></button>";
										}
										echo "<button style='margin-left: 5px;' title='Удалить из избранных товаров' prod_id=".$row["prid"]." type='button' class='removerProduct btn btn-danger btn-sm'><i class='fa fa-trash-o'></i></button>								
										</td></tr>";
								$total_price+= intval($row["price"]+$row["tax_rate"]);
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
						if(!empty($_SESSION['wishlist'])){
							echo "
								<tr class='visible-xs'>
									<td class='total_price'><strong>Всего: ".$total_price." р.</strong></td>
								</tr>
								<tr>
									<td><a href='products.php' id='continue_shopping' class='btn btn-primary'><i class='fa fa-angle-left'></i> Продолжить шопинг</a></td>
									<td colspan='2' class='hidden-xs'></td>
									<td class='hidden-xs text-center total_price'><strong>Всего: ".$total_price." р.</strong></td>
									<td><button type='button' class='adderToCart btn btn-success btn-block'>Добавить в корзину <i class='fa fa-angle-right'></i></button></td>
								</tr>
							";
						}
					?>
				</tfoot>
			</table>
		</div>
		
		<!--END MAIN BLOCK-->
		
<script>
	$(".removerProduct").click(function() {
	   var trid = $(this).attr('prod_id');
	   $.ajax({
			url: "includes/deleteProductFromWishList.php",
			type: "POST",
			data: { productID: trid },
			success: function(data) {
				location.reload();
			}
		});     
	});
	$(".shoppingcartAdder").click(function() {
	   var trid = $(this).attr('prod_id');
	   var cost = $(this).attr('cost');
	   $.ajax({
			url: "includes/addToCartFromWishList.php",
			type: "POST",
			data: { productID: trid, price: cost },
			success: function(data) {
				location.reload();
			},
			error:function(data){
				$("#login").click();
			}
		});     
	});
	$(".adderToCart").click(function() {
	   $.ajax({
			url: "includes/addAllItemsToCart.php",
			type: "POST",
			success: function(data) {
				location.href = "shopping_cart.php";
			},
			error:function(data){
				$("#login").click();
			}
		});     
	});
</script>

<?php
	include 'includes/resize_image.php';
	include 'includes/footer.php';
?>