<?php
	$title='Creative Online Store - ';
	$page='single';
	
	include 'includes/header.php';
	
	$product = getProduct($_GET['id']);
	if(empty($product['name'])){
		echo "<script>document.location.href =\"../404.php\"</script>";
	}
	$counter = 0;
	
	$title.=$product['name'];
	
	if(!empty($product['full_face_photo'])){
		$counter++;
	}
	if(!empty($product['profile_photo'])){
		$counter++;
	}
?>
<script>
    $(document).ready(function() {
        $(this).attr("title", "<?=$title;?>");
    });
</script>
		<!--MAIN BLOCK-->
		<div class="container" style="margin-bottom: 30px; min-height: 75vh;">
			<div class="row">
				<div class="col-md-6">
					<!--CAROUSEL-->
					<div class="container item_carousel">
						<div id="item_carousel" class="carousel slide" data-ride="carousel">
							<!--INDICATORS-->
							<ol class="carousel-indicators">
							  <li data-target="#item_carousel" data-slide-to="0" class="active"></li>
							  <?php 
								if($counter>0){
									for($i = 1; $i<=$counter; $i++){
										echo "<li data-target='#item_carousel' data-slide-to='".$i."'></li>";
									}
								}
							  ?>
							</ol>
							<!--END INDICATORS-->
							<!--SLIDES-->
							<div class="carousel-inner">
							  <?php
								echo "
									<div class='item active'>
										<img src='images/goods/".$product['main_photo']."' class='center-block'>
									</div>
								";
								if(!empty($product['full_face_photo'])){
									echo "
										<div class='item'>
											<img src='images/goods/".$product['full_face_photo']."' class='center-block'>
										</div>
									";
								}
								if(!empty($product['profile_photo'])){
									echo "
										<div class='item'>
											<img src='images/goods/".$product['profile_photo']."' class='center-block'>
										</div>
									";
								}
							  ?>
						  
							</div>
							<!--END SLIDES-->

							<!--CONTROLLERS-->
							<a class="left carousel-control" href="#item_carousel" data-slide="prev">
							  <span class="glyphicon glyphicon-chevron-left"></span>
							  <span class="sr-only">Предыдущий</span>
							</a>
							<a class="right carousel-control" href="#item_carousel" data-slide="next">
							  <span class="glyphicon glyphicon-chevron-right"></span>
							  <span class="sr-only">Следующий</span>
							</a>
							<!--END CONTROLLERS-->
						</div>
					</div>
					<!--END CAROUSEL-->
				</div>
				<div class="col-md-6">
					<div class="product-title"><?php echo $product['name'];?></div>
					<?php $parts = explode('-', $product['added_date']); if(!empty($product['discount_price'])) {echo " <span class='label label-danger'>Скидка</span> ";} if($parts[0]==date("Y")){ echo " <span class='label label-primary'>Новинка</span> ";} ?>
					<div class="product-desc"><?php echo $product['description_short']; ?></div>
					<hr>
					<div class="product-price">Стоимость: <?php if(!empty($product['discount_price'])){echo "<s>".$product['price']." р.</s>  <span style='color:red' class='price'>".$product['discount_price']." р.</span>";} else{ echo "<p class='price' style='display: inline'>".$product['price']." р.</p>";} ?></div>
					<div class="product-stock">Осталось: <?php echo $product['balance']; ?></div>
					<hr>
					<?php
						if($product['balance']>0){
							echo "<div class='btn-group cart'>
									<button cost="; if(!empty($product['discount_price'])){echo $product["discount_price"];}else{echo $product["price"];} echo" product_id=".$product["prid"]." type='button' class='cartshop btn btn-danger'><span class='glyphicon glyphicon-shopping-cart'></span> Добавить в корзину</button>
								  </div>";
						}
						if($product['balance']>0 && empty($product['discount_price'])){
							echo "<div class='btn-group wishlist' style='margin-left: 20px;'>
									<button prid='".$product['prid']."' type='button' data-toggle='modal' data-target='#wishlistModal' class='inserter btn btn-primary'><span class='glyphicon glyphicon-heart'></span> В избранное</button>
								  </div>";
						}
					?>
				</div>
			</div>
	
			<script>
				$(".inserter").click(function() {
				   var prid = $(this).attr('prid');
				   $.ajax({
						url: "includes/insertToWishList.php",
						type: "POST",
						data: { productID: prid },
						success: function(data) {
							$("#wishlistModal").modal();
						},
						error:function(data){
							$("#login").click();
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
	
			<div class="col-md-15 product-info">
				<ul class="nav nav-tabs nav_tabs">	
					<li class="active"><a href="#full-description" data-toggle="tab">Полное описание</a></li>
					<li><a href="#equality" data-toggle="tab">Подходящие товары</a></li>
					<li><a href="#reviews" data-toggle="tab">Отзывы покупателей</a></li>
					<li id="addComment"><a href="#add-comment" data-toggle="tab">Добавить комментарий</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade in active" id="full-description">
						<section class="container product-info">
						<?php echo $product['description_full']; ?>
						</section>
					</div>
					<div class="tab-pane fade" id="equality">
						<section class="container product-info">
							<div class="row">
							
								<?php			
									$result = getSuitableProduct($_GET['id'], $product['categories_id']);
									if($result->num_rows === 0){
										echo "<h3 align='center'>Подходящих товаров пока нет. Скоро завезём!</h3>";
									}
									else{
										while ($row = $result->fetch_assoc()) {
											echo "<div class='col-md-4'>
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
														";
														echo"
														</div>
														<div class=\"space-ten\"></div>
													</div>
												  </div>			
												 ";
										}
									}
								?>
								
							</div>	
						</section>	
					</div>
					<div class="tab-pane fade" id="reviews">
						<section class="container">
							<?php
								$result = getComments($_GET['id']);
								if($result->num_rows === 0){
									echo "<h3 align='center' style='margin-top: 70px;'>Пока здесь пусто. Добавьте комментарий первым.</h3>";
								}
								else{
									while ($row = $result->fetch_assoc()) {
										echo "
											<div class='review-block'>
												<div class='row'>
													<div class='col-sm-3'>
													";
													if(!empty($row['avatar'])){echo "<img src='images/profiles/".$row['avatar']."' class='img-rounded' style='width: 100px; height: 100px;'>";}
													else {echo "<img src='images/profiles/min_avatar.png' class='img-rounded' style='width: 100px; height: 100px;'>";}
													echo "	
														<div class='review-block-name'><a href='mailto:".$row['email']."'>".$row['email']."</a></div>
														<div class='review-block-date'>".$row['date']."<br/></div>
													</div>
													<div class='col-sm-9'>
														<div class='review-block-title'>".$row['title']."</div>
														<div class='review-block-description'>".$row['description']."</div>
													</div>
												</div>
											</div>
										";
									}
								}
							?>
						</section>							
					</div>
					<div class="tab-pane fade" id="add-comment">
						<section class="container product-info">
							<?php
								if( $_SESSION['auth']!='yes' && true !== array_key_exists('user', $_COOKIE) ){
									echo "<h3 align='center'>Оставлять комментарии могут только зарегистрированные пользователи!</h3>";
								}
								else{
									include 'includes/add_comment.php';
								}
							?>
							
						</section>							
					</div>
				</div>
			</div>
			
		</div>
		<!--END MAIN BLOCK-->
<?php
	include 'includes/resize_image.php';
	include 'includes/footer.php';
?>