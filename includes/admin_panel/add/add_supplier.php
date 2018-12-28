<!--ADD SUPPLIER MODAL-->
<div id="add_suppliers" class="modal" tabindex="-1" role="dialog">
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
				<label for="addSuppliersName">Название</label>
				<input type="text" id="addSuppliersName" class="form-control" placeholder="Название" autofocus>
			</div>
	  
			<div class="form-label-group">
				<label for="addSuppliersDesc">Описание</label>
				<input type="text" id="addSuppliersDesc" class="form-control" placeholder="Описание">
			</div>
			
			<div class="form-label-group">
				<label for="addSuppliersCity">Город</label>
				<input type="text" id="addSuppliersCity" class="form-control" placeholder="Город">
			</div>
			
			<div class="form-label-group">
				<label for="addSuppliersPhone">Телефон</label>
				<input type="phone" id="addSuppliersPhone" class="form-control" placeholder="Телефон">
			</div>
			
			<div class="form-label-group">
				<label for="addSuppliersSuite">Сайт</label>
				<input type="text" id="addSuppliersSuite" class="form-control" placeholder="Сайт">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="addSupplier" class="btn btn-success">Добавить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END ADD SUPPLIER MODAL-->
<script>
	$('#add_suppliers').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#addSupplier").click(function() {
		var name = $("#addSuppliersName").val();
		var description = $("#addSuppliersDesc").val();
		var city = $("#addSuppliersCity").val();
		var phone = $("#addSuppliersPhone").val();
		var site = $("#addSuppliersSuite").val();
		
		$.ajax({
			url: "../admin_queries/add_supplier.php",
			type: "POST",
			data: { name: name, description: description, city: city, phone: phone, site: site },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>