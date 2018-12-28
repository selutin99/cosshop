<?php
	$title='Creative Online Store - Список товаров';
	$page='products';
	
	include 'includes/header.php';
	
	$num = 4;  
	$page = $_GET['page'];  
	$result = countProducts();  
	
	// Находим общее число страниц  
	$total = intval(($result['cnt'] - 1) / $num) + 1;  
	$page = intval($page);  

	if(empty($page) or $page < 0) $page = 1;  
	if($page > $total) $page = $total;  
	
	$start = $page * $num - $num;
	
	if(isset($_GET['q']) && !empty($_GET['q'])){
		$search = trim(urldecode(htmlspecialchars($_GET['q'])));
	}
?>
		<!--FILTER-->
		<div class="container">
			<div class="row">
				
				<?php include 'includes/filter.php'; ?>
				
				<!--LIST OF PRODUCTS-->
					<div class="col-sm-9 col-md-9" style="margin-top: 55px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 align="center" style="font-weight: bold;">Товары</h2>
							</div>
							<div class="panel-body">
								<div>
									<button class="btn btn-primary filter-button" id="all_products" data-filter="all">Все товары</button>
									<button class="btn btn-default filter-button" data-filter="new">Новинки</button>
									<button class="btn btn-default filter-button" data-filter="discounts">Скидки</button>
								</div>
								<br/>
								
								<div class="row">
									<?php			
										$result = getProductsList($start, $num);
										while ($row = $result->fetch_assoc()) {
											echo "<div class='col-md-6 filter "; if(!empty($row['discount_price'])){echo "discounts";} else if(date('Y', strtotime($row['added_date']))>=date('Y', strtotime("now"))){echo "new";} echo "'>
													<div class='thumbnail'>
														<a class='thumbnail' href='#' data-image-id='' data-toggle='modal' data-title='".$row['name']."' data-image='images/goods/".$row['main_photo']."' data-target='#image-gallery'>
															<img src='images/goods/".$row['main_photo']."' alt=".$row['title']." class='img-responsive'/>
														</a>
														<div class='caption'>
														  ";
															if(!empty($row['discount_price'])){
																echo "
																	<h4 class=\"pull-right\"><s>".$row['price']." р.</s></h4>
																	<h4 class=\"pull-right\" style='color: red;'>".$row['discount_price']." р.</h4>
																";
															}
															else{
															  echo "<h4 class=\"pull-right\">".$row['price']." р.</h4>";
															}
															echo"
														  <h4><a href='single_item.php?id=".$row['prid']."'>".$row['name']."</a></h4>
														  <p>".$row['description_short']."</p>
														</div>
														<div class='space-ten'></div>
														<div class='btn-ground text-center'>
															<button cost="; if(!empty($row['discount_price'])){echo $row["discount_price"];}else{echo $row["price"];} echo" product_id=".$row["prid"]." type='button' class='cartshop btn btn-danger'><span class='glyphicon glyphicon-shopping-cart'></span> Добавить в корзину</button>
															"; if(empty($row['discount_price'])){ echo "<button prod_id=".$row["prid"]." type=\"button\" class=\"wishlist btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> В избранное</button>";}
														echo"
														</div>
														<div class=\"space-ten\"></div>
													</div>
												  </div>			
												  ";
										}
									?>
								</div>
								<div class="centered text-center">
									<?php  
										// Проверяем нужны ли стрелки назад
										if ($page != 1) $pervpage = '<a href="/products.php?page=1"><<</a><a href="/products.php?page='. ($page - 1).'"><</a> ';
										// Проверяем нужны ли стрелки вперед
										if ($page != $total) $nextpage = '  <a href="/products.php?page='. ($page + 1).'">></a><a href="/products.php?page='.$total.'">>></a> ';
										// Находим две ближайшие станицы с обоих краев, если они есть
										if($page - 2 > 0) $page2left = ' <a href="/products.php?page='. ($page - 2) .'">'. ($page - 2) .'</a>  ';
										if($page - 1 > 0) $page1left = '<a href="/products.php?page='. ($page - 1) .'">'. ($page - 1) .'</a>  ';
										if($page + 2 <= $total) $page2right = '  <a href="/products.php?page='. ($page + 2).'">'. ($page + 2) .'</a>';
										if($page + 1 <= $total) $page1right = '  <a href="/products.php?page='. ($page + 1).'">'. ($page + 1) .'</a>'; 

										// если страниц больше чем одна
										if ($total>1) 
											echo '<p><div align="center" class="navigation">'.$pervpage.$page2left.$page1left.'<span>'.$page.'</span>'.$page1right.$page2right.$nextpage.'</div></p>';

									?>
								</div>
							</div>
						</div>
					</div>
					<!--END LIST OF PRODUCTS-->
				
			</div>
		</div>
		<!--END FILTER-->

<script>
	$(".wishlist").click(function() {
	   var prid = $(this).attr('prod_id');
	   $.ajax({
			url: "includes/insertToWishList.php",
			type: "POST",
			data: { productID: prid },
			success: function(data) {
				$("#wishlistModal").modal();
			}
		});     
	});
	$(".cartshop").click(function() {
	   var prid = $(this).attr('product_id');
	   var cost = $(this).attr('cost');
	   $.ajax({
			url: "includes/insertToCart.php",
			type: "POST",
			data: { productID: prid, price: cost },
			success: function(data) {
				$("#shoppingCart").modal();
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
	
	include 'css/buttons.html';
?>