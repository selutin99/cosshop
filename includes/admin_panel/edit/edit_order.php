<!--EDIT ORDER MODAL-->
<div id="edit_order" class="modal" tabindex="-1" role="dialog" order="">
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
				<label for="editOrderEmailAdmin">Email</label>
				<input type="text" id="editOrderEmailAdmin" class="form-control" placeholder="Email" autofocus>
			</div>
	  
			<div class="form-label-group">
				<label for="editOrderStuffAdmin">Заказанные вещи</label>
				<input type="text" id="editOrderStuffAdmin" class="form-control" placeholder="Заказанные вещи">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderAdressStartAdmin">Место отправления</label>
				<input type="text" id="editOrderAdressStartAdmin" class="form-control" placeholder="Место отправления">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderAdressEndAdmin">Место доставки</label>
				<input type="text" id="editOrderAdressEndAdmin" class="form-control" placeholder="Место доставки">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderDateStartAdmin">Дата отправки</label>
				<input type="date" id="editOrderDateStartAdmin" class="form-control" placeholder="Дата отправки">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderDateDepartAdmin">Дата начала отправления</label>
				<input type="date" id="editOrderDateDepartAdmin" class="form-control" placeholder="Дата начала отправления">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderDateEndAdmin">Дата прибытия</label>
				<input type="date" id="editOrderDateEndAdmin" class="form-control" placeholder="Дата прибытия">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderDateEndFactAdmin">Дата прибытия по факту</label>
				<input type="date" id="editOrderDateEndFactAdmin" class="form-control" placeholder="Дата прибытия по факту">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderTotalPriceAdmin">Общая стоимость</label>
				<input type="text" id="editOrderTotalPriceAdmin" class="form-control" placeholder="Общая стоимость">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderStatusAdmin">Статус заказа</label>
				<input type="text" id="editOrderStatusAdmin" class="form-control" placeholder="Статус заказа">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderDetailsAdmin">Детали заказа</label>
				<input type="text" id="editOrderDetailsAdmin" class="form-control" placeholder="Детали заказа">
			</div>
			
			<div class="form-label-group">
				<label for="editOrderReportAdmin">Подробности</label>
				<input type="text" id="editOrderReportAdmin" class="form-control" placeholder="Подробности">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="changeOrder" class="btn btn-success">Изменить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END EDIT ORDER MODAL-->
<script>
	$('#edit_order').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
		$('input[type=date]').val('');
	});
	
	$("#changeOrder").click(function() {
		var orderID = $("#edit_order").attr("order");
		
		var email = $("#editOrderEmailAdmin").val();
		var stuff = $("#editOrderStuffAdmin").val();
		var start_adress = $("#editOrderAdressStartAdmin").val();
		var end_adress = $("#editOrderAdressEndAdmin").val();
		var start_date = $("#editOrderDateStartAdmin").val();
		var date_depart = $("#editOrderDateDepartAdmin").val();
		var end_date = $("#editOrderDateEndAdmin").val();
		var end_date_fact = $("#editOrderDateEndFactAdmin").val();
		var total_cost = $("#editOrderTotalPriceAdmin").val();
		var status = $("#editOrderStatusAdmin").val();
		var details = $("#editOrderDetailsAdmin").val();
		var report = $("#editOrderReportAdmin").val();
		
		$.ajax({
			url: "../admin_queries/change_order.php",
			type: "POST",
			data: { ordid: orderID, email: email, stuff: stuff, start_adress: start_adress, end_adress: end_adress, start_date: start_date,
					date_depart: date_depart, end_date: end_date, end_date_fact: end_date_fact, total_cost: total_cost, status: status, details: details, report: report},
			success: function(data) {
				location.reload();
			}
		});
	});
</script>