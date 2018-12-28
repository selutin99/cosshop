<!--EDIT DELIVERIES MODAL-->
<div id="edit_deliveries" class="modal" tabindex="-1" role="dialog" deliverie_id="">
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
				<label for="editDeliveriesNameAdmin">Название</label>
				<input type="text" id="editDeliveriesNameAdmin" class="form-control" placeholder="Название" autofocus>
			</div>
	  
			<div class="form-label-group">
				<label for="editDeliveriesDescAdmin">Описание</label>
				<input type="text" id="editDeliveriesDescAdmin" class="form-control" placeholder="Описание">
			</div>
			
			<div class="form-label-group">
				<label for="editDeliveriesCityAdmin">Город</label>
				<input type="text" id="editDeliveriesCityAdmin" class="form-control" placeholder="Город">
			</div>
			
			<div class="form-label-group">
				<label for="editDeliveriesPhoneAdmin">Телефон</label>
				<input type="text" id="editDeliveriesPhoneAdmin" class="form-control" placeholder="Телефон">
			</div>
			
			<div class="form-label-group">
				<label for="editDeliveriesEmailAdmin">Email</label>
				<input type="text" id="editDeliveriesEmailAdmin" class="form-control" placeholder="Email">
			</div>
			
			<div class="form-label-group">
				<label for="editDeliveriesCostAdmin">Цена</label>
				<input type="text" id="editDeliveriesCostAdmin" class="form-control" placeholder="Цена">
			</div>
			
			<div class="form-label-group">
				<label for="editDeliveriesStartAdressAdmin">Начальный адрес</label>
				<input type="text" id="editDeliveriesStartAdressAdmin" class="form-control" placeholder="Начальный адрес">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="changeDeliveries" class="btn btn-success">Изменить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END EDIT DELIVERIES MODAL-->
<script>
	$('#edit_deliveries').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#changeDeliveries").click(function() {
		var deliverieID = $("#edit_deliveries").attr("deliverie_id");
		
		var name = $("#editDeliveriesNameAdmin").val();
		var description = $("#editDeliveriesDescAdmin").val();
		var city = $("#editDeliveriesCityAdmin").val();
		var phone = $("#editDeliveriesPhoneAdmin").val();
		var email = $("#editDeliveriesEmailAdmin").val();
		var cost = $("#editDeliveriesCostAdmin").val();
		var adress = $("#editDeliveriesStartAdressAdmin").val();
		
		$.ajax({
			url: "../admin_queries/change_deliverie.php",
			type: "POST",
			data: { uid: deliverieID, name: name, description: description, city: city, phone: phone, email: email, cost: cost, adress: adress },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>