<!--DELETE CATEGORIES MODAL-->
<div id="delete_category" class="modal" tabindex="-1" role="dialog" cat="">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Удаление</h2>
				</div>
			</div>
	  <div class="modal-body">
		<p>Подтвердите удаление категории.</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="deleteCategorie" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END DELETE CATEGORIES MODAL-->
<script>
	$("#deleteCategorie").click(function() {
		var catID = $("#delete_category").attr("cat");
		
		$.ajax({
			url: "../admin_queries/delete_categorie.php",
			type: "POST",
			data: { cat: catID },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>