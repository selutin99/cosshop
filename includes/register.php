<!-- REGISTER MODAL-->
<div class="modal" id="registerModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Регистрация</h2>
				</div>
			</div>
			<div class="modal-body">
				<form class="form-signin" method="post">		
					<div class="form-label-group">
						<label for="regEmail">Email</label>
						<input type="email" name="inputEmail" id="regEmail" class="form-control" placeholder="Введите email" required autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="regPassword">Пароль</label>
						<input type="password" name="inputPassword" id="regPassword" minlength="6" class="form-control" placeholder="Введите пароль" required>
					</div>
					
					<div class="form-label-group">
						<label for="regRepPassword">Подтверждение пароля</label>
						<input type="password" name="repeatPassword" id="regRepPassword" class="form-control" placeholder="Подтвердите пароль" required>
					</div>
					
					<div class="form-label-group">
						<label for="regCaptcha">Введите каптчу</label>
						<input type="text" name="inputCaptcha" id="regCaptcha" class="form-control" placeholder="Каптча" required>
						<div class="captcha_block">
							<img class="captcha" style="display: block; margin-top: 20px; margin-left: 40%;" src="../includes/captcha.php" class="capimg" alt="Каптча"/>
						</div>
					</div>
					
					<div class="login-help">
						<a href="#" class="rel" data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Уже есть аккаунт?</a>
					</div>
					
					<div class="modal-footer">
						<div id="regMessage" class="text-center"> 
							<button class="btn btn-lg btn-info" type="submit" name="registration">Зарегистрироваться</button>
							<p class="regText"></p>
							<?php
								if(isset($_POST['registration'])){												
									$email = trim(urldecode(htmlspecialchars($_POST['inputEmail'])));
									$password = trim(urldecode(htmlspecialchars($_POST['inputPassword'])));;
									$repPassword = trim(urldecode(htmlspecialchars($_POST['repeatPassword'])));
									$captcha = trim(urldecode(htmlspecialchars($_POST['inputCaptcha'])));
								
									$password = md5($password);
									$repPassword = md5($repPassword);
									
									$captcha = md5($captcha);
									
									$_SESSION['registrationSubmitted'] = true;
									
									if ($email){
										if($_SESSION['captcha'] == $captcha){
											if($password == $repPassword){
												
												$row = getEmails($email);
												
												if (!isset($row['email'])){ 
													addUser($email, $password);
													echo "<script>$('.regText').append('<p class=\"regText\" style=\"color: green;\">Регистрация прошла успешно</p>');</script>";
													$_SESSION['registrationSubmitted'] = false;
												}
												else{
													echo "<script>$('.regText').append('<p class=\"regText\" style=\"color: red;\">Почта уже используется</p>');</script>";
													$_SESSION['registrationSubmitted'] = false;
												}
												
											}
											else{
												echo "<script>$('.regText').append('<p class=\"regText\" style=\"color: red;\">Пароли не совпадают</p>');</script>";
												$_SESSION['registrationSubmitted'] = false;
											}
										}
										else{
											echo "<script>$('.regText').append('<p class=\"regText\" style=\"color: red;\">Неверная каптча</p>');</script>";
											$_SESSION['registrationSubmitted'] = false;
										}								
									}
									else{
										echo "<script>$('.regText').append('<p class=\"regText\" style=\"color: red;\">Не могу обработать форму</p>');</script>";
										$_SESSION['registrationSubmitted'] = false;
									}	
									if(isset($_SESSION['registrationSubmitted']) && $_SESSION['registrationSubmitted'] == false) {
										echo "<script>$('#registraion').click();</script>";
										echo "<script>$('.captcha').remove();</script>";
										echo "<script>$('.captcha_block').html('<img class=\"captcha\" style=\"display: block; margin-top: 20px; margin-left: 40%;\" src=\"../includes/captcha.php\" class=\"capimg\" alt=\"Каптча\"/>');</script>";
										$_SESSION['registrationSubmitted'] = true;
									}
								}
							?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--END REGISTER MODAL-->