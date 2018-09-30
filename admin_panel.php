<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - Панель администрирования</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" type="image/png" href="images/logo/favicon.png"/>		
		
		<!--SLIDER LIBRARY--> 
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<!--END SLIDER LIBRARY-->
		
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
		<div class="container" style="min-height: 70vh;">
			<div class="row">
				<div class="col-md-3 ">
					<div class="list-group" id="myList" role="tablist">
						<a class="list-group-item list-group-item-action active" data-toggle="list" href="#users" role="tab">Список пользователей</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#roles" role="tab">Привилегии пользователей</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#comments" role="tab">Комментарии пользователей</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#suppliers" role="tab">Список поставщиков</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#deliveries" role="tab">Список служб доставки</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#products" role="tab">Список товаров</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#cat" role="tab">Категории товаров</a>
						<a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#deleteModal" id="deleteProfile" style="cursor: pointer;">Удалить профиль</a>
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
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>Василий</td>
													<td>Геннадьевич</td>
													<td>Мужской</td>
													<td>1.01.1990</td>
													<td>ул. Пушкина, д.3, кв. 5</td>
													<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
													<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td>Пупкин</td>
													<td>Василий</td>
													<td>Геннадьевич</td>
													<td>Мужской</td>
													<td>1.01.1990</td>
													<td>ул. Пушкина, д.3, кв. 5</td>
													<td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
													<td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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
													<td><button class="btn btn-success">Подтвердить</button></td>
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
													<td><button class="btn btn-success">Подтвердить</button></td>
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
													<td><button class="btn btn-success">Подтвердить</button></td>
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
													<td> <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Удалить</button> </td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td><a href="single_item.php">ASUS ZenFone Go ZB452KG</a></td>
													<td>Плохо</td>
													<td>Не берите</td>
													<td>12.01.2018</td>
													<td> <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Удалить</button> </td>
												</tr>
												
												<tr>
													<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<td><a href="single_item.php">Наушники Lenovo Y 7.1</a></td>
													<td>Клёво</td>
													<td>Берите</td>
													<td>13.02.2018</td>
													<td> <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Удалить</button> </td>
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
										<button class="btn btn-success">Добавить</button>
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
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>Lenovo</td>
													<td>Make world greater</td>
													<td>Poland</td>
													<td>89370207180</td>
													<td><a href="https://www.lenovo.com" target="_blank">lenovo.com</a></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
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
										<button class="btn btn-success">Добавить</button>
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
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>DeliveryClub</td>
													<td>Make world better</td>
													<td>Russia</td>
													<td>88003535355</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
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
										<button class="btn btn-success">Добавить</button>
									</div>
									
									<div class="table-responsive">	
										<table id="mytable" class="table table-bordred table-striped">   
											<thead>
												<th>Фото</th>
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
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>
														<img src="images/goods/b2.jpg" alt="ASUS ZenFone Go ZB452KG" class="img-responsive">
													</td>
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
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END PRODUCTS LIST-->
						
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
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>Ноутбуки</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
												<tr>
													<td>Наушники</td>
													<td></td>
													<td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>
													<td><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!--END CATEGORIES-->
					</div>	
				</div>
			</div>
		</div>
		<!--END MAIN BLOCK-->
		
		<!--RESIZE IMAGE-->
		<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Закрыть</span></button>
						<h4 class="modal-title" id="image-gallery-title"></h4>
					</div>
					<div class="modal-body">
						<img id="image-gallery-image" class="img-responsive" src="">
					</div>
				</div>
			</div>
		</div>
		<!--END RESIZE IMAGE-->
		
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
		<script src="js/slick.js"></script>
		
		<script src="js/filter.js"></script>
		<script src="js/backtop.js"></script>
    </body>
</html>