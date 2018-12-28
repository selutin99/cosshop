<!--ADD SUPPLIER MODAL-->
<div id="add_tax" class="modal" tabindex="-1" role="dialog" tax_id="">
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
				<label for="addTaxNumber">Номер</label>
				<input type="text" id="addTaxNumber" class="form-control" placeholder="Название">
			</div>
	  
			<div class="form-label-group">
				<label for="addTaxDesc">Описание</label>
				<input type="text" id="addTaxDesc" class="form-control" placeholder="Описание">
			</div>
			
			<div class="form-label-group">
				<label for="addTaxCity">Страна</label>
				<input type="text" id="addTaxCity" class="form-control" placeholder="Страна">
			</div>
			
			<div class="form-label-group">
				<label for="addTaxCost">Стоимость</label>
				<input type="text" id="addTaxCost" class="form-control" placeholder="Стоимость">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="addTax" class="btn btn-success">Добавить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END ADD SUPPLIER MODAL-->
<script>
	$('#add_tax').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#addTax").click(function() {
		var number = $("#addTaxNumber").val();
		var description = $("#addTaxDesc").val();
		var city = $("#addTaxCity").val();
		var cost = $("#addTaxCost").val();
		
		$.ajax({
			url: "../admin_queries/add_tax.php",
			type: "POST",
			data: { number: number, description: description, city: city, cost: cost },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>