<?php

	include('php/verificar_login.php');


?>
<!DOCTYPE html>
<html lang="pt_BR">
    <?php
	include('php/dados_cliente.php');
    include('php/func.php');
    include('../Admin/php/exibe_produtos.php');
    include('../Admin/php/ver_produto.php');
    include('php/exibe_categoria_index.php');
	?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Mercado Pai D'égua - Produto</title>

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/logo-1.png">

    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/night-mode.css" rel="stylesheet">

    <!-- Vendor Stylesheets -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">

</head>

<body>
    <!-- Share Icons Start-->
    <div class="icon-bar">
        <a href="#" class="whatsapp" title="Share"><i class="fab fa-whatsapp"></i></a>
        <a href="#" class="facebook" title="Share"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="linkedin" title="Share"><i class="fab fa-linkedin-in"></i></a>

    </div>
    <!-- Share Icons End-->
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
        <div class="gambo-Breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Início</a></li>
                                <?php echo "<li class='breadcrumb-item'><a href='shop_grid.php?c_id=".$r_view_pro['pro_cat']."' >".$r_view_cat['cat_nome']."</a></li>" ?>
                                <?php echo "<li class='breadcrumb-item active' aria-current='page'>".$r_view_pro['pro_nome']."</li>" ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="all-product-grid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-dt-view">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div id="sync1" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <?php echo "<img src=' ".limpa_link($r_view_pro['pro_img'])." ' alt=''>" ?>
                                        </div>
                                        <!--
                                        <div class="item">
                                            <img src="images/product/isaac1.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/product/isaac2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/product/isaac3.jpg" alt="">
                                        </div>
                                         -->
                                    </div>
                                    <!--
                                    <div id="sync2" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <img src="images/product/isaacchavoso.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/product/isaac1.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/product/isaac2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/product/isaac3.jpg" alt="">
                                        </div>
                                    </div>
                                    -->
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="product-dt-right">
                                        <?php echo "<h2>".$r_view_pro['pro_nome']."</h2>" ?>
                                        <div class="no-stock">
                                            <?php echo "<p class='pd-no'>Cód.<span>".$r_view_pro['pro_id']."</span></p>" ?>
                                            <p class="stock-qty">Acessível<span>(Em Estoque)</span></p>
                                        </div>
                                        <div class="product-radio">
                                            <ul class="product-now">
                                                <li>
                                                    <input type="radio" id="p1" name="product1">
                                                    <label for="p1">500g</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="p2" name="product1">
                                                    <label for="p2">1kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="p3" name="product1">
                                                    <label for="p3">2kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="p4" name="product1">
                                                    <label for="p4">3kg</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <?php echo "<p class='pp-descp'>".$r_view_pro['pro_desc']."</p>" ?>
                                        <div class="product-group-dt">
                                            <ul>
                                            <?php if($r_view_pro['pro_desconto'] != $r_view_pro['pro_valor'] and $r_view_pro['pro_desconto'] != 0){?>
                                                <li>
                                                    <?php echo "<div class='main-price color-discount'>Com Desconto<span>R$".formata_preco($r_view_pro['pro_desconto'])."</span></div>" ?>
                                                </li>
                                                <li>
                                                    <?php echo "<div class='main-price mrp-price'>Preço de Varejo<span>R$".formata_preco($r_view_pro['pro_valor'])."</span></div>" ?>
                                                </li>
                                            <?php
                                            }else{
                                            ?>
                                                <li>
                                                    <?php echo "<div class='main-price color-discount'>Preço<span>R$ ".$r_view_pro['pro_valor']."</span></div>" ?>
                                                </li>
                                            <?php } ?>

                                            </ul>
                                            <ul class="gty-wish-share">
                                                <li>
                                                    <div class="qty-product">
                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-" class="minus minus-btn">
                                                            <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                            <input type="button" value="+" class="plus plus-btn">
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                            <ul class="ordr-crt-share">
                                                <li><button class="add-cart-btn hover-btn"><i class="uil uil-shopping-cart-alt"></i>Adicionar ao Carrinho</button></li>
                                                <li><a  class="order-btn hover-btn" href="php/carrinho.php?acao=add&id=<?php echo $r_view_pro['pro_id']?>" >Comprar Agora</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="pdpt-bg">
                            <div class="pdpt-title">
                                <h4>Você também vai gostar</h4>
                            </div>
                            <div class="pdpt-body scrollstyle_4">
                            <?php
                            if(isset($r_produtos_cat))
								{	
								foreach($r_produtos_cat as $key => $r_pro_cat)
									{
                            ?>
                                <div class="cart-item border_radius">
                                    <?php echo "<a href='single_product_view.php?p_id=".$r_pro_cat['pro_id']."' class='cart-product-img'>" ?>
                                        <?php echo "<img src=' ".limpa_link($r_pro_cat['pro_img'])." ' alt='Erro ao carregar a imagem'>" ?>
                                        <?php if(porcentagemDesconto($r_pro_cat['pro_valor'], $r_pro_cat['pro_desconto']) != 0 and porcentagemDesconto($r_pro_cat['pro_valor'], $r_pro_cat['pro_desconto']) != 100) { ?>
                                        <?php echo "<div class='offer-badge'>".porcentagemDesconto($r_pro_cat['pro_valor'], $r_pro_cat['pro_desconto'])."% OFF</div>" ?>
                                        <?php } ?>
                                    </a>
                                    <div class="cart-text">
                                        <?php echo "<h4>".$r_pro_cat['pro_nome']."</h4>" ?>
                                        <div class="qty-group">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <?php if($r_pro_cat['pro_desconto'] != $r_pro_cat['pro_valor'] and $r_pro_cat['pro_desconto'] != 0){?>
                                            <?php echo "<div class='cart-item-price'>R$".formata_preco($r_pro_cat['pro_desconto'])."<span>R$".formata_preco($r_pro_cat['pro_valor'])."</span></div>" ?>
                                            <?php 
                                            }else{
                                            ?>
                                            <?php echo "<div class='cart-item-price'>R$".formata_preco($r_pro_cat['pro_valor'])."<span></span></div>" ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                                <?php }}?>
<!--
                                <div class="cart-item border_radius">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="cart-product-img">
                                        <img src="images/product/img-2.jpg" alt="">
                                        <div class="offer-badge">6% OFF</div>
                                    </a>
                                    <div class="cart-text">
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="cart-radio">
                                            <ul class="kggrm-now">
                                                <li>
                                                    <input type="radio" id="k5" name="cart2">
                                                    <label for="k5">0.50</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k6" name="cart2">
                                                    <label for="k6">1kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k7" name="cart2">
                                                    <label for="k7">2kg</label>
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
                                    </div>
                                </div>

                                <div class="cart-item border_radius">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="cart-product-img">
                                        <img src="images/product/img-5.jpg" alt="">
                                    </a>
                                    <div class="cart-text">
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="cart-radio">
                                            <ul class="kggrm-now">
                                                <li>
                                                    <input type="radio" id="k8" name="cart3">
                                                    <label for="k8">0.50</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k9" name="cart3">
                                                    <label for="k9">1kg</label>
                                                </li>
                                                <li>
                                                    <input type="radio" id="k10" name="cart3">
                                                    <label for="k10">1.50kg</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="qty-group">
                                            <div class="quantity buttons_added">
                                                <input type="button" value="-" class="minus minus-btn">
                                                <input type="number" step="1" name="quantity" value="1" class="input-text qty text">
                                                <input type="button" value="+" class="plus plus-btn">
                                            </div>
                                            <div class="cart-item-price">R$15</div>
                                        </div>
                                    </div>
                                </div>
                                            -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="pdpt-bg">
                            <div class="pdpt-title">
                                <h4>Detalhes do Produto</h4>
                            </div>
                            <div class="pdpt-body scrollstyle_4">
                                <div class="pdct-dts-1">
                                    <div class="pdct-dt-step">
                                        <h4>Descrição</h4>
                                        <?php echo "<p>".$r_view_pro['pro_desc']."</p>" ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Products Start -->
        <div class="section145">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title-tt">
                            <div class="main-title-left">
                                <span>Para Você</span>
                                <h2>Produtos em Destaque</h2>
                            </div>
                            <a href="#" class="see-more-btn">See All</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel featured-slider owl-theme">
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
											<a class="cart-icon" href="php/carrinho.php?acao=add&id=<?php echo $r_pro_dec['pro_id']?>"><i class="uil uil-shopping-cart-alt"></i></a>
										</div>
									</div>
								</div>
							</div>
							<?php }} ?>
                            <!--
                            <div class="item">
                                <div class="product-item">
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="product-img">
                                        <img src="images/product/img-2.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">2% off</span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Acessível<span>(Em Estoque)</span></p>
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="product-price">$10 <span>$13</span></div>
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
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="product-img">
                                        <img src="images/product/img-3.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">5% off</span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Acessível<span>(Em Estoque)</span></p>
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="product-price">$5 <span>$8</span></div>
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
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="product-img">
                                        <img src="images/product/img-4.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">3% off</span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Acessível<span>(Em Estoque)</span></p>
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="product-price">$15 <span>$20</span></div>
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
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="product-img">
                                        <img src="images/product/img-5.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">2% off</span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Acessível<span>(Em Estoque)</span></p>
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="product-price">$9 <span>$10</span></div>
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
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="product-img">
                                        <img src="images/product/img-6.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">2% off</span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Acessível<span>(Em Estoque)</span></p>
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="product-price">$7 <span>$8</span></div>
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
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="product-img">
                                        <img src="images/product/img-7.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">1% off</span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Acessível<span>(Em Estoque)</span></p>
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="product-price">$6.95 <span>$7</span></div>
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
                                    <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/single_product_view.php" class="product-img">
                                        <img src="images/product/img-8.jpg" alt="">
                                        <div class="product-absolute-options">
                                            <span class="offer-badge-1">3% off</span>
                                        </div>
                                    </a>
                                    <div class="product-text-dt">
                                        <p>Acessível<span>(Em Estoque)</span></p>
                                        <h4>Nome do Produto Aqui</h4>
                                        <div class="product-price">$8 <span>$10</span></div>
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
        <!-- Acaba os produtos em destaque -->
    </div>
    <!-- fim do Body -->
    <!-- Começa o Footer  -->
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

    <!-- Fim do Footer  -->

    <!-- Javascripts -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="vendor/semantic/semantic.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/product.thumbnail.slider.js"></script>
    <script src="js/offset_overlay.js"></script>
    <script src="js/night-mode.js"></script>


</body>

</html>