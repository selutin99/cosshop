<?php
	$title='Creative Online Store - Контакты';
	$page='contacts';
	
	include 'includes/header.php';
?>
		<!--CONTACTS-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 align="center">Наши контакты</h2>
					<p align="center" style="font-size: 18px;">Если Вы захотите связаться с нами, то Вы можете это сделать одним из следующих способов:</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box" onclick="window.location='tel:88005553535';">
						<div class="box-icon"><span class="fa fa-4x fa-phone"></span></div>
						<div class="info">
							<h3 class="text-center">Позвоните нам</h3>
							<p class="text-center" style="font-size: 17px; font-weight: bold;">8-800-555-35-35</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box">
						<div class="box-icon"> <span class="fa fa-4x fa-map-marker"></span> </div>
						<div class="info">
							<h3 class="text-center">Наш офис</h3>
							<p class="text-center" style="font-size: 17px; font-weight: bold;">город Саратов,<br> улица Политехническая 124</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="box">
						<div class="box-icon" onclick="window.location='mailto:cosshop@yandex.ru';"> <span class="fa fa-4x fa-envelope-o"></span> </div>
						<div class="info">
							<h3 class="text-center">Напишите нам</h3>
							<p class="text-center" style="font-size: 17px; font-weight: bold;">co5shop@yandex.ru</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container" style="margin-top: 10px; margin-bottom: 20px;">
			<h2 align="center" style="margin-bottom: 20px;">Обратная связь</h2>
			<div class="row">
				<div class="col-md-7">
					<iframe src="https://yandex.ru/map-widget/v1/-/CBByj4xb2A" width="100%" height="450" frameborder="1" allowfullscreen="true"></iframe>
				</div>

				<div class="col-md-5">
					<form method="POST">
						<div class="form-group">
							<input type="text" class="form-control" name="fbeheader" value="" placeholder="Заголовок" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="fbeemail" value="<?php if($_SESSION['auth']=='yes' || isset($_COOKIE['user'])){$user = getUserProfile($_SESSION['userID']); echo $user['email'];} else{echo"";} ?>" placeholder="Email" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="fbemessage" rows="9" placeholder="Ваше сообщение" style="resize: none;" required></textarea>
						</div>
						<div class='form-group'>
							<div class='form-label-group'>
								<input type='text' name='contactCaptcha' id='contactCaptcha' class='form-control' placeholder='Каптча' required>
								<div class='captcha_block'>
									<img class='captcha' style='display: block; margin-top: 20px; margin-left: 40%;' src='../includes/captcha.php' class='capimg' alt='Каптча'/>
								</div>
							</div>
						</div>
						<div class="text-center">
							<button class="btn btn-info" type="submit" name="fbesubmit">
								<i class="fa fa-paper-plane-o" aria-hidden="true"></i> Отправить
							</button>
						</div>
						<?php
							if(isset($_POST['fbesubmit'])){
						
								$title = $_POST['fbeheader'];
								$email = $_POST['fbeemail'];
								$message = $_POST['fbemessage'];
								
								$title = htmlspecialchars($title);
								$email = htmlspecialchars($email);
								$message = htmlspecialchars($message);

								$title = urldecode($title);
								$email = urldecode($email);
								$message = urldecode($message);

								$title = trim($title);
								$email = trim($email);
								$message = trim($message);
								
								$captcha = trim(urldecode(htmlspecialchars($_POST['contactCaptcha'])));
								$captcha = md5($captcha);
								
								if($captcha==$_SESSION['captcha']){
									if(mail("co5shop@yandex.ru", $title, $message)){ 
										echo "<p align=\"center\" style=\"color: green;\">Сообщение успешно отправлено</p>"; 
									} 
									else { 
										echo "<p align=\"center\" style=\"color: red;\">При отправке сообщения возникла ошибка</p>";
									}
								}
								else{
									echo "<p align=\"center\" style=\"color: red;\">Неверная каптча</p>";
								}
							}
						?>
					</form>
				</div>
			</div>
		</div>
		<!--END CONTACTS-->
		
<?php
	include 'includes/footer.php';
?>