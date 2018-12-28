<!--ACCEPT ROLE MODAL-->
<div id="accept_role" class="modal" tabindex="-1" role="dialog" user_id="" user_role="">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Подтверждение</h2>
				</div>
			</div>
	  <div class="modal-body">
		<p>Подтвердите изменение роли пользователя.</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="acceptRoleOfUser" class="btn btn-success">Подтвердить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END ACCEPT ROLE MODAL-->
<script>
	$("#acceptRoleOfUser").click(function() {
		var userID = $("#accept_role").attr("user_id");
		var userRole = $("#accept_role").attr("user_role");
		
		$.ajax({
			url: "../admin_queries/accept_role.php",
			type: "POST",
			data: { uid: userID, userRole: userRole },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>