<?php
	function insertToWishList(){
		if(isset($_SESSION['wishlist'])){
			$_SESSION['wishlist'][] = $_GET['id'];
		}
		else{
			$_SESSION['wishlist'] = array();
			$_SESSION['wishlist'][] = $_GET['id'];
		}
	}
?>
<!-- Wishlist modal -->
<div class="modal fade" id="wishlistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
		
		<div class="row">
			<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
			<h2 class="modal-title">Добавление товара</h2>
		</div>
	  </div>
	  <div class="modal-body">
		<h3>Товар успешно добавлен в избранное</h3>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-success" data-dismiss="modal" onclick="javascript:window.location.href='wishlist.php'">К избранным товарам</button>
		<button type="button" class="btn btn-primary" data-dismiss="modal">Отлично</button>
	  </div>
	</div>
  </div>
</div>
<!-- End wishlist modal -->