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
						<li><a href="<?php if($_SESSION['auth']=='yes' || isset($_COOKIE['user'])){echo "shopping_cart.php";} else {echo "\"data-toggle='modal' data-target=\"#loginModal";}?>" style="text-decoration: none;">Корзина</a></li>
						<li><a href="wishlist.php" style="text-decoration: none;">Избранные товары</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2 footers-three">
					<?php 
						if($_SESSION['auth']=='yes' && $_SESSION['access']=='0' || isset($_COOKIE['user'])){
							echo "<h5><b><u>Профиль пользователя</b></u></h5>";
							echo "<ul class='list-unstyled'>";
							echo "<li><a href='profile.php' style='text-decoration: none;'>Мой профиль</a></li>
								  <li><a href='logout.php' style='text-decoration: none;'>Выход</a></li>";
							echo "</ul>";
						}
						else if($_SESSION['auth']=='yes' && $_SESSION['access']=='1' || isset($_COOKIE['user'])){
							echo "<h5><b><u>Профиль пользователя</b></u></h5>";
							echo "<ul class='list-unstyled'>";
							echo "<li><a href='profile.php' style='text-decoration: none;'>Мой профиль</a></li>
								  <li><a href='manager_panel.php' style='text-decoration: none;'> Управление</a></li>
								  <li><a href='logout.php' style='text-decoration: none;'>Выход</a></li>";
							echo "</ul>";
						}
						else if($_SESSION['auth']=='yes' && $_SESSION['access']=='2' || isset($_COOKIE['user'])){
							echo "<h5><b><u>Профиль пользователя</b></u></h5>";
							echo "<ul class='list-unstyled'>";
							echo "<li><a href='profile.php' style='text-decoration: none;'>Мой профиль</a></li>
								  <li><a href='admin_panel.php' style='text-decoration: none;'> Администрирование</a></li>
								  <li><a href='logout.php' style='text-decoration: none;'>Выход</a></li>";
							echo "</ul>";
						}
						else{
							echo "<h5><b><u>Вход на сайт</b></u></h5>";
							echo "<ul class='list-unstyled'>";
							echo "<li><a href='#' class='rel' style='text-decoration: none;' data-toggle='modal' data-target='#loginModal'>Вход</a></li>
								  <li><a href='#' class='rel' style='text-decoration: none;' data-toggle='modal' data-target='#registerModal'>Регистрация</a></li>";
							echo "</ul>";
						}
					?>
						
				</div>
				<div class="col-xs-12 col-sm-6 col-md-2 footers-three">
					<h5><b><u>Контакты</b></u></h5>
					<ul class="list-unstyled">
						<li><span class="glyphicon glyphicon-envelope"></span> co5shop@yandex.ru</li>
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
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="js/slick.js"></script>
	
	<script src="js/filter.js"></script>
	<script src="js/resize.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/backtop.js"></script>
	<script src="js/reloader.js"></script>
</body>
</html>