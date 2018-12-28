<!--DELETE DISCOUNT MODAL-->
<div id="discount_delete" class="modal" tabindex="-1" role="dialog" prid="">
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
		<p>Подтвердите отмену скидки.</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="deleteDiscount" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END DELETE DISCOUNT MODAL-->
<script>
	$("#deleteDiscount").click(function() {
		var productID = $("#discount_delete").attr("prid");
		
		$.ajax({
			url: "../admin_queries/delete_discount.php",
			type: "POST",
			data: { did: productID },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>