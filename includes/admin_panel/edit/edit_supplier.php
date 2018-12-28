<!--EDIT SUPPLIER MODAL-->
<div id="edit_suppliers" class="modal" tabindex="-1" role="dialog" supplier_id="">
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
				<label for="editSupplierNameAdmin">Название</label>
				<input type="text" id="editSupplierNameAdmin" class="form-control" placeholder="Название">
			</div>
	  
			<div class="form-label-group">
				<label for="editSupplierDescAdmin">Описание</label>
				<input type="text" id="editSupplierDescAdmin" class="form-control" placeholder="Описание">
			</div>
			
			<div class="form-label-group">
				<label for="editSuppliersCity">Город</label>
				<input type="text" id="editSupplierCityAdmin" class="form-control" placeholder="Город">
			</div>
			
			<div class="form-label-group">
				<label for="editSuppliersPhone">Телефон</label>
				<input type="text" id="editSupplierPhoneAdmin" class="form-control" placeholder="Телефон">
			</div>
			
			<div class="form-label-group">
				<label for="editSuppliersSuite">Сайт</label>
				<input type="text" id="editSupplierSuiteAdmin" class="form-control" placeholder="Сайт">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="changeSupplier" class="btn btn-success">Изменить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END EDIT SUPPLIER MODAL-->
<script>
	$('#edit_suppliers').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#changeSupplier").click(function() {
		var supplierID = $("#edit_suppliers").attr("supplier_id");
		
		var name = $("#editSupplierNameAdmin").val();
		var description = $("#editSupplierDescAdmin").val();
		var city = $("#editSupplierCityAdmin").val();
		var phone = $("#editSupplierPhoneAdmin").val();
		var site = $("#editSupplierSuiteAdmin").val();
		
		$.ajax({
			url: "../admin_queries/change_supplier.php",
			type: "POST",
			data: { uid: supplierID, name: name, description: description, city: city, phone: phone, site: site },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>