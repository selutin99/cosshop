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
				<form class="form-signin" method="post">
					<div class="form-label-group">
						<label for="inputEmail">Email</label>
						<input type="email" id="inputEmail" name="logEmail" class="form-control" placeholder="Введите email" required autofocus>
					</div>
			  
					<div class="form-label-group">
						<label for="inputPassword">Пароль</label>
						<input type="password" id="inputPassword" name="logPassword" class="form-control" placeholder="Введите пароль" required>
					</div>
					
					<div class="form-label-group">
						<label for="inputCaptchaLog">Введите каптчу</label>
						<input type="text" class="form-control" id="inputCaptchaLog" name="logCaptcha" placeholder="Каптча" required>
						<div class="captcha_block">
							<img class="captcha" style="display: block; margin-top: 20px; margin-left: 40%;" src="../includes/captcha.php" class="capimg" alt="Каптча"/>
						</div>
					</div>
			  
					<div class="checkbox mb-3">
					  <label>
						<input type="checkbox" name="remember" value="remember-me"> Запомнить меня
					  </label>
					</div>
					
					<div class="login-help">
						<a href="#" class="rel" data-toggle="modal" data-target="#registerModal" data-dismiss="modal">Зарегистрироваться</a> - <a id="forgetPass" href="#" class="rel" data-toggle="modal" data-target="#forgotModal" data-dismiss="modal">Забыли пароль?</a>
					</div>
					
					<div class="modal-footer">
						<div class="text-center"> 
							<button class="btn btn-lg btn-info" type="submit" name="login">Войти</button>
							<p class="logText"></p>
							<?php
								if(isset($_POST['login'])){
									$email = trim(urldecode(htmlspecialchars($_POST['logEmail'])));
									$password = trim(urldecode(htmlspecialchars($_POST['logPassword'])));;
									$captcha = trim(urldecode(htmlspecialchars($_POST['logCaptcha'])));
								
									$password = md5($password);
									$captcha = md5($captcha);
																	
									$_SESSION['loginSubmitted'] = true;
									
									if ($email){
										if($_SESSION['captcha'] === $captcha){
												
											$row = getUser($email);
											
											if ($row['email']==$email && $row['password']==$password){ 
												session_start();
												if(isset($_POST['remember'])){
													setcookie('user', $password, strtotime('+30 days'), '/');
												}
												$_SESSION['userID']=$row['id'];
												$_SESSION['access']=$row['access_level'];
												$_SESSION['auth'] = 'yes';
												echo "<script>document.location.href =\"../profile.php\"</script>";
											}
											else{
												echo "<script>$('.logText').append('<p class=\"logText\" style=\"color: red;\">Неверный логин или пароль</p>');</script>";
												$_SESSION['loginSubmitted'] = false;
											}
										}
										else{
											echo "<script>$('.logText').append('<p class=\"logText\" style=\"color: red;\">Неверная каптча</p>');</script>";
											$_SESSION['loginSubmitted'] = false;
										}								
									}
									else{
										echo "<script>$('.logText').append('<p class=\"logText\" style=\"color: red;\">Не могу обработать форму</p>');</script>";
										$_SESSION['loginSubmitted'] = false;
									}	
								}
								if(isset($_SESSION['loginSubmitted']) && $_SESSION['loginSubmitted'] == false){
									echo "<script>$('#login').click();</script>";
									echo "<script>$('.captcha').remove();</script>";
									echo "<script>$('.captcha_block').html('<img class=\"captcha\" style=\"display: block; margin-top: 20px; margin-left: 40%;\" src=\"../includes/captcha.php\" class=\"capimg\" alt=\"Каптча\"/>');</script>";
									$_SESSION['loginSubmitted'] = true;
									
								}
							?>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--END LOGIN MODAL-->