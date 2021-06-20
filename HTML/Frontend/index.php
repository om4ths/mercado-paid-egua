﻿<?php
include('php/verificar_login.php');
include('php/func.php');
include('php/exibe_categoria_index.php');
include('php/exibe_produtos_index.php');
require_once "php/functions/product.php";
require_once "php/functions/cart.php";
require_once "php/Carrinho.php";
$pdoConnection = require_once "php/connection.php";
?>

<!DOCTYPE html>
<html lang="pt_BR">
	<?php
	include('php/dados_cliente.php');
	?>
	<head>
		<meta charset=" utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	<meta name="description" content="Gambolthemes">
	<meta name="author" content="Gambolthemes">
	<title>Mercado Pai D'égua - Início </title>

	<!--  Icones -->
	<link rel="icon" type="image/png" href="images/logo-1.png">

	<!-- Stylesheets -->
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/night-mode.css" rel="stylesheet">

	<!-- CSS -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">


</head>

<body>

	<!-- modelo das categorias-->
	<div id="category_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
		<div class="modal-dialog category-area" role="document">
			<div class="category-area-inner">
				<div class="modal-header">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<i class="uil uil-multiply"></i>
					</button>
				</div>
				<div class="category-model-content modal-content">
					<div class="cate-header">
						<h4>Selecionar Categoria </h4>
					</div>
					<ul class="category-by-cat">
					<?php
						if(isset($r_categoria))
						{	
							foreach($r_categoria as $key => $r_cat)
							{	
					
					?>
						<li>
							<?php echo "<a href='shop_grid.php?c_id=".$r_cat['cat_id']."' class='single-cat-item'>" ?>
								<div class="icon">
									<?php echo "<img src=' ".limpa_link($r_cat['cat_img'])." ' alt='erro ao Carregar a imagem'>" ?>
								</div>
								<?php echo "<div class='text'>".$r_cat['cat_nome']."</div>" ?>
							</a>
						</li>
					
					<?php }}	?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Categoria fim-->
	<!-- pesquisar produtos inicio-->
	<div id="search_model" class="header-cate-model main-gambo-model modal fade" tabindex="-1" role="dialog" aria-modal="false">
		<div class="modal-dialog search-ground-area" role="document">
			<div class="category-area-inner">
				<div class="modal-header">
					<button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
						<i class="uil uil-multiply"></i>
					</button>
				</div>
				<div class="category-model-content modal-content">
					<div class="search-header">
						<form action="#">
							<input type="search" placeholder="Search for products...">
							<button type="submit"><i class="uil uil-search"></i></button>
						</form>
					</div>
					<div class="search-by-cat">
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-1.svg" alt="">
							</div>
							<div class="text">
								Frutas e Vegetais
							</div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-2.svg" alt="">
							</div>
							<div class="text"> Alimentos Básicos </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-3.svg" alt="">
							</div>
							<div class="text"> Ovos e Laticínios </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-4.svg" alt="">
							</div>
							<div class="text"> Bebidas </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-5.svg" alt="">
							</div>
							<div class="text"> Lanches </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-6.svg" alt="">
							</div>
							<div class="text"> Limpeza </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-7.svg" alt="">
							</div>
							<div class="text"> Macarrão e molhos </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-8.svg" alt="">
							</div>
							<div class="text"> Higiene </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-9.svg" alt="">
							</div>
							<div class="text"> Pets </div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- pesquisar produtos fim-->
	<!-- Carrinho sidebar inicio-->
	<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
		<div class="bs-canvas-header side-cart-header p-3 ">
			<div class="d-inline-block  main-cart-title">Meu Carrinho <span>(2 Itens)</span></div>
			<button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
		</div>
		<div class="bs-canvas-body">
			<div class="cart-top-total">
				<div class="cart-total-dil">
					<h4>Mercado Pai D'égua</h4>
					<span>R$34</span>
				</div>
				<div class="cart-total-dil pt-2">
					<h4>Taxas de entrega</h4>
					<span>R$1</span>
				</div>
			</div>
	
			<div class="side-cart-items">
				<div class="cart-item">
					<div class="cart-product-img">
						<img src="images/product/img-1.jpg" alt="">
						<div class="offer-badge">6% OFF</div>
					</div>
		<?php if($resultsCarts) : ?>
			<!--<form action="carrinho.php?acao=up" method="post"> -->
		<?php foreach($resultsCarts as $result) : ?>
					<div class="cart-text">
						<h4><?php echo $result['name']?></h4>
						<div class="cart-radio">							
						</div>
						<div class="qty-group">
							<div class="quantity buttons_added">
								<input type="button" value="-" class="minus minus-btn">
								<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
								<input type="button" value="+" class="plus plus-btn">
							</div>
							<div class="cart-item-price">$10 <span>$15</span></div>
						</div>

						<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
					</div>
				</div>
				<div class="cart-item">
					<div class="cart-product-img">
						<img src="images/product/img-2.jpg" alt="">
						<div class="offer-badge">6% OFF</div>
					</div>
					<?php endforeach;?>
					<?php endif?>					
				</div>
			</div>
		</div>
		<div class="bs-canvas-footer">
			<div class="cart-total-dil saving-total ">
				<h4>Total Economizado</h4>
				<span>R$11</span>
			</div>
			<div class="main-total-cart">
				<h2>Total</h2>
				<span>R$35</span>
			</div>
			<div class="checkout-cart">
				<a href="checkout.php" class="cart-checkout-btn hover-btn">Finalizar</a>
			</div>
		</div>
	</div>

	<!-- Carrnho sidebar fim-->
	<!-- Header Start -->
	<header class="header clearfix">
		<div class="top-header-group">
			<div class="top-header">
				<div class="res_main_logo">
					<a href="index.php"><img src="images/logo-1.png" alt=""></a>
				</div>
				<div class="main_logo" id="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
					<a href="indexphp"><img class="logo-inverse" src="images/dark-logo.png" alt=""></a>
				</div>
				<div class="select_location">
					<div class="ui inline dropdown loc-title">
						<div class="text">
							<i class="uil uil-location-point"></i>
							Castanhal
						</div>
					</div>
				</div>
				<div class="search120">
				<form method="GET" action="shop_grid.php" enctype="multipart/form-data">
					<div class="ui search">
						<div class="ui left icon input swdh10">
							<input class="prompt srch10" type="search" name='pesquisar' placeholder="Pesquisar produtos ..">
							<i class='uil uil-search-alt icon icon1'></i>
							<input type="submit" class="pesquisar_prod" style="display:none">
						</div>
					</div>
					</form> 
				</div>
				<div class="header_right">
					<ul>
						<li>
							<a href="#" class="offer-link"><i class="uil uil-phone-alt"></i>(91) 9 8283-2055</a>
						</li>
						<li>
							<a href="faq.php" class="offer-link"><i class="uil uil-question-circle"></i>Ajuda</a>
						</li>
						<li class="ui dropdown">
							<a href="#" class="opts_account">
							
								<?php 
								if(isset($resultado['foto'])){
									echo "<img src=' ".$resultado['foto']." ' alt=''>";									
								}else{
									echo "<img src='images/avatar/img-5.jpg' alt=''>";
								};	 							 								
								?>
								<span class="user__name"><?php echo $resultado['nome'] ?></span>
								<i class="uil uil-angle-down"></i>
							</a>
							<div class="menu dropdown_account">
								<div class="night_mode_switch__btn">
									<a href="#" id="night-mode" class="btn-night-mode">
										<i class="uil uil-moon"></i> Modo noturno
										<span class="btn-night-mode-switch">
											<span class="uk-switch-button"></span>
										</span>
									</a>
								</div>
								<a href="dashboard_overview.php" class="item channel_item"><i class="uil uil-apps icon__1"></i>Perfil</a>
								<a href="dashboard_my_orders.php" class="item channel_item"><i class="uil uil-box icon__1"></i>Ordens de compra</a>
								<a href="dashboard_my_addresses.php" class="item channel_item"><i class="uil uil-location-point icon__1"></i>Endereço</a>
								<a href="faq.php" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Perguntas frequentes</a>
								<a href="/mercado-paid-egua/HTML/frontend/php/logout.php" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Sair</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="sub-header-group">
			<div class="sub-header">
				<div class="ui dropdown">
					<a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Selecionar Categoria</span></a>
				</div>
				<nav class="navbar navbar-expand-lg navbar-light py-3">
					<div class="container-fluid">
						<button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
						<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
							<ul class="navbar-nav main_nav align-self-stretch">
								<li class="nav-item"><a href="index.php" class="nav-link active" title="Home">Início</a></li>
								<li class="nav-item"><a href="shop_grid.php?new_id=1" class="nav-link new_item" title="New Products">Novos Produtos</a></li>
								<li class="nav-item"><a href="shop_grid.php?destaque=2" class="nav-link" title="Featured Products">Produtos em Destaques</a></li>
								<li class="nav-item">
									<div class="ui icon top left dropdown nav__menu">
										<a class="nav-link" title="Pages">Mais <i class="uil uil-angle-down"></i></a>
										<div class="menu dropdown_page">
											<a href="dashboard_overview.php" class="item channel_item page__links">Conta</a>
											<a href="about_us.php" class="item channel_item page__links">Sobre nós</a>
											<a href="checkout.php" class="item channel_item page__links">Finalizar Pedido</a>
											<a href="order_placed.php" class="item channel_item page__links">Pedidos Finalizados</a>
										</div>
									</div>
								</li>
								<li class="nav-item"><a href="contact_us.php" class="nav-link" title="Contact">Fale conosco</a></li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="catey__icon">
					<a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
				</div>
				<div class="header_cart order-1">
					<a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Carrinho</span><ins>2</ins><i class="uil uil-angle-down"></i></a>
				</div>
				<div class="search__icon order-1">
					<a href="#" class="search__btn hover-btn" data-toggle="modal" data-target="#search_model" title="Search"><i class="uil uil-search"></i></a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->
	<!-- Body Start -->
	<div class="wrapper">
		<!-- Offers Start -->
		<div class="main-banner-slider">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel offers-banner owl-theme">
							<div class="item">
								<div class="offer-item">
									<div class="offer-item-img">
										<div class="gambo-overlay"></div>
										<img src="images/banners/offer-1.jpg" alt="">
									</div>
									<div class="offer-text-dt">
										<div class="offer-top-text-banner">
											<p>6% Off</p>
											<div class="top-text-1">Compre mais e Economize mais</div>
											<span>Vegetais frescos</span>
										</div>
										<a href="#" class="Offer-shop-btn hover-btn">Compre agora</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="offer-item">
									<div class="offer-item-img">
										<div class="gambo-overlay"></div>
										<img src="images/banners/offer-2.jpg" alt="">
									</div>
									<div class="offer-text-dt">
										<div class="offer-top-text-banner">
											<p>5% Off</p>
											<div class="top-text-1">Compre mais e Economize mais</div>
											<span>Frutas frescas</span>
										</div>
										<a href="#" class="Offer-shop-btn hover-btn">Compre agora</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="offer-item">
									<div class="offer-item-img">
										<div class="gambo-overlay"></div>
										<img src="images/banners/offer-3.jpg" alt="">
									</div>
									<div class="offer-text-dt">
										<div class="offer-top-text-banner">
											<p>3% Off</p>
											<div class="top-text-1">Boas Ofertas de Novos Produtos</div>
											<span>Ofertas de Ovos e Laticínios</span>
										</div>
										<a href="#" class="Offer-shop-btn hover-btn">Compre agora</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="offer-item">
									<div class="offer-item-img">
										<div class="gambo-overlay"></div>
										<img src="images/banners/offer-4.jpg" alt="">
									</div>
									<div class="offer-text-dt">
										<div class="offer-top-text-banner">
											<p>2% Off</p>
											<div class="top-text-1">Compre mais e Economize mais</div>
											<span>Bebidas</span>
										</div>
										<a href="#" class="Offer-shop-btn hover-btn">Compre agora</a>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="offer-item">
									<div class="offer-item-img">
										<div class="gambo-overlay"></div>
										<img src="images/banners/offer-5.jpg" alt="">
									</div>
									<div class="offer-text-dt">
										<div class="offer-top-text-banner">
											<p>3% Off</p>
											<div class="top-text-1">Compre mais e Economize mais</div>
											<span>Castanhas e Lanches</span>
										</div>
										<a href="#" class="Offer-shop-btn hover-btn">Compre agora</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Offers End -->
		<!-- Categories Start -->
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Comprar por</span>
								<h2>Categorias</h2>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel cate-slider owl-theme">
						<?php
						if(isset($r_categoria))
						{	
							foreach($r_categoria as $key => $r_cat)
							{	
																
						?>	
							<div class="item">
								<?php echo "<a href='shop_grid.php?c_id=".$r_cat['cat_id']." 'class='category-item'>" ?>
									<div class="cate-img">
									<?php echo "<img src=' ".limpa_link($r_cat['cat_img'])." ' alt='Erro ao Carregar a imagem'>" ?>
									</div>
									<?php echo "<h4>".$r_cat['cat_nome']."</h4>" ?>
								</a>
							</div>

						<?php }} ?>
									
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Categories End -->
		<!-- Featured Products Start -->
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Para Você</span>
								<h2>Produtos e Destaque</h2>
							</div>
							<a href="shop_grid.php?destaque=2" class="see-more-btn">Ver Tudo</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">
						<!-- Exibir Produtos destaque-->
						<?php
							if(isset($r_produtos_dec))
								{	
								foreach($r_produtos_dec as $key => $r_pro_dec)
									{
																
						?>

							<div class="item">
								<div class="product-item">
									<?php echo "<a href='single_product_view.php?p_id=".$r_pro_dec['pro_id']." ' class='product-img'>" ?>
									    <?php echo "<img src=' ".limpa_link($r_pro_dec['pro_img'])." ' alt='Erro ao Carregar a imagem'>" ?>
										<div class="product-absolute-options">
											<?php if(porcentagemDesconto($r_pro_dec['pro_valor'], $r_pro_dec['pro_desconto']) != 0 and porcentagemDesconto($r_pro_dec['pro_valor'], $r_pro_dec['pro_desconto']) != 100) { ?>
											<?php echo "<span class='offer-badge-1'>".porcentagemDesconto($r_pro_dec['pro_valor'], $r_pro_dec['pro_desconto'])."%</span>" ?>
											<?php } ?>

										</div>
									</a>
									<div class="product-text-dt">
									<?php
									if($r_pro_dec['pro_ativo'] == 1)
									{ 
									?>
										<p>Acessível<span>(Em Estoque)</span></p>
									<?php
									}
									else {
									?>
										<p>Esgotado<span>(Sem estoque)</span></p>
									<?php
									}
									?>
										<?php echo "<h4>".$r_pro_dec['pro_nome']."</h4>" ?>

										<?php if($r_pro_dec['pro_desconto'] != $r_pro_dec['pro_valor'] and $r_pro_dec['pro_desconto'] != 0){?>
										<?php echo "<div class='product-price'>R$".formata_preco($r_pro_dec['pro_desconto'])."<span>R$".formata_preco($r_pro_dec['pro_valor'])."</span></div>" ?>
										<?php
										}
										else{
										?>
										<?php echo "<div class='product-price'>R$".$r_pro_dec['pro_valor']."</div>"; }?>


										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<a class="cart-icon" href="php/Carrinho.php?acao=add&id=<?php echo $r_pro_dec['pro_id']?>"><i class="uil uil-shopping-cart-alt"></i></a>
										</div>
									</div>
								</div>
							</div>
							<?php }} ?>
							<!-- FIM Exibir Produtos destaque-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Featured Products End -->
		<!-- Best Values Offers Start -->
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Ofertas</span>
								<h2>Melhores Preços</h2>
							</div>
						</div>
					</div>

					<!--
					<div class="col-lg-4 col-md-6">
						<a href="#" class="best-offer-item">
							<img src="images/best-offers/offer-2.jpg" alt="">
						</a>
					</div>
					-->
					<?php
							if(isset($r_oferta))
								{	
								foreach($r_oferta as $key => $r_ofer)
									{
																
						?>
					<div class="col-lg-4 col-md-6">
						<a href="single_product_view.php?p_id=<?php echo $r_ofer['pro_id'] ?>" class="best-offer-item offr-none">
							<img src="<?php echo limpa_link($r_ofer['pro_img']) ?>" alt="">
							<div class="cmtk_dt">
								<?php echo "<h4>".$r_ofer['pro_nome']."</h4>" ?>
								<div class=" offer-counter-text" data-countdown="2021/01/06">
								<div class='product-price'>R$ <?php echo formata_preco($r_ofer['pro_desconto'])?><span>R$<?php echo formata_preco($r_ofer['pro_valor']) ?></span></div>
								</div>
							
							</div>
						</a>
					</div>
					<?php }} ?>
					<div class="col-md-12">
						<a href="#" class="code-offer-item">
							<img src="images/best-offers/offer-4.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Best Values Offers End -->
		
		<!-- New Products Start -->
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Para Você</span>
								<h2>Novidades</h2>
							</div>
							<?php echo "<a href='shop_grid.php?new_id=1' class='see-more-btn'>Ver Tudo</a>" ?>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">

						<?php
							if(isset($r_produtos))
								{	
								foreach($r_produtos as $key => $r_pro)
									{
																
						?>

							<div class="item">
								<div class="product-item">
									<?php echo "<a href='single_product_view.php?p_id=".$r_pro['pro_id']." ' class='product-img'>" ?>
									    <?php echo "<img src=' ".limpa_link($r_pro['pro_img'])." ' alt='Erro ao Carregar a imagem'>" ?>
										<div class="product-absolute-options">
											<?php if(porcentagemDesconto($r_pro['pro_valor'], $r_pro['pro_desconto']) != 0 and porcentagemDesconto($r_pro['pro_valor'], $r_pro['pro_desconto']) != 100) { ?>
											<?php echo "<span class='offer-badge-1'>".porcentagemDesconto($r_pro['pro_valor'], $r_pro['pro_desconto'])."%</span>" ?>
											<?php } ?>

										</div>
									</a>
									<div class="product-text-dt">
									<?php
									if($r_pro['pro_ativo'] == 1)
									{ 
									?>
										<p>Acessível<span>(Em Estoque)</span></p>
									<?php
									}
									else {
									?>
										<p>Esgotado<span>(Sem estoque)</span></p>
									<?php
									}
									?>
										<?php echo "<h4>".$r_pro['pro_nome']."</h4>" ?>

										<?php if($r_pro['pro_desconto'] != $r_pro['pro_valor'] and $r_pro['pro_desconto'] != 0){?>
										<?php echo "<div class='product-price'>R$".formata_preco($r_pro['pro_desconto'])."<span>R$".formata_preco($r_pro['pro_valor'])."</span></div>" ?>
										<?php
										}
										else{
										?>
										<?php echo "<div class='product-price'>R$".$r_pro['pro_valor']."</div>"; }?>


										<div class="qty-cart">
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus minus-btn">
												<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
												<input type="button" value="+" class="plus plus-btn">
											</div>
											<span class="cart-icon"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
									</div>
								</div>
							</div>
							<?php }} ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Acaba os Novos Produtos-->
	</div>
	<!-- Fim do Body  -->
	<!-- Começo do Footer(rodapé)  -->
	<footer class="footer">
		<div class="footer-first-row">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<ul class="call-email-alt">
							<li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>(91)982832-2055</a></li>
							<li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>mercadopaidegua@gmail.com</a></li>
						</ul>
					</div>
						
				</div>
			</div>
		</div>
		<div class="footer-second-row">
			<div class="container">
				<div class="row-index">
				
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Onde Atendemos</h4>
							<ul>
								<li><a href="#">Castanhal</a></li>

							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item-app">
						</div>
						<div class="second-row-item-payment">
							<h4>Métodos de Pagamento</h4>
							<div class="footer-payments">
								<ul id="paypal-gateway" class="financial-institutes">
									
									<li class="financial-institutes__logo">
										<img alt="Visa" title="Visa" src="images/footer-icons/pyicon-1.svg">
									</li>
									<li class="financial-institutes__logo">
										<img alt="MasterCard" title="MasterCard" src="images/footer-icons/pyicon-2.svg">
									</li>
									
								</ul>
							</div>
						</div>
						
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							
						<div class="main_logo-footer" id="logo">
					<img src="images/logo.png" alt="">
					<img class="logo-inverse" src="images/dark-logo.png" alt="">
				</div>


					</div>
					

							</div>
					</div>

				</div>

			</div>
		</div>
		<div class="footer-last-row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="footer-bottom-links" style="text-align-last:center;">
							<ul>
								<li><a href="about_us.php">Sobre Nós</a></li>
								<li><a href="contact_us.php">Contato</a></li>
								<li><a href="faq.php">Perguntas Frequentes</a></li>

							</ul>
						</div>
						<div class="copyright-text">
							<i class="uil uil-copyright"></i>Copyright 2021 <b>Mercado Pai D'égua</b> . All rights reserved
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Fim do Footer (rodapé)  -->

	<!-- Javascripts -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/semantic/semantic.min.js"></script>
	<script src="js/jquery.countdown.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/offset_overlay.js"></script>
	<script src="js/night-mode.js"></script>


</body>

</html>