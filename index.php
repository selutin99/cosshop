<!DOCTYPE html>
<html>
    <head>

        <title>Creative Online Store - Главная</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" type="image/png" href="images/logo/favicon.png"/>
		
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
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
