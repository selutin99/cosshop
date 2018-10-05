<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - Профиль</title>

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
						<li class="active"><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Мой профиль</a></li>
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
						<a class="list-group-item list-group-item-action active" data-toggle="list" href="#profile" role="tab">Мой профиль</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#my_orders" role="tab">Мои заказы</a>
						<a class="list-group-item list-group-item-action" data-toggle="list" href="#edit" role="tab">Редактировать профиль</a>
						<a class="list-group-item list-group-item-action" href="contacts.php" onclick="gotoContacts();">Написать менеджеру</a>
						<a class="list-group-item list-group-item-action" data-toggle="modal" data-target="#deleteModal" id="deleteProfile" style="cursor: pointer;">Удалить профиль</a>
					</div>
				</div>
				<div class="col-md-9">
					<div class="tab-content">
						<!--PROFILE-->
						<div class="tab-pane active" id="profile" role="tabpanel">
							<div class="panel panel-info">
								<div class="panel-heading" style="padding: 20px;">
									<h3 class="panel-title">Вася Пупкин Геннадьевич</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/profiles/avatar.png" class="img-circle img-responsive"> </div>
										<div class=" col-md-9 col-lg-9 "> 
											<table class="table table-user-information">
												<tbody>
													<tr>
														<td>Email: </td>
														<td><a href="mailto:pupkin@yandex.ru">pupkin@yandex.ru</a></td>
													<tr>
														<td>Имя: </td>
														<td>Вася</td>
													</tr>
													<tr>
														<td>Фамилия: </td>
														<td>Пупкин</td>
													</tr>
													<tr>
														<td>Отчество: </td>
														<td>Геннадьевич</td>
													</tr>
											   
													<tr>
														<tr>
															<td>Пол: </td>
															<td>Мужской</td>
														</tr>
														<tr>
															<td>Дата рождения: </td>
															<td>1.01.1990</td>
														</tr>
														<td>Адрес</td>
														<td>ул. Пушкина, д.3, кв. 5</td> 
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<a href="shopping_cart.php" class="btn btn-primary">Корзина</a>
									<a href="wishlist.php" class="btn btn-primary">Избранные товары</a>
								</div>
							</div>
						</div>
						<!--END PROFILE-->
						
						<!--MY ORDERS-->
						<div class="tab-pane" id="my_orders" role="tabpanel">
							<div class="panel panel-info">
								<div class="panel-heading" style="padding: 20px;">
									<h3 class="panel-title">Список заказов</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class=" col-md-12"> 
											<div class="table-responsive">	
												<table class="table table-bordered table-striped">
													<thead>
														<tr>
															<th>ID заказа</th>
															<th>Статус</th>
															<th>Служба доставки</th>
															<th>Дата заказа</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>Заказ успешно доставлен</td>
															<td>TestDel</td>
															<td>2.9.2018</td>
														</tr>
														<tr>
															<td>2</td>
															<td>Заказ успешно доставлен</td>
															<td>TestDel</td>
															<td>10.9.2018</td>
														</tr>
														<tr>
															<td>3</td>
															<td>Заказ доставляется</td>
															<td>TestDel</td>
															<td>3.10.2018</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<a href="shopping_cart.php" class="btn btn-primary">Корзина</a>
									<a href="wishlist.php" class="btn btn-primary">Избранные товары</a>
								</div>
							</div>
						</div>
						<!--END MY ORDERS-->
						
						<!--EDIT PROFILE-->
						<div class="tab-pane" id="edit" role="tabpanel">
							<div class="panel panel-info">
								<div class="panel-heading" style="padding: 20px;">
									<h3 class="panel-title">Изменить профиль</h3>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-9 col-lg-9" style="margin-left: 20px;"> 
											<form>
											  <div class="form-group row">
												<label for="email" class="col-4 col-form-label">Email</label> 
												<div class="col-8">
												  <input id="email" name="email" type="email" placeholder="Email" class="form-control here" required="required">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="lastname" class="col-4 col-form-label">Фамилия</label> 
												<div class="col-8">
												  <input id="lastname" name="lastname" placeholder="Фамилия" class="form-control here" type="text">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="firstname" class="col-4 col-form-label">Имя</label> 
												<div class="col-8">
												  <input id="firstname" name="firstname" placeholder="Имя" class="form-control here" type="text">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="familyname" class="col-4 col-form-label">Отчество</label> 
												<div class="col-8">
												  <input id="familyname" name="text" placeholder="Отчество" class="form-control here" required="required" type="text">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="select" class="col-4 col-form-label">Пол</label> 
												<div class="col-8">
												  <select id="select" name="select" class="form-control">
													<option value="male">Мужской</option>
													<option value="female">Женский</option>
												  </select>
												</div>
											  </div>
											  <div class="form-group row">
												<label for="birthday" class="col-4 col-form-label">Дата рождения</label> 
												<div class="col-8">
												  <input id="birthday" name="birthday" placeholder="Дата рождения" class="form-control here" required="required" type="text">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="adress" class="col-4 col-form-label">Адрес</label> 
												<div class="col-8">
												  <input id="adress" name="adress" placeholder="Адрес" class="form-control here" type="text">
												</div>
											  </div>
											  <div class="form-group row">
												<label for="newpass" class="col-4 col-form-label">Новый пароль</label> 
												<div class="col-8">
												  <input id="newpass" name="newpass" placeholder="Новый пароль" class="form-control here" type="password">
												</div>
											  </div> 
											  <div class="form-group row">
												<label for="avatar" class="col-4 col-form-label">Аватар</label> 
												<div class="col-8">
													<input id="avatar" name="avatar" class="form-control here" type="file" accept="image/*">
												</div>
											  </div> 
											  <div class="form-group row">
												<label for="pass" class="col-4 col-form-label">Старый пароль</label> 
												<div class="col-8">
												  <input id="pass" name="pass" placeholder="Старый пароль" class="form-control here" type="password">
												</div>
											  </div> 
											  <div class="form-group row">
												<div class="offset-4 col-8 text-center">
												  <button name="submit" type="submit" class="btn btn-primary">Обновить профиль</button>
												</div>
											  </div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--END EDIT PROFILE-->
					</div>
				</div>
			</div>
		</div>
		<!--END MAIN BLOCK-->
		
		<!-- DELETE MODAL-->
		<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						
						<div class="row">
							<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
							<h2 class="modal-title">Удалить профиль</h2>
						</div>
					</div>
					<div class="modal-body">
						<form class="form-signin">
							<div class="form-label-group">
								<label for="deleteAcc">Пароль</label>
								<input type="password" id="deleteAcc" class="form-control" placeholder="Введите Ваш пароль" required autofocus>
							</div>					
							<div class="text-center" style="margin-top: 20px;"> 
								<button class="btn btn-lg btn-danger" type="submit" name="login">Удалить</button>
							</div>
						</form>
					</div>
				</div>
            </div>
		</div>
		<!--END DELETE MODAL-->
		
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
