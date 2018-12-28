<form method='post'>
	<div class='form-group'>
		<input type='text' class='form-control' name='fbename' placeholder='Заголовок' required>
	</div>
	<div class='form-group'>
		<textarea class='form-control' name='fbemessage' rows='9' placeholder='Ваш комментарий' style='resize: none;' required></textarea>
	</div>
	<div class='form-group'>
		<div class='form-label-group'>
			<input type='text' name='commentCaptcha' id='commentCaptcha' class='form-control' placeholder='Каптча' required>
			<div class='captcha_block'>
				<img class='captcha' style='display: block; margin-top: 20px; margin-left: 45%;' src='../includes/captcha.php' class='capimg' alt='Каптча'/>
			</div>
		</div>
	</div>
	<div class='text-center'>
		<button class='btn btn-info' type='submit' name='fbesubmit'>
			<i class='fa fa-paper-plane-o' aria-hidden='true'></i> Отправить
		</button>
		<div class="comment">
			<p class='commentSendStatus'></p>
		</div>
		<?php
			if(isset($_POST['fbesubmit'])){
				
				$title = trim(urldecode(htmlspecialchars($_POST['fbename'])));
				$description = trim(urldecode(htmlspecialchars($_POST['fbemessage'])));
				
				$captcha = trim(urldecode(htmlspecialchars($_POST['commentCaptcha'])));
				$captcha = md5($captcha);
				
				if($title && $description){
					if($_SESSION['captcha']==$captcha){
						$date = date('Y-m-d');
						
						addComment($_SESSION['userID'], $_GET['id'], $title, $description, $date);
						
						echo '<script>window.location.href = window.location.href;</script>';
					}
					else if($_SESSION['captcha']!=$captcha){
						echo "<script>$('.nav_tabs a[href=\"#add-comment\"]').tab('show');</script>";
						echo "<script>$('.commentSendStatus').remove();</script>";
						echo "<script>$('.comment').html('<p class=\"commentSendStatus\" style=\"color: red;\">Неверная каптча</p>');</script>";
					}
				}
				else{
					echo "<script>$('.nav_tabs a[href=\"#add-comment\"]').tab('show');</script>";
					echo "<script>$('.commentSendStatus').remove();</script>";
					echo "<script>$('.comment').html('<p class=\"commentSendStatus\" style=\"color: red;\">Не могу обработать форму</p>');</script>";
				}
			}
			if(isset($_SESSION['updater']) && $_SESSION['updater']==true){
				echo "<script>$('#modalAdded').modal('show');</script>"; 
				$_SESSION['updater'] = false;
			}
		?>
	</div>
</form>

<script>
	$('#addComment').click(function(){
		$('.commentSendStatus').remove();
		$('.captcha').remove();
		$('.captcha_block').html('<img class=\"captcha\" style=\"display: block; margin-top: 20px; margin-left: 45%;\" src=\"../includes/captcha.php\" class=\"capimg\" alt=\"Каптча\"/>');
	});
</script>