<!--EDIT CATEGORIES MODAL-->
<div id="edit_categories" class="modal" tabindex="-1" role="dialog" cat="">
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
				<label for="editCategoriesNameAdmin">Название</label>
				<input type="text" id="editCategoriesNameAdmin" class="form-control" placeholder="Название" autofocus>
			</div>
		</form>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="changeCategorie" class="btn btn-success">Изменить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END EDIT CATEGORIES MODAL-->
<script>
	$('#edit_categories').on('hidden.bs.modal', function (e) {
		$('input[type=text]').val('');
	});
	
	$("#changeCategorie").click(function() {
		var categorieID = $("#edit_categories").attr("cat");
		var name = $("#editCategoriesNameAdmin").val();
		
		$.ajax({
			url: "../admin_queries/change_categorie.php",
			type: "POST",
			data: { catID: categorieID, name: name },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>