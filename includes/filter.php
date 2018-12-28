<form method="get" action="../search_filter.php">
	<div class="col-sm-3 col-md-3">
		<div class="panel panel-default" style="margin-top: 55px;">
				<div class="panel-heading">
					<h3 align="center" style="font-weight: bold;">Фильтрация</h3>
				</div>
				
				<div class="panel-body">
					<button type="submit" id="filterButton" class="btn btn-danger btn-block" style="margin-bottom: 10px;">
						Отфильтровать
					</button>
					<a href="../products.php" id="clearFilterButton" class="btn btn-info btn-block" style="margin-bottom: 20px;">Очистить фильтр</a>
				</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">По цене</h3>
			</div>
			<div class="panel-body">
				<header class="card-header">
					<h2 align="center">Введите цену:</h2>
				</header>
				<div class="filter-content">
					<div class="card-body">
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label>Минимум</label>
							  <input id="minPrice" name='minimal' value='<?php if(!empty($_GET['minimal'])){ echo $_GET['minimal'];} else { echo '0';} ?>' min='0' max='1000000' type="number" class="form-control" placeholder="min">
							</div>
							<div class="form-group col-md-6">
							  <label>Максимум</label>
							  <input id="maxPrice" name='maximal' min='0' max='1000000' value='<?php if(!empty($_GET['maximal'])){ echo $_GET['maximal'];} else { echo '20000';} ?>' type="number" class="form-control" placeholder="max">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">По категории</h3>
				<span id="catChevron" class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
			</div>
			<div class="panel-body collapse">
				<header class="card-header">
					<h3 align="center">Категории:</h3>
				</header>
				<div class="filter-content">
					<div class="card-body">
						<?php			
							$result = getCategories();
							while ($row = $result->fetch_assoc()) {
								$checked_cat = "";
								if($_GET["categories"]){
									echo "<script>$('.panel-heading span.clickable').parents('.panel').find('.panel-body').slideDown(); $('.panel-heading span.clickable').removeClass('panel-collapsed'); $('.panel-heading span.clickable').find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');</script>";
									if(in_array($row["id"],$_GET["categories"])){
										$checked_cat = "checked";
									}									
								}
								echo "
										<div class='custom-control custom-checkbox'>
											<input ".$checked_cat." type='checkbox' name='categories[]' value='".$row['id']."' class='custom-control-input' id='category".$row['id']."'>
											<label class='custom-control-label' for='category".$row['id']."'>".$row['name']."</label>
										</div>
									 ";
							}
						?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">По производителю</h3>
				<span class="pull-right clickable panel-collapsed"><i class="glyphicon glyphicon-chevron-down"></i></span>
			</div>
			<div class="panel-body collapse">
				<header class="card-header">
					<h3 align="center">Выберите производителя:</h3>
				</header>
				<div class="filter-content">
					<div class="card-body">
						<?php			
							$result = getSuppliers();
							while ($row = $result->fetch_assoc()) {
								$checked_sup = "";
								if($_GET["suppliers"]){
									echo "<script>$('.panel-heading span.clickable').parents('.panel').find('.panel-body').slideDown(); $('.panel-heading span.clickable').removeClass('panel-collapsed'); $('.panel-heading span.clickable').find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');</script>";
									if(in_array($row["id"],$_GET["suppliers"])){
										$checked_sup = "checked";
									}									
								}
								echo "
										<div class='custom-control custom-checkbox'>
											<input ".$checked_sup." type='checkbox' name='suppliers[]' value='".$row['id']."' class='custom-control-input' id='supplier".$row['id']."'>
											<label class='custom-control-label' for='supplier".$row['id']."'>".$row['name']."</label>
										</div>
									 ";
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<script>
	$("#clearFilterButton").click(function() {
		$("#minPrice").val('0');
		$("#maxPrice").val('20000');
		$('input[type="radio"]').prop('checked', false); 
		$('input[type="checkbox"]').prop('checked', false); 
	});
</script>