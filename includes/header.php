<?php	
	session_start();

	include 'connection.php';
	include 'functions/queries.php';
	
	/********403**********/
	if( $page=='profile' && $_SESSION['auth']!=='yes' ){
		echo "<script>document.location.href =\"../403.php\"</script>";
	}
	else if( $page=='admin_panel' && $_SESSION['auth']!=='yes' && $_SESSION['access']<'2' ){
		echo "<script>document.location.href =\"../403.php\"</script>";
	}
	else if( $page=='manager_panel' && $_SESSION['auth']!=='yes' && $_SESSION['access']<'1' ){
		echo "<script>document.location.href =\"../403.php\"</script>";
	}
	else if( $page=='shopping_cart' && $_SESSION['auth']!=='yes'){
		echo "<script>document.location.href =\"../403.php\"</script>";
	}
	/*****END 403**********/
?>
<!DOCTYPE html>
<html>
    <head>

        <title><?php echo $title;?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="shortcut icon" type="image/png" href="images/logo/favicon.png"/>		
		
		<!--SLIDER LIBRARY--> 
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<!--END SLIDER LIBRARY-->
		
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		
        <link rel="stylesheet" href="css/bootstrap.min.css">	
		<link rel="stylesheet" href="css/main.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		
    </head>
    <body>
		<!--HEADER-->
		<header>
			<nav id="navigation_bar" class="navbar navbar-inverse navbar-static-top">
				<div class="container-fluid">
					<!--LOGO-->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"><img src="images/logo/logo.svg" style="height: 40px; display: inline-block; margin-top: -15px;" alt="COSshop">
						COSshop
						</a>
					</div>
					<!--END LOGO-->
				
					<ul class="nav navbar-nav">
						<li class="<?php if($page=='index'){echo 'active';}?>"><a href="index.php">Главная</a></li>
						<li class="<?php if($page=='about'){echo 'active';}?>"><a href="about.php">О нас</a></li>
						<li class="<?php if($page=='contacts'){echo 'active';}?>"><a href="contacts.php">Контакты</a></li>
						
						<li class="dropdown <?php if($page=='products' || $page=='single'){echo 'active';}?>">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
								Товары
								<span class="caret"></span>
							</a>
						    <ul class="dropdown-menu">
								<li><a href="products.php">Все товары</a></li>
								
								<li class="dropdown-header">Добавленные товары</li>
								<li class="rel"><a href="<?php if($_SESSION['auth']=='yes' || isset($_COOKIE['user'])){echo "shopping_cart.php";} else {echo "\"data-toggle='modal' data-target=\"#loginModal";}?>">Корзина</a></li>
								<li><a href="wishlist.php">Избранные товары</a></li>
								
								<li class="dropdown-header">Категории</li>
								<?php			
									$result = getCategories();
									while ($row = $result->fetch_assoc()) {
										echo "<li><a href='../search.php?cat=".$row['id']."'>".$row['name']."</a></li>";
									}
								?>
							</ul>
						</li>
					</ul>
					
					<?php 
						if($_SESSION['auth']=='yes' && $_SESSION['access']=='0' || isset($_COOKIE['user'])){
							echo "<ul class='nav navbar-nav navbar-right'>";
							if($page=='profile'){
								echo "<li class='active'><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Мой профиль</a></li>";
							}
							else{
								echo "<li><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Мой профиль</a></li>";
							}
							echo"<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Выход</a></li></ul>";
						}
						else if($_SESSION['auth']=='yes' && $_SESSION['access']=='1' || isset($_COOKIE['user'])){
							echo "<ul class='nav navbar-nav navbar-right'>";
							if($page=='profile'){
								echo "<li class='active'><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Мой профиль</a></li>";
							}
							else{
								echo "<li><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Мой профиль</a></li>";
							}
							echo "<li class='";if($page=='manager_panel'){echo "active";} echo"'><a href=\"manager_panel.php\"><span class=\"glyphicon glyphicon-wrench\"></span> Управление</a></li>";
							echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Выход</a></li></ul>";
						}
						else if($_SESSION['auth']=='yes' && $_SESSION['access']=='2' || isset($_COOKIE['user'])){
							echo "<ul class='nav navbar-nav navbar-right'>";
							if($page=='profile'){
								echo "<li class='active'><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Мой профиль</a></li>";
							}
							else{
								echo "<li><a href='profile.php'><span class='glyphicon glyphicon-user'></span> Мой профиль</a></li>";
							}
							echo "<li class='";if($page=='admin_panel'){echo "active";} echo"'><a href=\"admin_panel.php\"><span class=\"glyphicon glyphicon-wrench\"></span> Администрирование</a></li>";
							echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Выход</a></li></ul>";
						}
						else{
							echo "<ul class='nav navbar-nav navbar-right'>
										<li><a href='#' class='rel' data-toggle='modal' data-target='#registerModal' id='registraion'><span class='glyphicon glyphicon-user'></span> Регистрация</a></li>
										<li><a href='#' class='rel' data-toggle='modal' data-target='#loginModal' id='login'><span class='glyphicon glyphicon-log-in'></span> Вход</a></li>
								  </ul>";
						}
					?>
					
					
					<!--SEARCH-->
					<div class="containter">
						<form class="navbar-form navbar-right" method="get" action="../search.php?q=">
							<div class="input-group">
								
								<input type="text" name="q" id="input-search" placeholder="Поиск" value="" class="form-control" autocomplete="off">
								
								<script>
									$(document).ready(function () {
										$('#input-search').keyup(function () { 
											var input_search = $('#input-search').val();
											
											if($(window).width() < 767) {
												$("#result-search").hide();
												return;
											}
											
											if(input_search.length>1 && input_search.length<150){
											
												$.ajax({
													type: "POST",
													url: "includes/live_search.php",
													data: "text="+input_search,
													dataType: "html",
													cache: false,
													success: function(data){
														if(data>''){
															$("#result-search").show().html(data);
														}
														else{
															$("#result-search").hide();
														}
													}
												});
												
											}
											else{
												$("#result-search").hide();
											}
										});
									});
								</script>
								
								<div class="input-group-btn">
									<button id="button-search" class="btn btn-default" type="submit">
										<i class="glyphicon glyphicon-search"></i>
									</button>
								</div>
							</div>	
													
						</form>
						
					</div>
					<!--END SEARCH-->
					
			    </div>
			</nav>
		</header>
		<!-- END HEADER-->
		<ul id="result-search" class="list-group navbar-right">
														
		</ul>
<?php
	include 'includes/login.php';
	include 'includes/register.php';
	include 'includes/forgot_password.php';
	
	include 'includes/wish_list_modal.php';
	if($_SESSION['auth']=='yes'  || isset($_COOKIE['user'])){
		include 'includes/shopping_cart_modal.php';
		include 'includes/accept_order_modal.php';
		include 'includes/successOrdered.php';
	}
?>

<style>
	#result-search{
		position: absolute;
		margin-top: -30px;
		z-index: 999;
	}
	#navigation_bar{
		z-index: 1;
	}
</style>
<script>
	$(document).ready(function () {
		var input = $( "#input-search" );
		var width = $( "#input-search" ).width();
		
		var offset = input.offset();
		$("#result-search").css({left: offset.left});
	});
</script>