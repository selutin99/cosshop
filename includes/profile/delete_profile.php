<!-- DELETE MODAL-->
<div class="modal" id="deleteModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Удалить профиль</h2>
				</div>
			</div>
			<div class="modal-body">
				<form class="form-signin" method="post">
					<div class="form-label-group">
						<label for="deleteAcc">Пароль</label>
						<input type="password" id="deleteAcc" name="deletePassword" class="form-control" placeholder="Введите Ваш пароль" required autofocus>
					</div>					
					<div class="text-center" style="margin-top: 20px;"> 
						<button class="btn btn-lg btn-danger" type="submit" name="deleteProfile">Удалить</button>
						<p id="textDelete"></p>
						<?php
							if(isset($_POST['deleteProfile'])){
							
								$deletePassword = trim(urldecode(htmlspecialchars($_POST['deletePassword'])));
								$deletePassword = md5($deletePassword);
								
								$_SESSION['deleteSubmit'] = true;
								
								if($deletePassword == $user['password']){
									deleteUser($_SESSION['userID']);
									echo "<script>document.location.href =\"../logout.php\"</script>";
								}
								else{
									echo "<script>var deleteFlag = true;</script>";
								}
							}
							if(isset($_SESSION['deleteSubmit']) && $_SESSION['deleteSubmit'] == true) {
								echo "<script>$('#deleteProfile').trigger('click');</script>";
								echo "<script>$('#textDelete').append('<p class=\"textDelete\" style=\"color: red;\">Неправильный пароль</p>');</script>";
								unset($_SESSION['deleteSubmit']);
							}
						?>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$('#deleteModal').on('hidden.bs.modal', function () {
		$('#textDelete').empty();
	});
</script>
<!--END DELETE MODAL-->