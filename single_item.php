<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - Lenovo S850</title>

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
		
		<!--MAIN BLOCK-->
		<div class="container" style="margin-bottom: 30px;">
			<div class="row">
				<div class="col-md-6">
					<!--CAROUSEL-->
					<div class="container item_carousel">
						<div id="item_carousel" class="carousel slide" data-ride="carousel">
							<!--INDICATORS-->
							<ol class="carousel-indicators">
							  <li data-target="#item_carousel" data-slide-to="0" class="active"></li>
							  <li data-target="#item_carousel" data-slide-to="1"></li>
							</ol>
							<!--END INDICATORS-->
							<!--SLIDES-->
							<div class="carousel-inner">
							  <div class="item active">
								<img src="images/goods/b1.jpg" class="center-block">
							  </div>

							  <div class="item">
								<img src="images/goods/b1-1.jpg" class="center-block">
							  </div>
						  
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
					<div class="product-title">Lenovo S850</div>
					<span class="label label-primary">Новинка</span>
					<div class="product-desc">Тонкий и легкий смартфон Lenovo S850 подчеркнет ваш неповторимый стиль. Модель в стеклянном корпусе оснащена 5-дюймовыйм дисплеем с HD разрешением и широкими углами обзора, мощным четырехъядерным процессором и двумя SIM-картами.</div>
					<hr>
					<div class="product-price">Стоимость: 7350 р.</div>
					<div class="product-stock">Осталось: 3</div>
					<hr>
					<div class="btn-group cart">
						<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
					</div>
					<div class="btn-group wishlist">
						<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> В избранное</button>
					</div>
				</div>
			</div>
	
			<div class="col-md-15 product-info">
				<ul class="nav nav-tabs nav_tabs">	
					<li class="active"><a href="#full-description" data-toggle="tab">Полное описание</a></li>
					<li><a href="#equality" data-toggle="tab">Подходящие товары</a></li>
					<li><a href="#reviews" data-toggle="tab">Отзывы</a></li>
					<li><a href="#add-comment" data-toggle="tab">Добавить комментарий</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane fade in active" id="full-description">
						<section class="container product-info">
							Тонкий и легкий смартфон Lenovo S850 подчеркнет ваш неповторимый стиль. Модель в стеклянном корпусе оснащена 5-дюймовыйм дисплеем с HD разрешением и широкими углами обзора, мощным четырехъядерным процессором и двумя SIM-картами. С помощью двух камер с высоким разрешением (13 МПикс сзади и 5 МПикс спереди) вы сможете запечатлеть волнующие моменты жизни и мгновенно поделиться ими с друзьями. Корпус поставляется в трех расцветках: розовой, белой и темно-синей.
							<li>
							Lenovo S850 – это стильная модель в стеклянном корпусе, представленная во множестве расцветок. Толщина смартфона составляет всего 8,2 мм, а вес — 140 г.
							</li>
							
							<li>
							Благодаря 5-дюймовому HD-дисплею с широкими углами обзора на смартфоне Lenovo S850 удобно и приятно играть, обмениваться сообщениями, смотреть видеоролики или путешествовать в Интернете.
							</li>
							
							<li>
							Четырехъядерный процессор с частотой 1,3 ГГц обеспечивает лучшую работу нескольких приложений одновременно, быструю работу ОС Android, качественное воспроизведение HD-видео и графики в играх.
							</li>
							
							<li>
							Один смартфон, два номера телефона Хотите сэкономить на тарифах за мобильную связь, использовать телефон за границей без роуминга или просто завести отдельный номер для работы? Тогда выбирайте смартфон S850 с двумя SIM-картами!
							</li>
							
							<li>
							Android 4.4 радует взгляд превосходным дизайном, в режиме блокировки на экран можно выводить фотографии или видеоклипы. ОС отличается высокой производительностью, позволяет быстро переключаться между запущенными приложениями и содержит множество интеллектуальных функций.
							</li>
						</section>
					</div>
					<div class="tab-pane fade" id="equality">
						<section class="container product-info">
							<div class="row">
							
								<div class="col-md-4">
									<div class="thumbnail">
										<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Lenovo Y 7.1" data-image="images/goods/b3.jpg" data-target="#image-gallery">
											<img src="images/goods/b3.jpg" alt="Lenovo Y 7.1" class="img-responsive">
										</a>
										<div class="caption">
										  <h4 class="pull-right">1250 р.</h4>
										  <h4><a href="single_item.php">Наушники Lenovo Y 7.1</a></h4>
										  <p>Lenovo GXD0J16085 – игровые наушники с микрофоном, поддерживающие технологию USB 3.0. Это обеспечивает совместимость с большинством современных гаджетов, высокую скорость и производительность. Максимально объёмный звук!</p>
										</div>
										<div class="space-ten"></div>
										<div class="btn-ground text-center">
											<button type="button" class="btn btn-danger" style="margin-bottom: 10px;"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
											<button type="button" class="btn btn-primary" style="margin-bottom: 10px;"><span class="glyphicon glyphicon-heart"></span> В избранное</button>
										</div>
										<div class="space-ten"></div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="thumbnail">
										<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="ASUSPRO B9440UA" data-image="images/goods/b6.jpg" data-target="#image-gallery">
											<img src="images/goods/b6.jpg" alt="ASUSPRO B9440UA" class="img-responsive">
										</a>
										<div class="caption">
										  <h4 class="pull-right" style="color: red;"> 28800 р.</h4>
										  <h4 class="pull-right"><s> 30300 р.</s></h4>
										  <h4><a href="single_item.php">ASUSPRO B9440UA</a></h4>
										  <p>Исключительно легкий и прочный бизнес-ноутбук B9440 с большим дисплеем – незаменимый спутник в деловых поездках в любую точку мира. Тщательно продуманная конструкция позволила разработать 14-дюймовый экран с разрешением Full-HD.</p>
										</div>
										<div class="space-ten"></div>
										<div class="btn-ground text-center">
											<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
										</div>
										<div class="space-ten"></div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class="thumbnail">
										<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Samsung Galaxy S7" data-image="images/goods/b5.jpg" data-target="#image-gallery">
											<img src="images/goods/b5.jpg" alt="Samsung Galaxy S7" class="img-responsive">
										</a>
										<div class="caption">
										  <h4 class="pull-right" style="color: red;"> 9800 р.</h4>
										  <h4 class="pull-right"><s> 11300 р.</s></h4>
										  <h4><a href="single_item.php">Samsung Galaxy S7</a></h4>
										  <p>Samsung Galaxy S7 откроет для вас мир технологически совершенных вещей, таких как: очки виртуальной реальности Samsung Gear VR, камеру Gear 360 и смарт-часы Samsung Gear S2. Экосистема совместимых устройств создана, чтобы дарить вам незабываемые впечатления.</p>
										</div>
										<div class="space-ten"></div>
										<div class="btn-ground text-center">
											<button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</button>
										</div>
										<div class="space-ten"></div>
									</div>
								</div>
								
							</div>	
						</section>	
					</div>
					<div class="tab-pane fade" id="reviews">
						<section class="container">
							<div class="review-block">
								<div class="row">
									<div class="col-sm-3">
										<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
										<div class="review-block-name"><a href="#">nktailor</a></div>
										<div class="review-block-date">Сентябрь 29, 2018<br/></div>
									</div>
									<div class="col-sm-9">
										<div class="review-block-title">Отличная покупка получилась</div>
										<div class="review-block-description">Я рад качеству товара.</div>
									</div>
								</div>
							</div>
							<div class="review-block">
								<div class="row">
									<div class="col-sm-3">
										<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
										<div class="review-block-name"><a href="#">nktailor</a></div>
										<div class="review-block-date">Сентябрь 29, 2018<br/></div>
									</div>
									<div class="col-sm-9">
										<div class="review-block-title">Отличная покупка получилась</div>
										<div class="review-block-description">Я рад качеству товара.</div>
									</div>
								</div>
							</div>
						</section>							
					</div>
					<div class="tab-pane fade" id="add-comment">
						<section class="container product-info">
							<form>
								<div class="form-group">
									<input type="text" class="form-control" name="fbename" value="" placeholder="Заголовок" required>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="fbemessage" rows="9" placeholder="Ваш комментарий" style="resize: none;" required></textarea>
								</div>
								<div class="text-center">
									<button class="btn btn-info" type="submit" name="fbesubmit">
										<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Отправить
									</button>
								</div>
							</form>
						</section>							
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