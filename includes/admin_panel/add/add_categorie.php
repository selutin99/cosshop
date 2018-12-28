<!--ADD SUPPLIER MODAL-->
<div id="add_categorie" class="modal" tabindex="-1" role="dialog">
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
				<label for="addCategoriesName">Наименование категории</label>
				<input type="text" id="addCategoriesName" class="form-control" placeholder="Название" autofocus>
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="addCategorie" class="btn btn-success">Добавить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END ADD SUPPLIER MODAL-->
<script>
	$('#add_categorie').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#addCategorie").click(function() {
		var name = $("#addCategoriesName").val();
		
		$.ajax({
			url: "../admin_queries/add_categorie.php",
			type: "POST",
			data: { name: name },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>