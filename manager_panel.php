<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - Профиль</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" type="image/png" href="images/logo/favicon.png"/>		
		
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		
        <link rel="stylesheet" href="css/bootstrap.min.css">	
		<link rel="stylesheet" href="css/main.css">
	
    </head>
    <body>
		<!--HEADER-->
		<header>
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="container-fluid">
					<!--LOGO-->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"><img src="images/logo/logo.svg" style="height: 40px; display: inline-block; margin-top: -15px;" alt="COSshop">
						COSshop
						</a>
					</div>
					<!--END LOGO-->
				
					<ul class="nav navbar-nav">
						<li><a href="index.php">Главная</a></li>
						<li><a href="about.php">О нас</a></li>
						<li><a href="contacts.php">Контакты</a></li>
						
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								Товары
								<span class="caret"></span>
							</a>
						    <ul class="dropdown-menu">
								<li><a href="products.php">Все товары</a></li>
								
								<li class="dropdown-header">Добавленные товары</li>
								<li><a href="shopping_cart.php">Корзина</a></li>
								<li><a href="wishlist.php">Избранные товары</a></li>
								
								<li class="dropdown-header">Категории</li>
								<li><a href="#">Мобильные телефоны</a></li>
								<li><a href="#">Наушники</a></li>
								<li><a href="#">Ноутбуки</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Мой профиль</a></li>
						<li class="active"><a href="admin_panel.php"><span class="glyphicon glyphicon-wrench"></span> Управление</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Выход</a></li>
					</ul>
					
					<!--SEARCH-->
					<form class="navbar-form navbar-right" action="/action_page.php">
						<div class="input-group">
						<input type="text" class="form-control" placeholder="Поиск">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
					</form>
					<!--END SEARCH-->
			  </div>
			</nav>
		</header>
		<!-- END HEADER-->
		
		<!--MAIN BLOCK-->
		<div class="container" style="min-height: 75vh;">
			<div class="row">
				<div class="col-md-3 ">
					<div class="list-group" id="myList" role="tablist">
						<h4 align="center">Товары</h4>
						<a class="list-group-item list-group-item-action active" data-toggle="list" href="#products" role="tab">Список товаров</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#discounts" role="tab">Скидки на товары</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content">
						<!--PRODUCTS LIST-->
						<div class="tab-pane active" id="products" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список товаров</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group">
												<div class="input-group-btn search-panel">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span id="search_concept">Фильтр</span> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													  <li><a href="#se_prod_sup">Производитель</a></li>
													  <li><a href="#se_prod_name">Категория</a></li>
													  <li><a href="#se_prod_user_added">Добавлен</a></li>
													  <li><a href="#se_prod_tax">Налог</a></li>
													  <li><a href="#se_prod_color">Цвет</a></li>
													  <li><a href="#se_prod_name">Название</a></li>
													  <li><a href="#se_prod_desc_short">Описание (сокр.)</a></li>
													  <li><a href="#se_prod_desc_full">Описание (полн.)</a></li>
													  <li><a href="#se_prod_city">Город</a></li>
													  <li><a href="#se_prod_price">Цена</a></li>
													  <li><a href="#se_prod_discount_price">Скидочная цена</a></li>
													  <li><a href="#se_prod_res">Остаток</a></li>
													</ul>
												</div>
												<input type="hidden" name="search_param" value="all" id="search_param">         
												<input type="text" class="form-control" name="x" placeholder="Поиск">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
												</span>
											</div>
										</div>
									</div>
									
									<div class="row" align="center" style="margin-bottom: 20px;">
										<button class="btn btn-success" data-toggle="modal" data-target="#add_product">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Фото</th>
												<th>Фото<br/>#1</th>
												<th>Фото<br/>#2</th>
												<th>Название</th>
												<th>Производитель</th>
												<th>Категория</th>
												<th>Добавлен</th>
												<th>Налог</th>
												<th>Цвет</th>
												<th>Описание (сокр.)</th>
												<th>Описание (полн.)</th>
												<th>Город</th>
												<th>Цена</th>
												<th>Скидочная цена</th>
												<th>Дата добавления</th>
												<th>Остаток</th>
												
												<th>Редакт.</th>
											</thead>
											<tbody>
												<tr>
													<td>
														<img src="images/goods/b1.jpg" alt="Lenovo S850" class="img-responsive">
													</td>
													<td>
														<img src="images/goods/b1-1.jpg" alt="Lenovo S850" class="img-responsive">
													</td>
													<td></td>
													<td><a href="single_item.php">Lenovo S850</a></td>
													<td>Lenovo</td>
													<td>Телефон</td>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>#3452.23</td>
													<td>Красный</td>
													<td>Тонкий и легкий смартфон...</td>
													<td>Тонкий и легкий смартфон...</td>
													<td>USA</td>
													<td>7350р.</td>
													<td></td>
													<td>12.02.2018</td>
													<td>5</td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_product" ><span class="glyphicon glyphicon-pencil"></span></button></td>
												</tr>
												<tr>
													<td>
														<img src="images/goods/b2.jpg" alt="ASUS ZenFone Go ZB452KG" class="img-responsive">
													</td>
													<td></td>
													<td></td>
													<td><a href="single_item.php">ASUS ZenFone Go ZB452KG</a></td>
													<td>ASUS</td>
													<td>Телефон</td>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>#3552.23</td>
													<td>Чёрный</td>
													<td>Новый и яркий дизайн!...</td>
													<td>Новый и яркий дизайн!...</td>
													<td>USA</td>
													<td>12000р.</td>
													<td></td>
													<td>13.03.2018</td>
													<td>6</td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_product" ><span class="glyphicon glyphicon-pencil"></span></button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END PRODUCTS LIST-->
						
						<!--DISCOUNTS-->
						<div class="tab-pane" id="discounts" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Скидки на товары</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group">
												<input type="hidden" name="search_param" value="all" id="search_param">         
												<input type="text" class="form-control" name="x" placeholder="Поиск">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
												</span>
											</div>
										</div>
									</div>
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Название товара</th>
												<th>Скидочная цена</th>
												<th>Отмена скидки</th>
												<th>Добавление скидки</th>
											</thead>
											<tbody>
												<tr>
													<td><a href="single_item.php">ASUSPRO B9440UA</a></td>
													<td><input type="text" class="form-control" value="28800 р."/></td>
													<td><button style="margin-top: 10px;" class="btn btn-danger" data-toggle="modal" data-target="#discount_delete">Отмена</button></td>
													<td><button class="btn btn-success" data-toggle="modal" data-target="#discount_add">Подтвердить</button></td>
												</tr>
												
												<tr>
													<td><a href="single_item.php">Samsung Galaxy S7</a></td>
													<td><input type="text" class="form-control" value="9800 р."/></td>
													<td><button style="margin-top: 10px;" class="btn btn-danger" data-toggle="modal" data-target="#discount_delete">Отмена</button></td>
													<td><button class="btn btn-success" data-toggle="modal" data-target="#discount_add">Подтвердить</button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--DISCOUNTS-->
					</div>	
				</div>
			</div>
		</div>
		<!--END MAIN BLOCK-->
		
		<!--EDIT PRODUCT MODAL-->
		<div id="edit_product" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Редактирование</h2>
				</div>
			  </div>
			  <div class="modal-body">
				<form class="form-signin">		
					<div class="form-label-group">
						<label for="editProductPhoto">Фото</label>
						<input id="editProductPhoto" name="avatar" class="form-control here" type="file" accept="image/*">
					</div>
					
					<div class="form-label-group">
						<label for="editProductPhoto1">Фото #1</label>
						<input id="editProductPhoto1" name="avatar1" class="form-control here" type="file" accept="image/*">
					</div>
					
					<div class="form-label-group">
						<label for="editProductPhoto2">Фото #2</label>
						<input id="editProductPhoto2" name="avatar2" class="form-control here" type="file" accept="image/*">
					</div>
					
					<div class="form-label-group">
						<label for="editProductName">Название</label>
						<input type="text" id="editProductName" class="form-control" placeholder="Название" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="editProductSupplier">Производитель</label>
						<input type="text" id="editProductSupplier" class="form-control" placeholder="Производитель">
					</div>
					
					<div class="form-label-group">
						<label for="editProductCategory">Категория</label>
						<input type="text" id="editProductCategory" class="form-control" placeholder="Категория">
					</div>
					
					<div class="form-label-group">
						<label for="editProductUserAdded">Добавлен пользователем</label>
						<input type="text" id="editProductUserAdded" class="form-control" placeholder="Добавлен пользователем">
					</div>
					
					<div class="form-label-group">
						<label for="editProductTax">Налог</label>
						<input type="text" id="editProductTax" class="form-control" placeholder="Налог">
					</div>
					
					<div class="form-label-group">
						<label for="editProductColor">Цвет</label>
						<input type="text" id="editProductColor" class="form-control" placeholder="Цвет">
					</div>
					
					<div class="form-label-group">
						<label for="editProductDescriptionShort">Описание сокращённое</label>
						<input type="text" id="editProductDescriptionShort" class="form-control" placeholder="Описание сокращённое">
					</div>
					
					<div class="form-label-group">
						<label for="editProductDescriptionFull">Описание полное</label>
						<input type="text" id="editProductDescriptionFull" class="form-control" placeholder="Описание полное">
					</div>
					
					<div class="form-label-group">
						<label for="editProductCity">Город</label>
						<input type="text" id="editProductCity" class="form-control" placeholder="Город">
					</div>
					
					<div class="form-label-group">
						<label for="editProductPrice">Цена</label>
						<input type="text" id="editSuppliersPrice" class="form-control" placeholder="Цена">
					</div>
					
					<div class="form-label-group">
						<label for="editProductPriceDiscount">Цена по скидке</label>
						<input type="text" id="editSuppliersPriceDiscount" class="form-control" placeholder="Скидочная цена">
					</div>
					
					<div class="form-label-group">
						<label for="editProductDate">Дата добавления</label>
						<input type="date" id="editProductDate" class="form-control" placeholder="Дата добавления">
					</div>
					
					<div class="form-label-group">
						<label for="editProductReq">Остаток</label>
						<input type="text" id="editProductReq" class="form-control" placeholder="Остаток">
					</div>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-success">Изменить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END EDIT PRODUCT MODAL-->
		
		<!--DELETE DISCOUNT MODAL-->
		<div id="discount_delete" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						
						<div class="row">
							<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
							<h2 class="modal-title">Удаление</h2>
						</div>
					</div>
			  <div class="modal-body">
				<p>Подтвердите отмену скидки.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END DELETE DISCOUNT MODAL-->
		
		<!--ACCEPT DISCOUNT MODAL-->
		<div id="discount_add" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						
						<div class="row">
							<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
							<h2 class="modal-title">Подтверждение</h2>
						</div>
					</div>
			  <div class="modal-body">
				<p>Подтвердите добавление на скидку.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-success">Подтвердить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END ACCEPT DISCOUNT MODAL-->
		
		<!--FOOTER-->
		<div class="footers bg-light pt-5 pb-3" style="padding-top: 10px; background-color: #222222; color: white;">
		   <div class="container pt-5">
			   <div class="row">
				   <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
						<div class="footers-logo">
							<img src="images/logo/logo.svg" alt="Logo" style="width:50px;">
							<h4 style="display: inline;">COSshop</h4>
						</div>
						<div class="footers-info mt-3" style="margin-top: 10px;">
							<p>Наш магазин занимается поставкой и продажей электронной техники. Быстрота доставки, доступные цены, качественные товары - вот наш девиз!</p>
						</div>
					</div>
				    <div class="col-xs-12 col-sm-6 col-md-2 footers-two">
						<h5><b><u>Ссылки</b></u></h5>
						<ul class="list-unstyled">
							<li><a href="index.php" style="text-decoration: none;">Главная</a></li>
							<li><a href="about.php" style="text-decoration: none;">О нас</a></li>
							<li><a href="contacts.php" style="text-decoration: none;">Контакты</a></li>
							<li><a href="products.php" style="text-decoration: none;">Товары</a></li>
							<li><a href="shopping_cart.php" style="text-decoration: none;">Корзина</a></li>
							<li><a href="wishlist.php" style="text-decoration: none;">Избранные товары</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2 footers-three">
						<h5><b><u>Вход на сайт</b></u></h5>
						<ul class="list-unstyled">
							<li><a href="profile.php" style="text-decoration: none;">Мой профиль</a></li>
							<li><a href="#" style="text-decoration: none;">Выход</a></li>
						</ul>
					</div>
				    <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
						<h5><b><u>Контакты</b></u></h5>
						<ul class="list-unstyled">
							<li><span class="glyphicon glyphicon-envelope"></span> cosshop@yandex.ru</li>
							<li><span class="glyphicon glyphicon-globe"></span> город Саратов, улица Политехническая 124</li>
							<li><span class="glyphicon glyphicon-earphone"></span> 8-800-555-35-35</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2 footers-three">
						<h5><b><u>Мы в социальных сетях</b></u></h5>
						<ul class="list-unstyled">
							<li><a href="#"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a></li>
							<li><a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a></li>
							<li><a href="mailto:cosshop@yandex.ru"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a></li>
						</ul>
					</div>
			    </div>
		    </div>
		</div>
		<div class="copyright border" style="background-color: #222222;">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-12 pt-3">
						<p class="text-muted" style="color: white;">© 2018 COSshop</p>
					</div>
				</div>
			</div>
		</div>
		<!--END FOOTER-->
		
		<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Наверх" data-toggle="tooltip" data-placement="left">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/filter.js"></script>
		<script src="js/backtop.js"></script>
    </body>
</html>
