<!--EDIT USER MODAL-->
<div id="edit_user" class="modal" tabindex="-1" role="dialog" user_id="">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		
		<div class="row">
			<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
			<h2 class="modal-title">Редактирование</h2>
		</div>
	  </div>
	  <div class="modal-body">
		<form class="form-signin">		
			<div class="form-label-group">
				<label for="edituserEmail">Email</label>
				<input type="email" id="edituserEmail" class="form-control" placeholder="Почта" autofocus>
			</div>
	  
			<div class="form-label-group">
				<label for="edituserLastName">Фамилия</label>
				<input type="text" id="edituserLastName" class="form-control" placeholder="Фамилия">
			</div>
			
			<div class="form-label-group">
				<label for="edituserFirstName">Имя</label>
				<input type="text" id="edituserFirstName" class="form-control" placeholder="Имя">
			</div>
			
			<div class="form-label-group">
				<label for="editUserFamilyName">Отчество</label>
				<input type="text" id="editUserFamilyName" class="form-control" placeholder="Отчество">
			</div>
			
			<div class="form-label-group">
				<label for="editUserSex">Пол</label>
				<select class="form-control" id="editUserSex">
					<option value="male">Мужской</option>
					<option value="female">Женский</option>
				</select>
			</div>
			
			<div class="form-label-group">
				<label for="editUserBirthday">Дата рождения</label>
				<input type="date" id="editUserBirthday" class="form-control" placeholder="Дата рождения">
			</div>
			
			<div class="form-label-group">
				<label for="editUserAdress">Адрес</label>
				<input type="text" id="editUserAdress" class="form-control" placeholder="Адрес">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="changeUser" class="btn btn-success">Изменить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END EDIT USER MODAL-->
<script>
	$('#edit_user').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
		$('input[type=date]').val('');
		$('#editUserSex').val('male');
	});
	
	$("#changeUser").click(function() {
		var userID = $("#edit_user").attr("user_id");
		var email = $("#edituserEmail").val();
		var last_name = $("#edituserLastName").val();
		var first_name = $("#edituserFirstName").val();
		var family_name = $("#editUserFamilyName").val();
		var sex = $("#editUserSex").val();
		var birthday = $("#editUserBirthday").val();
		var adress = $("#editUserAdress").val();
		
		$.ajax({
			url: "../admin_queries/change_user.php",
			type: "POST",
			data: { uid: userID, eMail: email, lastName: last_name, firstName: first_name, familyName: family_name, userSex: sex, userBirthday: birthday, userAdress: adress },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>