<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - Главная</title>

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
						
						<li class="dropdown active">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								Товары
								<span class="caret"></span>
							</a>
						    <ul class="dropdown-menu">
								<li><a href="#">Все товары</a></li>
								<li class="dropdown-header">Категории</li>
								<li><a href="#">Мобильные телефоны</a></li>
								<li><a href="#">Наушники</a></li>
								<li><a href="#">Ноутбуки</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" data-toggle="modal" data-target="#registerModal"><span class="glyphicon glyphicon-user"></span> Регистрация</a></li>
						<li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Вход</a></li>
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
		
		<!-- LOGIN MODAL-->
		<div class="modal" id="loginModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						
						<div class="row">
							<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
							<h2 class="modal-title">Вход</h2>
						</div>
					</div>
					<div class="modal-body">
						<form class="form-signin">
							<div class="form-label-group">
								<label for="inputEmail">Email</label>
								<input type="email" id="inputEmail" class="form-control" placeholder="Введите email" required autofocus>
							</div>
					  
							<div class="form-label-group">
								<label for="inputPassword">Пароль</label>
								<input type="password" id="inputPassword" class="form-control" placeholder="Введите пароль" required>
							</div>
					  
							<div class="checkbox mb-3">
							  <label>
								<input type="checkbox" value="remember-me"> Запомнить меня
							  </label>
							</div>
							
							<div class="login-help">
								<a href="#" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Зарегистрироваться</a> - <a href="#">Забыли пароль?</a>
							</div>
							
							<div class="text-center"> 
								<button class="btn btn-lg btn-info" type="submit" name="login">Войти</button>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
		<!--END LOGIN MODAL-->
		
		<!-- REGISTER MODAL-->
		<div class="modal" id="registerModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						
						<div class="row">
							<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
							<h2 class="modal-title">Регистрация</h2>
						</div>
					</div>
					<div class="modal-body">
						<form class="form-signin">		
							<div class="form-label-group">
								<label for="inputEmail">Email</label>
								<input type="email" id="registerEmail" class="form-control" placeholder="Введите email" required autofocus>
							</div>
					  
							<div class="form-label-group">
								<label for="inputPassword">Пароль</label>
								<input type="password" id="registerPassword" class="form-control" placeholder="Введите пароль" required>
							</div>
							
							<div class="form-label-group">
								<label for="inputPassword">Подтверждение пароля</label>
								<input type="password" id="registerRepearPassword" class="form-control" placeholder="Подтвердите пароль" required>
							</div>
							
							<div class="login-help">
								<a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Уже есть аккаунт?</a>
							</div>
							
							<div class="text-center"> 
								<button class="btn btn-lg btn-info" type="submit" name="registration">Зарегистрироваться</button>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
		<!--END REGISTER MODAL-->
		
		<!--FILTER-->
		<div class="container">
			<div class="row">
				
				<div class="col-sm-3 col-md-3">
					<div class="panel panel-default" style="margin-top: 55px;">
							<div class="panel-heading">
								<h3 align="center" style="font-weight: bold;">Фильтрация</h3>
							</div>
							<div class="panel-body">
					
								<a href="#" class="btn btn-danger btn-block" style="margin-bottom: 10px;">Отфильтровать</a>
								<a href="#" class="btn btn-info btn-block" style="margin-bottom: 20px;">Очистить фильтр</a>
								
								<div id="local_searcher" style="margin-bottom: 20px;"> 
									<div class="input-group">
										<input type="text" class="form-control"  placeholder="Поиск" >
										<div class="input-group-btn">
											<span class="btn btn-default">
												<i class="glyphicon glyphicon-search"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">По цене</h3>
						</div>
						<div class="panel-body">
							<header class="card-header">
								<h2 align="center">Введите цену:</h2>
							</header>
							<div class="filter-content">
								<div class="card-body">
									<div class="form-row">
										<div class="form-group col-md-6">
										  <label>Минимум</label>
										  <input type="number" class="form-control" placeholder="min">
										</div>
										<div class="form-group col-md-6 text-right">
										  <label>Максимум</label>
										  <input type="number" class="form-control" placeholder="max">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">По категории</h3>
							<span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
						</div>
						<div class="panel-body collapse">
							<header class="card-header">
								<h2 align="center">Категории:</h2>
							</header>
							<div class="filter-content">
								<div class="card-body">
									<label class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadio" value="">
										<span class="form-check-label">
											Мобильные телефоны
										</span>
									</label><br>
									<label class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadio" value="">
										<span class="form-check-label">
											Наушники
										</span>
									</label><br>
									<label class="form-check">
										<input class="form-check-input" type="radio" name="exampleRadio" value="">
										<span class="form-check-label">
											Ноутбуки
										</span>
									</label><br>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">По производителю</h3>
							<span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
						</div>
						<div class="panel-body collapse">
							<header class="card-header">
								<h2 align="center">Выберите производителя:</h2>
							</header>
							<div class="filter-content">
								<div class="card-body">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="Check1">
										<label class="custom-control-label" for="Check1">Samsung</label>
									</div>

									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="Check2">
										<label class="custom-control-label" for="Check2">Asus</label>
									</div>

									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="Check3">
										<label class="custom-control-label" for="Check3">Lenovo</label>
									</div>

									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="Check4">
										<label class="custom-control-label" for="Check4">Другие</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">По цвету</h3>
							<span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
						</div>
						<div class="panel-body collapse">
							<header class="card-header">
								<h2 align="center">Выберите цвет:</h2>
							</header>
							<div class="filter-content">
								<div class="card-body">
									<label class="btn btn-danger">
									  <input class="" type="checkbox" name="myradio" value="">
									  <span class="form-check-label">Красный</span>
									</label>
									<label class="btn btn-success">
									  <input class="" type="checkbox" name="myradio" value="">
									  <span class="form-check-label">Зелёный</span>
									</label>
									<label class="btn btn-primary">
									  <input class="" type="checkbox" name="myradio" value="">
									  <span class="form-check-label">Синий</span>
									</label>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--LIST OF PRODUCTS-->
					<div class="col-sm-9 col-md-9" style="margin-top: 55px;">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h2 align="center" style="font-weight: bold;">Товары</h2>
							</div>
							<div class="panel-body">
								<div>
									<button class="btn btn-primary filter-button" data-filter="all">Все товары</button>
									<button class="btn btn-default filter-button" data-filter="new">Новинки</button>
									<button class="btn btn-default filter-button" data-filter="discounts">Скидки</button>
								</div>
								<br/>
								
								<div class="row">
									<div class="col-md-6 filter new">
										<div class="thumbnail">
											<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="ASUS ZenFone Go ZB452KG" data-image="images/goods/b2.jpg" data-target="#image-gallery">
												<img src="images/goods/b2.jpg" alt="ASUS ZenFone Go ZB452KG" class="img-responsive">
											</a>
											<div class="caption">
											  <h4 class="pull-right">12000 р.</h4>
											  <h4><a href="#">ASUS ZenFone Go ZB452KG</a></h4>
											  <p>Новый и яркий дизайн! 8ГБ оперативной памяти помогут решить почти любые задачи. Камера высокого разрешения и громкий динамик делают работу с мультимедиа максимально комфортной. Восьмиядерный процессор делает работу стабильной.</p>
											</div>
											<div class="space-ten"></div>
											<div class="btn-ground text-center">
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
												<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> В избранное</button>
											</div>
											<div class="space-ten"></div>
										</div>
									</div>
										
									<div class="col-md-6 filter new">
										<div class="thumbnail">
											<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Lenovo S850" data-image="images/goods/b1.jpg" data-target="#image-gallery">
												<img src="images/goods/b1.jpg" alt="Lenovo S850" class="img-responsive">
											</a>
											<div class="caption">
											  <h4 class="pull-right">7350 р.</h4>
											  <h4><a href="#">Lenovo S850</a></h4>
											  <p>Тонкий и легкий смартфон Lenovo S850 подчеркнет ваш неповторимый стиль. Модель в стеклянном корпусе оснащена 5-дюймовыйм дисплеем с HD разрешением и широкими углами обзора, мощным четырехъядерным процессором и двумя SIM-картами.</p>
											</div>
											<div class="space-ten"></div>
											<div class="btn-ground text-center">
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
												<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> В избранное</button>
											</div>
											<div class="space-ten"></div>
										</div>
									</div>
									
									<div class="col-md-6 filter discounts">
										<div class="thumbnail">
											<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Samsung Galaxy S7" data-image="images/goods/b5.jpg" data-target="#image-gallery">
												<img src="images/goods/b5.jpg" alt="Samsung Galaxy S7" class="img-responsive">
											</a>
											<div class="caption">
											  <h4 class="pull-right" style="color: red;"> 9800 р.</h4>
											  <h4 class="pull-right"><s> 11300 р.</s></h4>
											  <h4><a href="#">Samsung Galaxy S7</a></h4>
											  <p>Samsung Galaxy S7 откроет для вас мир технологически совершенных вещей, таких как: очки виртуальной реальности Samsung Gear VR, камеру Gear 360 и смарт-часы Samsung Gear S2. Экосистема совместимых устройств создана, чтобы дарить вам незабываемые впечатления.</p>
											</div>
											<div class="space-ten"></div>
											<div class="btn-ground text-center">
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
												<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> В избранное</button>
											</div>
											<div class="space-ten"></div>
										</div>
									</div>
										
									<div class="col-md-6 filter discounts">
										<div class="thumbnail">
											<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="ASUSPRO B9440UA" data-image="images/goods/b6.jpg" data-target="#image-gallery">
												<img src="images/goods/b6.jpg" alt="ASUSPRO B9440UA" class="img-responsive">
											</a>
											<div class="caption">
											  <h4 class="pull-right" style="color: red;"> 28800 р.</h4>
											  <h4 class="pull-right"><s> 30300 р.</s></h4>
											  <h4><a href="#">ASUSPRO B9440UA</a></h4>
											  <p>Исключительно легкий и прочный бизнес-ноутбук B9440 с большим дисплеем – незаменимый спутник в деловых поездках в любую точку мира. Тщательно продуманная конструкция позволила разработать 14-дюймовый экран с разрешением Full-HD.</p>
											</div>
											<div class="space-ten"></div>
											<div class="btn-ground text-center">
												<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
												<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> В избранное</button>
											</div>
											<div class="space-ten"></div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!--END LIST OF PRODUCTS-->
				
			</div>
		</div>
		<!--END FILTER-->
		
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
							<li><a href="#" style="text-decoration: none;">Товары</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2 footers-three">
						<h5><b><u>Вход на сайт</b></u></h5>
						<ul class="list-unstyled">
							<li><a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#loginModal">Вход</a></li>
							<li><a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#registerModal">Регистрация</a></li>
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
		<script src="js/resize.js"></script>
		<script src="js/backtop.js"></script>
    </body>
</html>