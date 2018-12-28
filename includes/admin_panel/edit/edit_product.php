<!--EDIT PRODUCT MODAL-->
<div id="edit_product" class="modal" tabindex="-1" role="dialog" prid="">
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
				<label for="editProductNameAdmin">Название</label>
				<input type="text" id="editProductNameAdmin" class="form-control" placeholder="Название" autofocus>
			</div>
	  
			<div class="form-label-group">
				<label for="editProductSupplierAdmin">Производитель</label>
				<input type="text" id="editProductSupplierAdmin" class="form-control" placeholder="Производитель">
			</div>
			
			<div class="form-label-group">
				<label for="editProductCategoryAdmin">Категория</label>
				<input type="text" id="editProductCategoryAdmin" class="form-control" placeholder="Категория">
			</div>
			
			<div class="form-label-group">
				<label for="editProductUserAddedAdmin">Добавлен пользователем</label>
				<input type="text" id="editProductUserAddedAdmin" class="form-control" placeholder="Добавлен пользователем">
			</div>
			
			<div class="form-label-group">
				<label for="editProductTaxAdmin">Налог</label>
				<input type="text" id="editProductTaxAdmin" class="form-control" placeholder="Налог">
			</div>
			
			<div class="form-label-group">
				<label for="editProductDescriptionShortAdmin">Описание сокращённое</label>
				<input type="text" id="editProductDescriptionShortAdmin" class="form-control" placeholder="Описание сокращённое">
			</div>
			
			<div class="form-label-group">
				<label for="editProductDescriptionFullAdmin">Описание полное</label>
				<input type="text" id="editProductDescriptionFullAdmin" class="form-control" placeholder="Описание полное">
			</div>
			
			<div class="form-label-group">
				<label for="editProductCityAdmin">Город</label>
				<input type="text" id="editProductCityAdmin" class="form-control" placeholder="Город">
			</div>
			
			<div class="form-label-group">
				<label for="editProductPriceAdmin">Цена</label>
				<input type="text" id="editProductPriceAdmin" class="form-control" placeholder="Цена">
			</div>
			
			<div class="form-label-group">
				<label for="editProductPriceDiscountAdmin">Цена по скидке</label>
				<input type="text" id="editProductPriceDiscountAdmin" class="form-control" placeholder="Скидочная цена">
			</div>
			
			<div class="form-label-group">
				<label for="editProductDateAdmin">Дата добавления</label>
				<input type="date" id="editProductDateAdmin" class="form-control" placeholder="Дата добавления">
			</div>
			
			<div class="form-label-group">
				<label for="editProductReqAdmin">Остаток</label>
				<input type="text" id="editProductReqAdmin" class="form-control" placeholder="Остаток">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="changeProduct" class="btn btn-success">Изменить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END EDIT PRODUCT MODAL-->
<script>
	$('#edit_product').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
		$('input[type=date]').val('');
	});
	
	$("#changeProduct").click(function() {
		var prid = $("#edit_product").attr("prid");
		
		var name = $("#editProductNameAdmin").val();
		var supplier = $("#editProductSupplierAdmin").val();
		var category = $("#editProductCategoryAdmin").val();
		var adder = $("#editProductUserAddedAdmin").val();
		var tax = $("#editProductTaxAdmin").val();
		var description_short = $("#editProductDescriptionShortAdmin").val();
		var description_full = $("#editProductDescriptionFullAdmin").val();
		var city = $("#editProductCityAdmin").val();
		var price = $("#editProductPriceAdmin").val();
		var discount_price = $("#editProductPriceDiscountAdmin").val();
		var added_date = $("#editProductDateAdmin").val();
		var balance = $("#editProductReqAdmin").val();
		
		$.ajax({
			url: "../admin_queries/change_product.php",
			type: "POST",
			data: { prid: prid, name: name, supplier: supplier,
					category: category, adder: adder, tax: tax, description_short: description_short, description_full: description_full, city: city, price: price,
					discount_price: discount_price, added_date: added_date, balance: balance
			},
			success: function(data) {
				location.reload();
			}
		});
	});
</script>