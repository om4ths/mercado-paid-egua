<?php
include('php/verificar_login.php');

?>
<?php 
		include('../Admin/php/exibe_categoria.php');
		include('../Admin/php/exibe_produtos.php');

		//FUNÇÃO PARA LIMPAR O INICIO DO LINK
		function limpa_link($valor){
			$valor = trim($valor);
			$valor = str_replace("../", "", $valor);
			
			return $valor;
		   }

		//FUNÇÃO PARA CALCULAR A PORCENTAGEM DO DESCONTO
		function porcentagemDesconto($valorTotal, $valorCDesconto){
			$valorDDesconto = $valorTotal - $valorCDesconto;
			$porcentagemDesc = ($valorDDesconto * 100) / $valorTotal;

			return $porcentagemDesc;
		}

	?>
<!DOCTYPE html>
<html lang="pt_BR>
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
																
							$caminhoCorretoImg = limpa_link($r_cat['cat_img']);
																
					?>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<?php echo "<img src=' ".$caminhoCorretoImg." ' alt='erro ao Carregar a imagem'>" ?>
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
					<div class="cart-text">
						<h4>Nome do Produto Aqui</h4>
						<div class="cart-radio">
							<ul class="kggrm-now">
								<li>
									<input type="radio" id="a1" name="cart1">
									<label for="a1">0.50</label>
								</li>
								<li>
									<input type="radio" id="a2" name="cart1">
									<label for="a2">1kg</label>
								</li>
								<li>
									<input type="radio" id="a3" name="cart1">
									<label for="a3">2kg</label>
								</li>
								<li>
									<input type="radio" id="a4" name="cart1">
									<label for="a4">3kg</label>
								</li>
							</ul>
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
					<div class="cart-text">
						<h4>Nome do Produto Aqui</h4>
						<div class="cart-radio">
							<ul class="kggrm-now">
								<li>
									<input type="radio" id="a5" name="cart2">
									<label for="a5">0.50</label>
								</li>
								<li>
									<input type="radio" id="a6" name="cart2">
									<label for="a6">1kg</label>
								</li>
								<li>
									<input type="radio" id="a7" name="cart2">
									<label for="a7">2kg</label>
								</li>
							</ul>
						</div>
						<div class="qty-group">
							<div class="quantity buttons_added">
								<input type="button" value="-" class="minus minus-btn">
								<input type="number" step="1" name="quantity" value="1" class="input-text qty text">
								<input type="button" value="+" class="plus plus-btn">
							</div>
							<div class="cart-item-price">R$24 <span>R$30</span></div>
						</div>
						<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
					</div>
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
				<a href="#" class="cart-checkout-btn hover-btn">Finalizar</a>
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
					<div class="ui search">
						<div class="ui left icon input swdh10">
							<input class="prompt srch10" type="text" placeholder="Pesquisar produtos ..">
							<i class='uil uil-search-alt icon icon1'></i>
						</div>
					</div>
				</div>
				<div class="header_right">
					<ul>
						<li>
							<a href="#" class="offer-link"><i class="uil uil-phone-alt"></i>1800-000-000</a>
						</li>
						<li>
							<a href="offers.html" class="offer-link"><i class="uil uil-gift"></i>Ofertas</a>
						</li>
						<li>
							<a href="faq.html" class="offer-link"><i class="uil uil-question-circle"></i>Ajuda</a>
						</li>
						<li>
							<a href="dashboard_my_wishlist.html" class="option_links" title="Wishlist"><i class='uil uil-heart icon_wishlist'></i><span class="noti_count1">3</span></a>
						</li>
						<li class="ui dropdown">
							<a href="#" class="opts_account">
								<img src="images/avatar/img-5.jpg" alt="">
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
								<a href="dashboard_my_wishlist.php" class="item channel_item"><i class="uil uil-heart icon__1"></i>Lista de desejos</a>
								<a href="dashboard_my_wallet.php" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i>Carteira</a>
								<a href="dashboard_my_addresses.php" class="item channel_item"><i class="uil uil-location-point icon__1"></i>Endereço</a>
								<a href="offers.html" class="item channel_item"><i class="uil uil-gift icon__1"></i>Ofertas</a>
								<a href="faq.html" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Perguntas frequentes</a>
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
								<li class="nav-item"><a href="shop_grid.html" class="nav-link new_item" title="New Products">Novos Produtos</a></li>
								<li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">Produtos em Destaques</a></li>
								<li class="nav-item">
									<div class="ui icon top left dropdown nav__menu">
										<a class="nav-link" title="Pages">Mais <i class="uil uil-angle-down"></i></a>
										<div class="menu dropdown_page">
											<a href="dashboard_overview.php" class="item channel_item page__links">Conta</a>
											<a href="about_us.html" class="item channel_item page__links">Sobre nós</a>
											<a href="single_product_view.html" class="item channel_item page__links">Visualizar um Produto</a>
											<a href="checkout.html" class="item channel_item page__links">Finalizar Pedido</a>
											<a href="order_placed.html" class="item channel_item page__links">Pedidos Finalizados</a>
											<a href="bill.html" class="item channel_item page__links">Imprimir Pedidos</a>
											<a href="sign_in.html" class="item channel_item page__links">Entrar</a>
											<a href="sign_up.html" class="item channel_item page__links">Cadastrar-se</a>
											<a href="forgot_password.html" class="item channel_item page__links">Esqueceu sua senha?</a>
											<a href="contact_us.html" class="item channel_item page__links">Fale Conosco</a>
										</div>
									</div>
								</li>
								<li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Fale conosco</a></li>
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
																
							$caminhoCorretoImg = limpa_link($r_cat['cat_img']);
																
						?>	
							<div class="item">
								<a href="#" class="category-item">
									<div class="cate-img">
									<?php echo "<img src=' ".$caminhoCorretoImg." ' alt='Erro ao Carregar a imagem'>" ?>
									</div>
									<?php echo "<h4>".$r_cat['cat_nome']."</h4>" ?>
								</a>
							</div>

						<?php }} ?>
<!--
							<div class="item">
								<a href="#" class="category-item">
									<div class="cate-img">
										<img src="images/category/icon-2.svg" alt="">
									</div>
									<h4> Alimentos Básicos </h4>
								</a>
							</div>
-->											
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
							<a href="#" class="see-more-btn">Ver Tudo</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">
						<?php
							if(isset($r_produtos))
								{	
								foreach($r_produtos as $key => $r_pro)
									{							
										$caminhoCorretoImg = limpa_link($r_pro['pro_img']);
						?>

							<div class="item">
								<div class="product-item">
									<a href="single_product_view.html" class="product-img">
									    <?php echo "<img src=' ".$caminhoCorretoImg." ' alt='Erro ao Carregar a imagem'>" ?>
										<div class="product-absolute-options">
											<?php echo "<span class='offer-badge-1'>".porcentagemDesconto($r_pro['pro_valor'], $r_pro['pro_desconto'])."</span>" ?>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$10</span></div>
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
<!--
							<div class="item">
								<div class="product-item">
									<a href="single_product_view.html" class="product-img">
										<img src="images/product/img-2.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$10</span></div>
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
-->
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
					<div class="col-lg-4 col-md-6">
						<a href="#" class="best-offer-item">
							<img src="images/best-offers/offer-1.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#" class="best-offer-item">
							<img src="images/best-offers/offer-2.jpg" alt="">
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a href="#" class="best-offer-item offr-none">
							<img src="images/best-offers/offer-3.jpg" alt="">
							<div class="cmtk_dt">
								<div class="product_countdown-timer offer-counter-text" data-countdown="2021/01/06"></div>
							</div>
						</a>
					</div>
					<div class="col-md-12">
						<a href="#" class="code-offer-item">
							<img src="images/best-offers/offer-4.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Best Values Offers End -->
		<!-- Vegetables and Fruits Start 
		<div class="section145">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="main-title-tt">
							<div class="main-title-left">
								<span>Para Você</span>
								<h2>Frutas e Vegetais Frescos</h2>
							</div>
							<a href="#" class="see-more-btn">Ver Tudo</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">

							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-11.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">6% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$10</span></div>
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
						
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-12.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">2% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$10</span></div>
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

						</div>
					</div>
				</div>
			</div>
		</div>
		Vegetables and Fruits Products End -->
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
							<a href="#" class="see-more-btn">Ver Tudo</a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="owl-carousel featured-slider owl-theme">
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-10.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">Novo</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-9.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">Novo</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-15.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">5% off</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-11.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">Novo</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-14.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">Novo</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-2.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">Novo</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-5.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">Novo</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<div class="item">
								<div class="product-item">
									<a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.html" class="product-img">
										<img src="images/product/img-6.jpg" alt="">
										<div class="product-absolute-options">
											<span class="offer-badge-1">Novo</span>
											<span class="like-icon" title="wishlist"></span>
										</div>
									</a>
									<div class="product-text-dt">
										<p>Acessível<span>(Em Estoque)</span></p>
										<h4>Nome do Produto Aqui</h4>
										<div class="product-price">R$8 <span>R$8.75</span></div>
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
							<li><a href="#" class="callemail"><i class="uil uil-dialpad-alt"></i>1800-000-000</a></li>
							<li><a href="#" class="callemail"><i class="uil uil-envelope-alt"></i>info@mercadopaidegua.com</a></li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="social-links-footer">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-second-row">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Categorias</h4>
							<ul>
								<li><a href="#">Frutas e Vegetais</a></li>
								<li><a href="#">Alimentos Básicos</a></li>
								<li><a href="#">Ovos e Laticínios</a></li>
								<li><a href="#">Bebidas</a></li>
								<li><a href="#">Lanches</a></li>
								<li><a href="#">Limpeza</a></li>
								<li><a href="#">Macarrão e molhos</a></li>
								<li><a href="#">Higiene</a></li>
								<li><a href="#">Pets</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="second-row-item">
							<h4>Links Úteis</h4>
							<ul>
								<li><a href="about_us.html">Sobre Nós</a></li>
								<li><a href="shop_grid.html">Produtos em Destaque</a></li>
								<li><a href="offers.html">Ofertas</a></li>
								<li><a href="our_blog.html">Blog</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="career.html">Trabalhe Conosco</a></li>
								<li><a href="contact_us.html">Fale Conosco</a></li>
							</ul>
						</div>
					</div>
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
										<img alt="Visa" title="Visa" src="images/footer-icons/pyicon-6.svg">
									</li>
									<li class="financial-institutes__logo">
										<img alt="Visa" title="Visa" src="images/footer-icons/pyicon-1.svg">
									</li>
									<li class="financial-institutes__logo">
										<img alt="MasterCard" title="MasterCard" src="images/footer-icons/pyicon-2.svg">
									</li>
									<li class="financial-institutes__logo">
										<img alt="American Express" title="American Express" src="images/footer-icons/pyicon-3.svg">
									</li>
									<li class="financial-institutes__logo">
										<img alt="Discover" title="Discover" src="images/footer-icons/pyicon-4.svg">
									</li>
								</ul>
							</div>
						</div>
						<div class="second-row-item-payment">
							<h4>Newsletter</h4>
							<div class="newsletter-input">
								<input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" required="">
								<button class="newsletter-btn hover-btn" type="submit"><i class="uil uil-telegram-alt"></i></button>
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
						<div class="footer-bottom-links">
							<ul>
								<li><a href="about_us.html">Sobre Nós</a></li>
								<li><a href="contact_us.html">Contato</a></li>
								<li><a href="privacy_policy.html">Política de Privacidade</a></li>
								<li><a href="term_and_conditions.html">Termo e Condições</a></li>
								<li><a href="refund_and_return_policy.html">Política de Reembolso e Devolução</a></li>
							</ul>
						</div>
						<div class="copyright-text">
							<i class="uil uil-copyright"></i>Copyright 2020 <b>Mercado Pai D'égua</b> . All rights reserved
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