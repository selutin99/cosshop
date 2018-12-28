<!--ACCEPT DISCOUNT MODAL-->
<div id="discount_add" class="modal" tabindex="-1" role="dialog" prid="" cost="">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				
				<div class="row">
					<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
					<h2 class="modal-title">Подтверждение</h2>
				</div>
			</div>
	  <div class="modal-body">
		<p>Подтвердите добавление на скидку.</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" id="acceptNewDiscount" class="btn btn-success">Подтвердить</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
	  </div>
	</div>
  </div>
</div>
<!--END ACCEPT DISCOUNT MODAL-->
<script>
	$("#acceptNewDiscount").click(function() {
		var productID = $("#discount_add").attr("prid");
		var costValue = $("#discount_add").attr("cost");
		
		$.ajax({
			url: "../admin_queries/accept_discount.php",
			type: "POST",
			data: { prid: productID, costVal: costValue },
			success: function(data) {
				location.reload();
			}
		});
	});
</script>