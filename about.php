<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - О нас</title>

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
						<li class="active"><a href="about.php">О нас</a></li>
						<li><a href="contacts.php">Контакты</a></li>
						
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
		
		<!--ABOUT US-->
		<div class="container">
			<h2 align="center">Встречайте нашу команду!</h2>
			<p align="center" style="font-size: 18px;">
				Мы разные. Мы росли в разных городах, в разных семьях, мы любим разную еду.<br> Но у нас есть нечто общее. Это наш магазин. Мы его суть. Мы - команда, а также семья.
			</p>
			<button class="btn btn-info center-block"><a href="contacts.php" style="font-size: 20px; color: white; text-decoration: none;">Напишите нам</a></button> 
		</div>
		<!--END ABOUT US-->
		
		<!--BACKGROUND-->
		<img src="images/backgrounds/about_bg.jpg" alt="about us background" style="width: 100%; margin-top: 30px;"/>
		<!--END BACKGROUND-->
		
		<!-- OUR TEAM -->
		<section id="team" class="pb-5" style="margin-bottom: 50px;">
			<div class="container">
				<h2 align="center" style="margin-bottom: 20px;">Наша команда</h2>
				<div class="row">
					<!-- MEMBER -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="images/ourteam/per1.png" alt="Елена Евтеева"></p>
											<h4 class="card-title">Елена Евтеева</h4>
											<h6>Дизайнер</h6>
											<p class="card-text" style="padding: 10px;">Делаю мир ярче и красочнее!</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END MEMBER -->
					<!-- MEMBER -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="images/ourteam/per2.png" alt="Игорь Кудрявцев"></p>
											<h4 class="card-title">Игорь Кудрявцев</h4>
											<h6>Программист</h6>
											<p class="card-text" style="padding: 10px;">Точность и пунктуальность - главные аспекты в моей работе.</p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END MEMBER -->
					<!-- MEMBER -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="image-flip">
							<div class="mainflip">
								<div class="frontside">
									<div class="card">
										<div class="card-body text-center">
											<p><img class=" img-fluid" src="images/ourteam/per3.png" alt="card image"></p>
											<h4 class="card-title">Ирина Филлипова</h4>
											<h6>Менеджер</h6>
											<p class="card-text" style="padding: 10px;">Никогда не сдаваться - вот мой девиз! </p>
											<ul class="list-inline">
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-facebook"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-skype"></i>
													</a>
												</li>
												<li class="list-inline-item">
													<a class="social-icon text-xs-center" target="_blank" href="#">
														<i class="fa fa-2x fa-google"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END MEMBER -->
				</div>
			</div>
		</section>
		<!--END OUR TEAM-->
		
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
		
		<script src="js/backtop.js"></script>
	</body>
</html>
		
