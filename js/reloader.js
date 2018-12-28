$(".rel").click(function() {
    $('.captcha').remove();
    $('.captcha_block').html('<img class="captcha" style="display: block; margin-top: 20px; margin-left: 40%;" src="../includes/captcha.php" class="capimg" alt="Каптча"/>');
});

$('#registerModal').on('hidden.bs.modal', function () {
	$('.regText').empty();
});

$('#registerModal').on('hidden.bs.modal', function () {
	$('#regEmail').val('');
	$('#regPassword').val('');
	$('#regRepPassword').val('');
	$('#regCaptcha').val('');
});

$('#loginModal').on('hidden.bs.modal', function () {
	$('.logText').empty();
});

$('#loginModal').on('hidden.bs.modal', function () {
	$('#inputEmail').val('');
	$('#inputPassword').val('');
	$('#inputCaptchaLog').val('');	
});

$('#forgotModal').on('hidden.bs.modal', function () {
	$('.forgotText').empty();
});

$('#forgotModal').on('hidden.bs.modal', function () {
	$('#forgotCaptchaLog').val('');
	$('#forgotEmail').val('');
});