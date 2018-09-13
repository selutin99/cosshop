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
						<a class="navbar-brand" href="#"><img src="images/logo/logo.svg" style="height: 40px; display: inline-block; margin-top: -15px;" alt="COSshop">
						COSshop
						</a>
					</div>
					<!--END LOGO-->
				
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Главная</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Контакты</a></li>
						
						<li class="dropdown">
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
							<a href="#" id="phone">
								<span class="glyphicon glyphicon-earphone" style="margin-right: 10px;"></span>8-800-555-35-35
							</a>
						</p>
					</div>
					
					<div class="col-md-4 col-md-offset-4">
						<p id="our_phone">
							<a href="#" class="btn btn-info btn-lg">
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
					  <p>Новые поступления!</p>
					</div>
					<img src="images/n1.jpg" class="center-block" style="width:60%; max-height: 350px;">
					
				  </div>

				  <div class="item">
					<img src="images/n2.jpg" class="center-block" style="width:60%; max-height: 350px;">
					<div class="carousel-caption">
					  <h3>Смартфоны</h3>
					  <p>Новые модели!</p>
					</div>
				  </div>
				
				  <div class="item">
					<img src="images/n3.jpg" class="center-block" style="width:60%; max-height: 350px;">
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
				<div class="col-md-4">
					<div class="thumbnail">
						<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Lenovo Y 7.1" data-image="images/b2.jpg" data-target="#image-gallery">
							<img src="images/b2.jpg" alt="" class="img-responsive">
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
					
				<div class="col-md-4">
					<div class="thumbnail">
						<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Lenovo S850" data-image="images/b1.jpg" data-target="#image-gallery">
							<img src="images/b1.jpg" alt="" class="img-responsive">
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
					
				<div class="col-md-4">
					<div class="thumbnail">
						<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Lenovo Y 7.1" data-image="images/b3.jpg" data-target="#image-gallery">
							<img src="images/b3.jpg" alt="" class="img-responsive">
						</a>
						<div class="caption">
						  <h4 class="pull-right">1250 р.</h4>
						  <h4><a href="#">Наушники Lenovo Y 7.1</a></h4>
						  <p>Lenovo GXD0J16085 – игровые наушники с микрофоном, поддерживающие технологию USB 3.0. Это обеспечивает совместимость с большинством современных гаджетов, высокую скорость и производительность. Максимально объёмный звук!</p>
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
		
		<!--END LIST OF PRODUCTS-->
		
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
					<img src="images/tb1.jpg" class="img-responsive" />
				</div>
				<div class="slide">
					<img src="images/tb2.jpg" class="img-responsive" />
				</div>
				<div class="slide">
					<img src="images/tb3.jpg" class="img-responsive" />
				</div>
				<div class="slide">
					<img src="images/tb4.jpg" class="img-responsive" />
				</div>
				<div class="slide">
					<img src="images/tb5.jpg" class="img-responsive" />
				</div>
			</div>
		</div>
		<!--END PARTNERS-->
		
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
							<li><a href="#" style="text-decoration: none;">О нас</a></li>
							<li><a href="#" style="text-decoration: none;">Товары</a></li>
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
		
		<script src="js/resize.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/backtop.js"></script>
    </body>
</html>
