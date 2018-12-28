<!--EDIT SUPPLIER MODAL-->
<div id="edit_tax" class="modal" tabindex="-1" role="dialog" tax_id="">
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
				<label for="editTaxNumber">Номер</label>
				<input type="text" id="editTaxNumber" class="form-control" placeholder="Название">
			</div>
	  
			<div class="form-label-group">
				<label for="editTaxDesc">Описание</label>
				<input type="text" id="editTaxDesc" class="form-control" placeholder="Описание">
			</div>
			
			<div class="form-label-group">
				<label for="editTaxCity">Страна</label>
				<input type="text" id="editTaxCity" class="form-control" placeholder="Страна">
			</div>
			
			<div class="form-label-group">
				<label for="editTaxCost">Стоимость</label>
				<input type="text" id="editTaxCost" class="form-control" placeholder="Стоимость">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="changeTax" class="btn btn-success">Изменить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END EDIT SUPPLIER MODAL-->
<script>
	$('#edit_tax').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#changeTax").click(function() {
		var taxID = $("#edit_tax").attr("tax_id");
		
		var number = $("#editTaxNumber").val();
		var description = $("#editTaxDesc").val();
		var city = $("#editTaxCity").val();
		var cost = $("#editTaxCost").val();
		
		$.ajax({
			url: "../admin_queries/change_tax.php",
			type: "POST",
			data: { taxID: taxID, number: number, description: description, city: city, cost: cost },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>