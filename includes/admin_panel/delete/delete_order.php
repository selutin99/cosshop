<!--DELETE ORDER MODAL-->
<div id="delete_order" class="modal" tabindex="-1" role="dialog" order="">
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
		<p>Подтвердите удаление заказа.</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="deleteCurrentOrder" class="btn btn-danger" style="margin-top: 10px;">Удалить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END DELETE ORDER MODAL-->
<script>
	$("#deleteCurrentOrder").click(function() {
		var ordID = $("#delete_order").attr("order");
		$.ajax({
			url: "../admin_queries/delete_order.php",
			type: "POST",
			data: { orderID: ordID },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>