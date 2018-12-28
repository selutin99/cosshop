<!-- LOGIN MODAL-->
<div class="modal" id="forgotModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Восстановить пароль</h2>
				</div>
			</div>
			<div class="modal-body">
				<form class="form-signin" method="post">
					<div class="form-label-group">
						<label for="forgotEmail">Email</label>
						<input type="email" id="forgotEmail" name="forgotEmail" class="form-control" placeholder="Введите email" required autofocus>
					</div>
					<div class="form-label-group">
						<label for="forgotCaptchaLog">Введите каптчу</label>
						<input type="text" class="form-control" id="forgotCaptchaLog" name="forgotCaptcha" placeholder="Каптча" required>
						<div class="captcha_block">
							<img class="captcha" style="display: block; margin-top: 20px;" src="../includes/captcha.php" class="capimg" alt="Каптча"/>
						</div>
					</div>
					<div class="form-label-group">
						<div class="text-center"> 
							<button class="btn btn-lg btn-info" type="submit" name="reset">Восстановить</button>
							<p class="forgotText"></p>
						</div>
						<?php
							if(isset($_POST['reset'])){		
							
								$email = trim(urldecode(htmlspecialchars($_POST['forgotEmail'])));
								$captcha = trim(urldecode(htmlspecialchars($_POST['forgotCaptcha'])));
								$captcha = md5($captcha);
								
								$password = uniqid();
								
								$_SESSION['forgotPassword'] = true;
								
								if ($email){
									if($captcha == $_SESSION['captcha']){
									
										$row = getEmails($email);
										if (isset($row['email']) && $row['email']==$email){ 
										
											if(mail($email, "Восстановление пароля", $password)){ 
												echo "<script>$('.forgotText').append('<p class=\"forgotText\" style=\"color: green;\">Новый пароль выслан на почту</p>');</script>";
												updatePasswordUserByEmail(md5($password),$email);
												$_SESSION['forgotPassword'] = false;
											} 
											else { 
												echo "<script>$('.forgotText').append('<p class=\"forgotText\" style=\"color: red;\">Ошибка при отправке сообщения</p>');</script>";;
												$_SESSION['forgotPassword'] = false;
											}
											
										}
										else{
											echo "<script>$('.forgotText').append('<p class=\"forgotText\" style=\"color: red;\">Неверный email</p>');</script>";
											$_SESSION['forgotPassword'] = false;
										}
									}
									else{
										echo "<script>$('.forgotText').append('<p class=\"forgotText\" style=\"color: red;\">Неверная каптча</p>');</script>";
										$_SESSION['forgotPassword'] = false;
									}
								}
								else{
									echo "<script>$('.forgotText').append('<p class=\"forgotText\" style=\"color: red;\">Не могу обработать форму</p>');</script>";
									$_SESSION['forgotPassword'] = false;
								}
							}
							if(isset($_SESSION['forgotPassword']) && $_SESSION['forgotPassword'] == false) {
								echo "<script>$('#forgetPass').trigger('click');</script>";
								echo "<script>$('.captcha').remove();</script>";
								echo "<script>$('.captcha_block').html('<img class=\"captcha\" style=\"display: block; margin-top: 20px; margin-left: 40%;\" src=\"../includes/captcha.php\" class=\"capimg\" alt=\"Каптча\"/>');</script>";
							    $_SESSION['forgotPassword'] = true;
							}
						?>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
