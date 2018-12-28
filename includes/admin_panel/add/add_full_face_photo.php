<!--ADD SUPPLIER MODAL-->
<div id="edit_full_face_photo" class="modal" tabindex="-1" role="dialog" prid="" photos="">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
		<form class="form-signin">	
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
			
			<div class="row">
				<img src="images/logo/logo.svg" style="height: 40px; float: left; margin-right: 10px;"/>
				<h2 class="modal-title">Изменение</h2>
			</div>
		  </div>
		  <div class="modal-body">
				
				<div class="form-label-group">
					<label for="editProductPhoto1Admin">Фото #1</label>
					<input id="editProductPhoto1Admin" name="imageFull" class="form-control here" type="file" accept="image/*">
				</div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" id="addFullFacePhoto" class="btn btn-success">Изменить</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
		  </div>
		</form>
	</div>
  </div>
</div>
<!--END ADD SUPPLIER MODAL-->
<script>
	$('#addFullFacePhoto').on('click', function() {
		var file_data = $('#editProductPhoto1Admin').prop('files')[0];
		var form_data = new FormData();
		form_data.append('file', file_data);
		form_data.append('photos', $("#edit_full_face_photo").attr("photos"));
		$.ajax({
			url: '../admin_queries/update_full_photo.php',
			dataType: 'text',
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,
			type: 'post',
			success: function(php_script_response){
				location.reload();
			}
		 });
	});
</script>