<?php
	$title='Creative Online Store - Главная';
	$page='index';
	
	include 'includes/header.php';
?>
		
		<!--CAROUSEL-->
		<div class="container my_carousel">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!--INDICATORS-->
				<ol class="carousel-indicators">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				  <li data-target="#myCarousel" data-slide-to="1"></li>
				  <li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<!--END INDICATORS-->
				
				<!-- PHONE NUMBER -->
				<div class="container">
					<div class="col-md-4">
						<p id="our_phone">
							<a href="callto:88005553535" id="phone">
								<span class="glyphicon glyphicon-earphone" style="margin-right: 10px;"></span>8-800-555-35-35
							</a>
						</p>
					</div>
					
					<div class="col-md-4 col-md-offset-4">
						<p id="your_bucket" class="rel" style="margin-top: 20px; margin-left: 80px;">
							<a href="<?php if($_SESSION['auth']=='yes' || isset($_COOKIE['user'])){echo "shopping_cart.php";} else {echo "\"data-toggle='modal' data-target=\"#loginModal";}?>" class="btn btn-info btn-lg">
								<span class="glyphicon glyphicon-shopping-cart"></span> Корзина 
							</a>	
						</p>
					</div>
				</div>
				<!-- END PHONE NUMBER -->
				
				<!--SLIDES-->
				<div class="carousel-inner">
				  <div class="item active">
					<div class="carousel-caption">
					  <h3>Ноутбуки</h3>
					  <p>Новинки!</p>
					</div>
					<img src="images/mainslider/n1.jpg" class="center-block" style="min-width:50%; max-height: 350px;" alt="Новые ноутбуки">
					
				  </div>

				  <div class="item">
					<img src="images/mainslider/n2.jpg" class="center-block" style="min-width:50%; max-height: 350px;" alt="Новые смартфоны">
					<div class="carousel-caption">
					  <h3>Смартфоны</h3>
					  <p>Новые модели!</p>
					</div>
				  </div>
				
				  <div class="item">
					<img src="images/mainslider/n3.jpg" class="center-block" style="min-width:50%; max-height: 350px;" alt="Новые наушники">
					<div class="carousel-caption hot_prices">
					  <h3>Наушники</h3>
					  <p>Распродажа!</p>
					</div>
				  </div>
			  
				</div>
				<!--END SLIDES-->

				<!--CONTROLLERS-->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
				  <span class="sr-only">Предыдущий</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
				  <span class="sr-only">Следующий</span>
				</a>
				<!--END CONTROLLERS-->
		    </div>
		</div>
		<!--END CAROUSEL-->
		
		<!--LIST OF PRODUCTS-->
		<div class="container">
			<h2 align="center">Новинки</h2>
			<div class="row">
				<?php			
					$result = getNewProducts();
					while ($row = $result->fetch_assoc()) {
						echo "<div class='col-md-4'>
								<div class='thumbnail'>
									<a class='thumbnail' href='#' data-image-id='' data-toggle='modal' data-title='".$row['name']."' data-image='images/goods/".$row['main_photo']."' data-target='#image-gallery'>
										<img src='images/goods/".$row['main_photo']."' alt=".$row['title']." class='img-responsive'/>
									</a>
									<div class='caption'>
									  <h4 class=\"pull-right\">".$row['price']." р.</h4>
									  <h4><a href='single_item.php?id=".$row['prid']."'>".$row['name']."</a></h4>
									  <p>".$row['description_short']."</p>
									</div>
									<div class='space-ten'></div>
									<div class='btn-ground text-center'>
										<button cost="; if(!empty($row['discount_price'])){echo $row["discount_price"];}else{echo $row["price"];} echo" product_id=".$row["prid"]." type='button' class='cartshop btn btn-danger'><span class='glyphicon glyphicon-shopping-cart'></span> Добавить в корзину</button>
										<button prod_id=".$row["prid"]." type=\"button\" class=\"wishlist btn btn-primary\"><span class=\"glyphicon glyphicon-heart\"></span> В избранное</button>
									</div>
									<div class=\"space-ten\"></div>
								</div>
							  </div>			
							  ";
					}
				?>
			</div>
		</div>
		
		<!--END LIST OF PRODUCTS-->
		
		<!--LIST OF SALES-->
		<div class="container">
			<h2 align="center">Скидки</h2>
			<div class="row">
				<?php			
					$result = getDiscounts();
					while ($row = $result->fetch_assoc()) {
						echo "<div class='col-md-4'>
								<div class='thumbnail'>
									<a class='thumbnail' href='#' data-image-id='' data-toggle='modal' data-title='".$row['name']."' data-image='images/goods/".$row['main_photo']."' data-target='#image-gallery'>
										<img src='images/goods/".$row['main_photo']."' alt=".$row['title']." class='img-responsive'/>
									</a>
									<div class='caption'>
									  <h4 class=\"pull-right\"><s>".$row['price']." р.</s></h4>
									  <h4 class=\"pull-right\" style='color: red;'>".$row['discount_price']." р.</h4>
									  <h4><a href='single_item.php?id=".$row['prid']."'>".$row['name']."</a></h4>
									  <p>".$row['description_short']."</p>
									</div>
									<div class='space-ten'></div>
									<div class='btn-ground text-center'>
										<button cost="; if(!empty($row['discount_price'])){echo $row["discount_price"];}else{echo $row["price"];} echo" product_id=".$row["prid"]." type='button' class='cartshop btn btn-danger'><span class='glyphicon glyphicon-shopping-cart'></span> Добавить в корзину</button>
									</div>
									<div class=\"space-ten\"></div>
								</div>
							  </div>			
							  ";
					}
				?>
			</div>
		</div>
		
		<!--END LIST OF SALES-->
		
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
		
		<!--OUR SERVICES-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 align="center">Как мы работаем</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box">
						<div class="box-icon"> <span class="fa fa-4x fa-battery-full"></span> </div>
						<div class="info">
							<h3 class="text-center">Гарантия качества</h3>
							<p class="text-center">На каждую покупку, которую Вы совершаете, мы обеспечим отсутствие повреждений, и мы проверим трижды качетсво Вашего товара.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box">
						<div class="box-icon"> <span class="fa fa-4x fa-truck"></span> </div>
						<div class="info">
							<h3 class="text-center">Быстрая доставка</h3>
							<p class="text-center">Мы гарантируем, что Вы получите товар,<br> как только он поступит к нам. Мы также предоставляем бесплатные возвраты, если вы не удовлетворены заказом.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box">
						<div class="box-icon"> <span class="fa fa-4x fa-money"></span> </div>
						<div class="info">
							<h3 class="text-center">Отличные цены</h3>
							<p class="text-center">Наши товары отличаются умеренной ценой! Также на нашем сайте часто появляются скидки на технику.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--END OUR SERVICES-->
		
		<!--PARTNERS-->
		<div class="container" style="margin-bottom: 50px;">
			<h2 align="center" style="margin-bottom: 30px;">Наши поставщики</h2>
			<div class="slider slider-nav">
				<div class="slide">
					<a href="http://samsung.com" target="_blank">
						<img src="images/suppliers/tb1.jpg" alt="Samsung" class="img-responsive" />
					</a>
				</div>
				<div class="slide">
					<a href="http://canon.com" target="_blank">
						<img src="images/suppliers/tb2.jpg" alt="Canon" class="img-responsive" />
					</a>
				</div>
				<div class="slide">
					<a href="http://hp.com" target="_blank">
						<img src="images/suppliers/tb3.jpg" alt="HP" class="img-responsive" />
					</a>
				</div>
				<div class="slide">
					<a href="http://cisco.com" target="_blank">
						<img src="images/suppliers/tb4.jpg" alt="Cisco" class="img-responsive" />
					</a>
				</div>
				<div class="slide">
					<a href="http://panasonic.com" target="_blank">
						<img src="images/suppliers/tb5.jpg" alt="Panasonic" class="img-responsive" />
					</a>
				</div>
				<div class="slide">
					<a href="https://lenovo.com" target="_blank">
						<img src="images/suppliers/tb6.jpg" alt="Lenovo" class="img-responsive" />
					</a>
				</div>
				<div class="slide">
					<a href="https://asus.com" target="_blank">
						<img src="images/suppliers/tb7.jpg" alt="Asus" class="img-responsive" />
					</a>
				</div>
			</div>
		</div>
		<!--END PARTNERS-->
<?php
	include 'includes/resize_image.php';
	include 'includes/footer.php';
?>