<!--ADD PRODUCT MODAL-->
<div id="add_product" class="modal" tabindex="-1" role="dialog">
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
				<label for="addProductNameAdmin">Название</label>
				<input type="text" id="addProductNameAdmin" class="form-control" placeholder="Название" autofocus>
			</div>
	  
			<div class="form-label-group">
				<label for="addProductSupplierAdmin">Производитель</label>
				<input type="text" id="addProductSupplierAdmin" class="form-control" placeholder="Производитель">
			</div>
			
			<div class="form-label-group">
				<label for="addProductCategoryAdmin">Категория</label>
				<input type="text" id="addProductCategoryAdmin" class="form-control" placeholder="Категория">
			</div>
			
			<div class="form-label-group">
				<label for="addProductUserAddedAdmin">Добавлен пользователем</label>
				<input type="text" id="addProductUserAddedAdmin" class="form-control" placeholder="Добавлен пользователем">
			</div>
			
			<div class="form-label-group">
				<label for="addProductTaxAdmin">Налог</label>
				<input type="text" id="addProductTaxAdmin" class="form-control" placeholder="Налог">
			</div>
			
			<div class="form-label-group">
				<label for="addProductDescriptionShortAdmin">Описание сокращённое</label>
				<input type="text" id="addProductDescriptionShortAdmin" class="form-control" placeholder="Описание сокращённое">
			</div>
			
			<div class="form-label-group">
				<label for="addProductDescriptionFullAdmin">Описание полное</label>
				<input type="text" id="addProductDescriptionFullAdmin" class="form-control" placeholder="Описание полное">
			</div>
			
			<div class="form-label-group">
				<label for="addProductCityAdmin">Город</label>
				<input type="text" id="addProductCityAdmin" class="form-control" placeholder="Город">
			</div>
			
			<div class="form-label-group">
				<label for="addProductPriceAdmin">Цена</label>
				<input type="text" id="addProductPriceAdmin" class="form-control" placeholder="Цена">
			</div>
			
			<div class="form-label-group">
				<label for="addProductPriceDiscountAdmin">Цена по скидке</label>
				<input type="text" id="addProductPriceDiscountAdmin" class="form-control" placeholder="Скидочная цена">
			</div>
			
			<div class="form-label-group">
				<label for="addProductDateAdmin">Дата добавления</label>
				<input type="date" id="addProductDateAdmin" class="form-control" placeholder="Дата добавления">
			</div>
			
			<div class="form-label-group">
				<label for="addProductReqAdmin">Остаток</label>
				<input type="text" id="addProductReqAdmin" class="form-control" placeholder="Остаток">
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="addProduct" class="btn btn-success">Добавить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END ADD PRODUCT MODAL-->
<script>
	$('#add_product').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#addProduct").click(function() {
		
		var name = $("#addProductNameAdmin").val();
		var supplier = $("#addProductSupplierAdmin").val();
		var category = $("#addProductCategoryAdmin").val();
		var adder = $("#addProductUserAddedAdmin").val();
		var tax = $("#addProductTaxAdmin").val();
		var description_short = $("#addProductDescriptionShortAdmin").val();
		var description_full = $("#addProductDescriptionFullAdmin").val();
		var city = $("#addProductCityAdmin").val();
		var price = $("#addProductPriceAdmin").val();
		var discount_price = $("#addProductPriceDiscountAdmin").val();
		var added_date = $("#addProductDateAdmin").val();
		var balance = $("#addProductReqAdmin").val();
		
		$.ajax({
			url: "../admin_queries/add_product.php",
			type: "POST",
			data: { name: name, supplier: supplier, category: category, adder: adder, tax: tax, description_short: description_short, description_full: description_full, 
					city: city, price: price, discount_price: discount_price, added_date: added_date, balance: balance },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>