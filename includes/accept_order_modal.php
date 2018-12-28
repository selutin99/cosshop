<!-- Accept order modal -->
<div class="modal fade" id="acceptOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		
		<div class="row">
			<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
			<h2 class="modal-title">Оформление заказа</h2>
		</div>
	  </div>
	  <div class="modal-body">
		<h4>Выберите доставку</h4>
		<div class="filter-content">
			<div class="card-body">
				<?php			
					$i = 0;
					$result = getDeliveries();
					while ($row = $result->fetch_assoc()) {
						echo "
								<div class='radio'>
								  <label><input type='radio' id='".$row['id']."' cost=".$row['cost_of_service']." startAdress='".$row['start_adress']."' name='deliveries' "; if($i==0){echo "checked";} echo">".$row['name']."</label>
								</div>
							 ";
						$i++;
					}
				?>
			</div>
		</div>
		<div class="filter-content" style="margin-top: 10px;">
			<div class="card-body">
				<label for="start_adress" class="col-4 col-form-label">Адрес поступления</label> 
				<div class="col-8">
				  <input id="start_adress" name="start_adress_order" placeholder="Начальный адрес" class="form-control here" type="text" disabled value="">
				</div>
			</div>
		</div>
		<div class="filter-content" style="margin-top: 10px;">
			<div class="card-body">
				<label for="end_adress" class="col-4 col-form-label">Адрес выдачи</label> 
				<div class="col-8">
				  <input id="end_adress" name="end_adress_order" placeholder="Введите адрес для получения заказа" class="form-control here" type="text" value="<?php $user = getUserProfile($_SESSION['userID']); if(!empty($user['adress'])){ echo $user['adress']; } ?>" required>
				</div>
			</div>
		</div>
		<div class="filter-content" style="margin-top: 10px;">
			<h3 style="display: inline">Всего: </h3>
			<h3 style="display: inline" id="totalPrice"></h3>
			<h3 style="display: inline"> р.</h3>
		</div>
	  </div>
	  <div class="modal-footer">
		<button id="makeOrder" type="button" class="btn btn-success">Оформить</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
	  </div>
	</div>
  </div>
</div>
<!-- End accept order modal -->

<script>
	$( document ).ready(function() {
		var radioValue = $("input[name='deliveries']:checked").attr("startAdress");
		var num = $("input[name='deliveries']:checked").attr("cost");
		var total = $("#ordered").attr("total");
		
		$("#start_adress").attr("value", radioValue);
		$("#totalPrice").text(Number(Number(num)+Number(total)));
	});
	
	$(".radio").click(function() {
		var radioValue = $("input[name='deliveries']:checked").attr("startAdress");
		
		var num = $("input[name='deliveries']:checked").attr("cost");
		var total = $("#ordered").attr("total");
		
		$("#start_adress").attr("value", radioValue);
		$("#totalPrice").text(Number(Number(num)+Number(total)));
	});
	
	$("#makeOrder").click(function() {
	   if( $("#end_adress").val().length > 0 ){
		   var deliveryID = $("input[name='deliveries']:checked").attr("id");
		   var startAdress = $("#start_adress").attr("value");
		   var endAdress = $("#end_adress").val();
		   var totalPrice = $("#totalPrice").text();
		   
		   $.ajax({
				url: "includes/makeOrder.php",
				type: "POST",
				data: { delID: deliveryID, stAD: startAdress, enAD: endAdress, total: totalPrice },
				success: function(data) {
					$('#acceptOrderModal').modal('hide');
					$('#successOrderModal').modal({backdrop: 'static', keyboard: false});
				}
			});
		}
		else{
			$("#end_adress").val("Заполните поле");
		}
	});
</script>