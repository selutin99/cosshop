<!--ADD DELIVERIES MODAL-->
<div id="add_deliveries" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		
		<div class="row">
			<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
			<h2 class="modal-title">Добавление</h2>
		</div>
	  </div>
	  <div class="modal-body">
		<form class="form-signin">		
			<div class="form-label-group">
				<label for="addDeliveriesName">Название</label>
				<input type="text" id="addDeliveriesName" class="form-control" placeholder="Название" autofocus>
			</div>
	  
			<div class="form-label-group">
				<label for="addDeliveriesDesc">Описание</label>
				<input type="text" id="addDeliveriesDesc" class="form-control" placeholder="Описание">
			</div>
			
			<div class="form-label-group">
				<label for="addDeliveriesCity">Город</label>
				<input type="text" id="addDeliveriesCity" class="form-control" placeholder="Город">
			</div>
			
			<div class="form-label-group">
				<label for="addDeliveriesPhone">Телефон</label>
				<input type="phone" id="addDeliveriesPhone" class="form-control" placeholder="Телефон">
			</div>
			
			<div class="form-label-group">
				<label for="addDeliveriesEmail">Email</label>
				<input type="text" id="addDeliveriesEmail" class="form-control" placeholder="Email">
			</div>
			
			<div class="form-label-group">
				<label for="addDeliveriesCost">Цена</label>
				<input type="phone" id="addDeliveriesCost" class="form-control" placeholder="Цена">
			</div>
			
			<div class="form-label-group">
				<label for="addDeliveriesAdress">Начальный адрес</label>
				<input type="text" id="addDeliveriesAdress" class="form-control" placeholder="Начальный адрес">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="addDeliverie" class="btn btn-success">Добавить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END ADD DELIVERIES MODAL-->
<script>
	$('#add_deliveries').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#addDeliverie").click(function() {
		var name = $("#addDeliveriesName").val();
		var description = $("#addDeliveriesDesc").val();
		var city = $("#addDeliveriesCity").val();
		var phone = $("#addDeliveriesPhone").val();
		var email = $("#addDeliveriesEmail").val();
		var cost = $("#addDeliveriesCost").val();
		var adress = $("#addDeliveriesAdress").val();
		
		$.ajax({
			url: "../admin_queries/add_deliverie.php",
			type: "POST",
			data: { name: name, description: description, city: city, phone: phone, email: email, cost: cost, adress: adress },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>