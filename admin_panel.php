<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - Панель администрирования</title>

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
						<li class="active"><a href="admin_panel.php"><span class="glyphicon glyphicon-wrench"></span> Администрирование</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Выход</a></li>
					</ul>
					
					<!--SEARCH-->
					<form class="navbar-form navbar-right" action="/action_page.php">
						<div class="input-group">
						<input type="text" class="form-control" placeholder="Поиск">
							<div class="input-group-btn">
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
						<h4 align="center">Пользователи</h4>
						<a class="list-group-item list-group-item-action active" data-toggle="list" href="#users" role="tab">Список пользователей</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#roles" role="tab">Привилегии пользователей</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#comments" role="tab">Комментарии пользователей</a>
						<h4 align="center">Поставщики и доставка</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#suppliers" role="tab">Список поставщиков</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#deliveries" role="tab">Список служб доставки</a>
						<h4 align="center">Товары</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#products" role="tab">Список товаров</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#discounts" role="tab">Скидки на товары</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#cat" role="tab">Категории товаров</a>
						<h4 align="center">Заказы</h4>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#orders" role="tab">Список заказов</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content">
						<!--USERS-->
						<div class="tab-pane active" id="users" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список пользователей</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group">
												<div class="input-group-btn search-panel">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span id="search_concept">Фильтр</span> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													  <li><a href="#se_email">Email</a></li>
													  <li><a href="#se_last">Фамилия</a></li>
													  <li><a href="#se_first">Имя</a></li>
													  <li><a href="#se_family">Отчество</a></li>
													  <li><a href="#se_birthday">Дата рождения</a></li>
													  <li><a href="#se_adress">Адрес</a></li>
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
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Email</th>
												<th>Фамилия</th>
												<th>Имя</th>
												<th>Отчество</th>
												<th>Пол</th>
												<th>Дата рож.</th>
												<th>Адрес</th>
												<th>Редакт.</th> 
												<th>Удалить</th>  
											</thead>
											<tbody>
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>Василий</td>
													<td>Геннадьевич</td>
													<td>Мужской</td>
													<td>1.01.1990</td>
													<td>ул. Пушкина, д.3, кв. 5</td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_user" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_user" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>Василий</td>
													<td>Геннадьевич</td>
													<td>Мужской</td>
													<td>1.01.1990</td>
													<td>ул. Пушкина, д.3, кв. 5</td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_user" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_user" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>Василий</td>
													<td>Геннадьевич</td>
													<td>Мужской</td>
													<td>1.01.1990</td>
													<td>ул. Пушкина, д.3, кв. 5</td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_user" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_user" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
											</tbody>
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
											<div class="input-group">
												<div class="input-group-btn search-panel">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span id="search_concept">Фильтр</span> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													  <li><a href="#se_role_email">Email</a></li>
													  <li><a href="#se_role_last">Фамилия</a></li>
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
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Email</th>
												<th>Фамилия</th>
												<th>Роль</th>
												<th>Действия</th>
											</thead>
											<tbody>
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>
														<select class="form-control" id="exampleFormControlSelect">
															<option>Пользователь</option>
															<option>Администратор</option>
															<option>Менеджер</option>
														</select>
													</td>
													<td><button class="btn btn-success" data-toggle="modal" data-target="#accept_role">Подтвердить</button></td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>
														<select class="form-control" id="exampleFormControlSelect">
															<option>Пользователь</option>
															<option>Администратор</option>
															<option>Менеджер</option>
														</select>
													</td>
													<td><button class="btn btn-success" data-toggle="modal" data-target="#accept_role">Подтвердить</button></td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>
														<select class="form-control" id="exampleFormControlSelect">
															<option>Пользователь</option>
															<option>Администратор</option>
															<option>Менеджер</option>
														</select>
													</td>
													<td><button class="btn btn-success" data-toggle="modal" data-target="#accept_role">Подтвердить</button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END ROLES OF USERS-->
						
						<!--COMMENTS OF USERS-->
						<div class="tab-pane" id="comments" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Комментарии пользователей</h4>
									
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group">
												<div class="input-group-btn search-panel">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span id="search_concept">Фильтр</span> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													  <li><a href="#se_com_email">Email</a></li>
													  <li><a href="#se_com_product">Товар</a></li>
													  <li><a href="#se_com_title">Название</a></li>
													  <li><a href="#se_com_desc">Содержание</a></li>
													  <li><a href="#se_com_date">Дата</a></li>
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
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Email</th>
												<th>Товар</th>
												<th>Название</th>
												<th>Содержание</th>
												<th>Дата</th>
												<th>Действия</th>
											</thead>
											<tbody>
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td><a href="single_item.php">Lenovo S850</a></td>
													<td>Отлично</td>
													<td>Да всё просто зашибись</td>
													<td>12.01.2018</td>
													<td><button class="btn btn-danger" data-toggle="modal" data-target="#delete_comment"><span class="glyphicon glyphicon-trash"></span> Удалить</button> </td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td><a href="single_item.php">ASUS ZenFone Go ZB452KG</a></td>
													<td>Плохо</td>
													<td>Не берите</td>
													<td>12.01.2018</td>
													<td> <button class="btn btn-danger" data-toggle="modal" data-target="#delete_comment"><span class="glyphicon glyphicon-trash"></span> Удалить</button> </td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td><a href="single_item.php">Наушники Lenovo Y 7.1</a></td>
													<td>Клёво</td>
													<td>Берите</td>
													<td>13.02.2018</td>
													<td> <button class="btn btn-danger" data-toggle="modal" data-target="#delete_comment"><span class="glyphicon glyphicon-trash"></span> Удалить</button> </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END COMMENTS OF USERS-->
						
						<!--SUPPLIERS-->
						<div class="tab-pane" id="suppliers" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список поставщиков</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group">
												<div class="input-group-btn search-panel">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span id="search_concept">Фильтр</span> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													  <li><a href="#se_sup_name">Название</a></li>
													  <li><a href="#se_sup_desc">Описание</a></li>
													  <li><a href="#se_sup_city">Город</a></li>
													  <li><a href="#se_sup_phone">Телефон</a></li>
													  <li><a href="#se_sup_site">Сайт</a></li>
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
										<button class="btn btn-success" data-toggle="modal" data-target="#add_suppliers">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Название</th>
												<th>Описание</th>
												<th>Город</th>
												<th>Телефон</th>
												<th>Сайт</th>
												<th>Редакт.</th>
												<th>Удалить</th>
											</thead>
											<tbody>
												<tr>
													<td>ASUS</td>
													<td>In search of incredible</td>
													<td>USA</td>
													<td>89272278616</td>
													<td><a href="https://www.asus.com" target="_blank">asus.com</a></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_suppliers" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_suppliers" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>Lenovo</td>
													<td>Make world greater</td>
													<td>Poland</td>
													<td>89370207180</td>
													<td><a href="https://www.lenovo.com" target="_blank">lenovo.com</a></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_suppliers" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_suppliers" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END SUPPLIERS-->
						
						<!--DELIVERIES-->
						<div class="tab-pane" id="deliveries" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список служб доставки</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group">
												<div class="input-group-btn search-panel">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span id="search_concept">Фильтр</span> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													  <li><a href="#se_del_name">Название</a></li>
													  <li><a href="#se_del_desc">Описание</a></li>
													  <li><a href="#se_del_city">Город</a></li>
													  <li><a href="#se_del_phone">Телефон</a></li>
													  <li><a href="#se_del_site">Email</a></li>
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
										<button class="btn btn-success" data-toggle="modal" data-target="#add_deliveries">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Название</th>
												<th>Описание</th>
												<th>Город</th>
												<th>Телефон</th>
												<th>Email</th>
												<th>Редакт.</th>
												<th>Удалить</th>
											</thead>
											<tbody>
												<tr>
													<td>Testing_del</td>
													<td></td>
													<td>USA</td>
													<td>89370506182</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_deliveries" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_deliveries" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>DeliveryClub</td>
													<td>Make world better</td>
													<td>Russia</td>
													<td>88003535355</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_deliveries" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_deliveries" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END DELIVERIES-->
						
						<!--PRODUCTS LIST-->
						<div class="tab-pane" id="products" role="tabpanel">
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
												<th>Удалить</th>
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
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_product" ><span class="glyphicon glyphicon-trash"></span></button></td>
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
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_product" ><span class="glyphicon glyphicon-trash"></span></button></td>
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
						
						<!--CATEGORIES-->
						<div class="tab-pane" id="cat" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список категорий</h4>
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
									
									<div class="row" align="center" style="margin-bottom: 20px;">
										<button class="btn btn-success">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Название</th>
												<th>Подкатегория</th>
												<th>Редакт.</th>
												<th>Удалить</th>
											</thead>
											<tbody>
												<tr>
													<td>Телефоны</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_categories" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_category" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>Ноутбуки</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_categories" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_category" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>Наушники</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_categories" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_category" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END CATEGORIES-->
						
						<!--ORDER LIST-->
						<div class="tab-pane" id="orders" role="tabpanel">
							<div class="row">
								<div class="col-md-12">
									<h4 align="center">Список заказов</h4>
									<div class="row" style="margin-bottom: 20px;">    
										<div class="col-xs-8 col-xs-offset-2">
											<div class="input-group">
												<div class="input-group-btn search-panel">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span id="search_concept">Фильтр</span> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
													  <li><a href="#se_order_cart">ID корзины</a></li>
													  <li><a href="#se_order_del">Заказчики</a></li>
													  <li><a href="#se_order_tax">Налог</a></li>
													  <li><a href="#se_order_start_adress">Место отправления</a></li>
													  <li><a href="#se_order_end_adress">Место доставки</a></li>
													  <li><a href="#se_order_date_ord">Дата отправки</a></li>
													  <li><a href="#se_order_date_depart">Дата начала отправления</a></li>
													  <li><a href="#se_order_date_arrival">Дата прибытия</a></li>
													  <li><a href="#se_order_date_arrival_fact">Дата прибытия (факт)</a></li>
													  <li><a href="#se_order_total_cost">Общая стоимость</a></li>
													  <li><a href="#se_order_status">Статус заказа</a></li>
													  <li><a href="#se_order_details">Детали заказа</a></li>
													  <li><a href="#se_order_report">Отчёт</a></li>
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
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>ID корзины</th>
												<th>Заказчики</th>
												<th>Налог</th>
												<th>Место отправления</th>
												<th>Место доставки</th>
												<th>Дата отправки</th>
												<th>Дата начала отправления</th>
												<th>Дата прибытия</th>
												<th>Дата прибытия (факт)</th>
												<th>Общая стоимость</th>
												<th>Статус заказа</th>
												<th>Детали заказа</th>
												<th>Отчёт</th>
												
												<th>Редакт.</th>
												<th>Удалить</th>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>#213.234</td>
													<td>USA</td>
													<td>Russia</td>
													<td>15.09.2018</td>
													<td>17.09.2018</td>
													<td>30.09.2018</td>
													<td>2.09.2018</td>
													<td>8950р.</td>
													<td>Доставлен</td>
													<td></td>
													<td>Заказ успешно доставлен</td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_order" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_order" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>5</td>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>#223.534</td>
													<td>Poland</td>
													<td>Russia</td>
													<td>10.09.2018</td>
													<td>18.09.2018</td>
													<td>29.09.2018</td>
													<td>3.09.2018</td>
													<td>12350р.</td>
													<td>Доставлен</td>
													<td></td>
													<td>Заказ успешно доставлен</td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit_order" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete_order" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END ORDER LIST-->
					</div>	
				</div>
			</div>
		</div>
		<!--END MAIN BLOCK-->
		
		<!--EDIT USER MODAL-->
		<div id="edit_user" class="modal" tabindex="-1" role="dialog">
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
						<label for="edituserEmail">Email</label>
						<input type="email" id="edituserEmail" class="form-control" placeholder="Email" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="edituserLastName">Фамилия</label>
						<input type="text" id="edituserLastName" class="form-control" placeholder="Фамилия">
					</div>
					
					<div class="form-label-group">
						<label for="edituserFirstName">Имя</label>
						<input type="text" id="edituserFirstName" class="form-control" placeholder="Имя">
					</div>
					
					<div class="form-label-group">
						<label for="editUserFamilyName">Отчество</label>
						<input type="text" id="editUserFamilyName" class="form-control" placeholder="Отчество">
					</div>
					
					<div class="form-label-group">
						<label for="editUserSex">Пол</label>
						<select class="form-control" id="exampleFormControlSelect">
							<option>Мужской</option>
							<option>Женский</option>
						</select>
					</div>
					
					<div class="form-label-group">
						<label for="editUserBirthday">Дата рождения</label>
						<input type="date" id="editUserBirthday" class="form-control" placeholder="Дата рождения">
					</div>
					
					<div class="form-label-group">
						<label for="editUserAdress">Адрес</label>
						<input type="text" id="editUserAdress" class="form-control" placeholder="Адрес">
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
		<!--END EDIT USER MODAL-->
		
		<!--EDIT SUPPLIER MODAL-->
		<div id="edit_suppliers" class="modal" tabindex="-1" role="dialog">
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
						<label for="editSuppliersName">Название</label>
						<input type="text" id="editSuppliersName" class="form-control" placeholder="Название" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="editSuppliersDesc">Описание</label>
						<input type="text" id="editSuppliersDesc" class="form-control" placeholder="Описание">
					</div>
					
					<div class="form-label-group">
						<label for="editSuppliersCity">Город</label>
						<input type="text" id="editSuppliersCity" class="form-control" placeholder="Город">
					</div>
					
					<div class="form-label-group">
						<label for="editSuppliersPhone">Телефон</label>
						<input type="phone" id="editSuppliersPhone" class="form-control" placeholder="Телефон">
					</div>
					
					<div class="form-label-group">
						<label for="editSuppliersSuite">Сайт</label>
						<input type="text" id="editSuppliersSuite" class="form-control" placeholder="Сайт">
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
		<!--END EDIT SUPPLIER MODAL-->
		
		<!--ADD SUPPLIER MODAL-->
		<div id="add_suppliers" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Добавление</h2>
				</div>
			  </div>
			  <div class="modal-body">
				<form class="form-signin">		
					<div class="form-label-group">
						<label for="editSuppliersName">Название</label>
						<input type="text" id="editSuppliersName" class="form-control" placeholder="Название" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="editSuppliersDesc">Описание</label>
						<input type="text" id="editSuppliersDesc" class="form-control" placeholder="Описание">
					</div>
					
					<div class="form-label-group">
						<label for="editSuppliersCity">Город</label>
						<input type="text" id="editSuppliersCity" class="form-control" placeholder="Город">
					</div>
					
					<div class="form-label-group">
						<label for="editSuppliersPhone">Телефон</label>
						<input type="phone" id="editSuppliersPhone" class="form-control" placeholder="Телефон">
					</div>
					
					<div class="form-label-group">
						<label for="editSuppliersSuite">Сайт</label>
						<input type="text" id="editSuppliersSuite" class="form-control" placeholder="Сайт">
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
		<!--END ADD SUPPLIER MODAL-->
		
		<!--ADD DELIVERIES MODAL-->
		<div id="add_deliveries" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Добавление</h2>
				</div>
			  </div>
			  <div class="modal-body">
				<form class="form-signin">		
					<div class="form-label-group">
						<label for="editDeliveriesName">Название</label>
						<input type="text" id="editDeliveriesName" class="form-control" placeholder="Название" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="editDeliveriesDesc">Описание</label>
						<input type="text" id="editDeliveriesDesc" class="form-control" placeholder="Описание">
					</div>
					
					<div class="form-label-group">
						<label for="editDeliveriesCity">Город</label>
						<input type="text" id="editDeliveriesCity" class="form-control" placeholder="Город">
					</div>
					
					<div class="form-label-group">
						<label for="editDeliveriesPhone">Телефон</label>
						<input type="phone" id="editDeliveriesPhone" class="form-control" placeholder="Телефон">
					</div>
					
					<div class="form-label-group">
						<label for="editDeliveriesEmail">Email</label>
						<input type="text" id="editDeliveriesEmail" class="form-control" placeholder="Email">
					</div>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-success">Добавить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END ADD DELIVERIES MODAL-->
		
		<!--EDIT DELIVERIES MODAL-->
		<div id="edit_deliveries" class="modal" tabindex="-1" role="dialog">
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
						<label for="editDeliveriesName">Название</label>
						<input type="text" id="editDeliveriesName" class="form-control" placeholder="Название" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="editDeliveriesDesc">Описание</label>
						<input type="text" id="editDeliveriesDesc" class="form-control" placeholder="Описание">
					</div>
					
					<div class="form-label-group">
						<label for="editDeliveriesCity">Город</label>
						<input type="text" id="editDeliveriesCity" class="form-control" placeholder="Город">
					</div>
					
					<div class="form-label-group">
						<label for="editDeliveriesPhone">Телефон</label>
						<input type="phone" id="editDeliveriesPhone" class="form-control" placeholder="Телефон">
					</div>
					
					<div class="form-label-group">
						<label for="editDeliveriesEmail">Email</label>
						<input type="text" id="editDeliveriesEmail" class="form-control" placeholder="Email">
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
		<!--END EDIT DELIVERIES MODAL-->
		
		<!--EDIT CATEGORIES MODAL-->
		<div id="edit_categories" class="modal" tabindex="-1" role="dialog">
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
						<label for="editDeliveriesName">Название</label>
						<input type="text" id="editDeliveriesName" class="form-control" placeholder="Название" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="editDeliveriesDesc">Подкатегория</label>
						<select class="form-control" id="exampleFormControlSelect">
							<option>Телефоны</option>
							<option>Ноутбуки</option>
							<option>Наушники</option>
						</select>
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
		<!--END EDIT CATEGORIES MODAL-->
		
		<!--ADD PRODUCT MODAL-->
		<div id="add_product" class="modal" tabindex="-1" role="dialog">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Добавление</h2>
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
				<button type="button" class="btn btn-success">Добавить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END ADD PRODUCT MODAL-->
		
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
		
		<!--EDIT ORDER MODAL-->
		<div id="edit_order" class="modal" tabindex="-1" role="dialog">
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
						<label for="editOrderShopCart">ID корзины</label>
						<input type="text" id="editOrderShopCart" class="form-control" placeholder="ID корзины" autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="editOrderClient">Заказчик</label>
						<input type="text" id="editOrderClient" class="form-control" placeholder="Заказчик">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderTax">Налог</label>
						<input type="text" id="editOrderTax" class="form-control" placeholder="Налог">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderAdressStart">Место отправления</label>
						<input type="text" id="editAdressStart" class="form-control" placeholder="Место отправления">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderAdressEnd">Место доставки</label>
						<input type="text" id="editOrderAdressEnd" class="form-control" placeholder="Место доставки">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderDateStart">Дата отправки</label>
						<input type="text" id="editOrderDateStart" class="form-control" placeholder="Дата отправки">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderDateEnd">Дата прибытия</label>
						<input type="text" id="editOrderDateEnd" class="form-control" placeholder="Дата прибытия">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderDateEndFact">Дата прибытия по факту</label>
						<input type="text" id="editOrderDateEndFact" class="form-control" placeholder="Дата прибытия по факту">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderTotalPrice">Общая стоимость</label>
						<input type="text" id="editOrderTotalPrice" class="form-control" placeholder="Общая стоимость">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderStatus">Статус заказа</label>
						<input type="text" id="editOrderStatus" class="form-control" placeholder="Статус заказа">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderDetails">Детали заказа</label>
						<input type="text" id="editOrderDetails" class="form-control" placeholder="Детали заказа">
					</div>
					
					<div class="form-label-group">
						<label for="editOrderReport">Отчёт</label>
						<input type="date" id="editOrderReport" class="form-control" placeholder="Отчёт">
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
		<!--END EDIT ORDER MODAL-->
		
		<!--DELETE USER MODAL-->
		<div id="delete_user" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите удаление пользователя!</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END DELETE USER MODAL-->
		
		<!--ACCEPT ROLE MODAL-->
		<div id="accept_role" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите изменение роли пользователя.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-success">Подтвердить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END ACCEPT ROLE MODAL-->
		
		<!--DELETE COMMENT MODAL-->
		<div id="delete_comment" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите удаление комментария!</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END DELETE COMMENT MODAL-->
		
		<!--DELETE SUPPLIERS MODAL-->
		<div id="delete_suppliers" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите удаление поставщика!</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END DELETE SUPPLIERS MODAL-->
		
		<!--DELETE DELIVERIES MODAL-->
		<div id="delete_deliveries" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите удаление службы доставки!</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END DELETE DELIVERIES MODAL-->
		
		<!--DELETE PRODUCT MODAL-->
		<div id="delete_product" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите удаление продукта.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END PRODUCT MODAL-->
		
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
		
		<!--DELETE CATEGORIES MODAL-->
		<div id="delete_category" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите удаление категории.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END DELETE CATEGORIES MODAL-->
		
		<!--DELETE ORDER MODAL-->
		<div id="delete_order" class="modal" tabindex="-1" role="dialog">
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
				<p>Подтвердите удаление заказа.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
			  </div>
			</div>
		  </div>
		</div>
		<!--END DELETE ORDER MODAL-->
		
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
