<?php
include('php/verificar_login.php');
include("php/carrinho.php");
?>


<!DOCTYPE html>
<html lang="pt_BR">
	<?php
	include('php/dados_cliente.php');
	include('php/func.php');
	include('php/exibe_categoria_index.php');
	?>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Mercado Pai D'égua - Termos e Condições de Uso</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/logo-1.png">
		
		<!-- Stylesheets -->
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/night-mode.css" rel="stylesheet">
		<link href="css/step-wizard.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
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
			</div>
		</div>
	</div>
</div>
<!-- pesquisar produtos fim-->
<!-- Carrinho sidebar inicio-->
	<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
	<?php
	
	if($resultsCarts) { ?>
		<div class="bs-canvas-header side-cart-header p-3 ">
			<?php if($cont_itens > 1) { ?>
			<div class="d-inline-block  main-cart-title">Meu Carrinho <span>(<?php echo $cont_itens ?> Itens)</span></div>
			<?php }else{ ?>
			<div class="d-inline-block  main-cart-title">Meu Carrinho <span>(<?php echo $cont_itens ?> Item)</span></div>
			<?php } ?>
			<button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
		</div>
		<div class="bs-canvas-body">
			<div class="cart-top-total">
				<div class="cart-total-dil">
					<h4>Mercado Pai D'égua</h4>
					<span>R$<?php echo number_format($totalCarts, 2, ',', '.')?></span>
				</div>
				<div class="cart-total-dil pt-2">
					<h4>Taxa de entrega</h4>
					<span>R$<?php echo $frete ?></span>
				</div>
			</div>
			<div class="side-cart-items">

<!-- INICIO EXIBIR ITENS NO CARRINHO -->  

			<?php foreach($resultsCarts as $result) : 
				
			

				?>

				<div class="cart-item">
					<div class="cart-product-img">
						<img src="<?php echo limpa_link($result['image'])?>" alt="Erro ao carregar imagem!">
						<?php if($result['porc'] > 0){ ?>
						<div class="offer-badge"><?php echo number_format($result['porc'], 0, ',', '.')?>% OFF</div>
						<?php } ?>
					</div>
					<div class="cart-text">
						<h4><?php echo $result['name']?></h4>
						<div class="qty-group">
							<div class="quantity buttons_added">								
								<input type="number" step="1" name="quantity" value="<?php echo $result['quantity']?>" class="input-text qty text">								
							</div>
							<div class="cart-item-price">R$<?php echo number_format($result['discount'], 2, ',', '.')?> <span>R$<?php echo number_format($result['price'], 2, ',', '.')?></span></div>
						</div>
						<a href="php/carrinho.php?acao=del&id=<?php echo $result['id']?>" type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></a>
					</div>
				</div>
				
			<?php endforeach;?>

<!-- FIM EXIBIR ITENS NO CARRINHO -->

			</div>
		</div>
		<div class="bs-canvas-footer">
			<div class="cart-total-dil saving-total ">
				<h4>Total Economizado</h4> 
				<span>R$<?php echo number_format($totaldesc, 2, ',', '.')?></span>
			</div>
			<div class="main-total-cart">
				<h2>Total</h2>
				<span>R$<?php echo number_format($totalCfrete, 2, ',', '.')?></span>
			</div>
			<div class="checkout-cart">
				<a href="checkout.php" class="cart-checkout-btn hover-btn">Finalizar</a>
			</div>
		</div>
		<?php }else { ?>

			<div class="bs-canvas-header side-cart-header p-3 ">
			<div class="d-inline-block  main-cart-title">Meu Carrinho <span>(0 Itens)</span></div>
			<button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
		</div>
		<div class="bs-canvas-body">
			<div class="cart-top-total">
				<div class="cart-total-dil">
					<h4>Mercado Pai D'égua</h4>
					<span>R$<?php echo number_format($totalCarts, 2, ',', '.')?></span>
				</div>
				<div class="cart-total-dil pt-2">
					<h4>Taxas de entrega</h4>
					<span>R$<?php echo $frete ?></span>
				</div>
			</div>
		</div>
			<div class="bs-canvas-footer">
			<div class="cart-total-dil saving-total ">
				<h4>Total Economizado</h4>
				<span>R$<?php echo number_format($totaldesc, 2, ',', '.')?></span>
			</div>
			<div class="main-total-cart">
				<h2>Total</h2>
				<span>R$<?php echo number_format($totalCfrete, 2, ',', '.')?></span>
			</div>
			<div class="checkout-cart">
				<a href="checkout.php" class="cart-checkout-btn hover-btn">Finalizar</a>
			</div>
		</div>	

			<?php } ?>

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
							<li class="nav-item"><a href="index.php" class="nav-link" title="Home">Início</a></li>
							<li class="nav-item"><a href="shop_grid.php?new_id=1" class="nav-link new_item" title="New Products">Novos Produtos</a></li>
								<li class="nav-item"><a href="shop_grid.php?destaque=2" class="nav-link" title="Featured Products">Produtos em Destaque</a></li>
							<li class="nav-item">
								<div class="ui icon top left dropdown nav__menu">
									<a class="nav-link" title="Pages">Mais <i class="uil uil-angle-down"></i></a>
									<div class="menu dropdown_page">
										<a href="dashboard_overview.php" class="item channel_item page__links">Conta</a>
										<a href="about_us.php" class="item channel_item page__links">Sobre nós</a>
										<a href="checkout.php" class="item channel_item page__links">Finalizar Pedido</a>
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
			<?php if($cont_itens >= 1) { ?>
						<a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Carrinho</span><ins><?php echo $cont_itens ?></ins><i class="uil uil-angle-down"></i></a>
					<?php }else{ ?>
						<a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Carrinho</span><ins>0</ins><i class="uil uil-angle-down"></i></a>
					<?php } ?>			</div>
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
								<li class="breadcrumb-item active" aria-current="page">Termos e Condições</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="all-product-grid">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="job-main-dt">
							<h2>Termos e Condições - Mercado Pai D'égua</h2>
							<span>Estes Termos de Uso ("Termos") foram atualizados pela última vez em....</span>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Personal Information</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum turpis vitae facilisis tempus. Donec in blandit risus, eget pretium mauris. Aliquam nec venenatis massa. Ut vel nulla id velit dictum rutrum nec vel ex. Phasellus sit amet faucibus massa, in feugiat augue. Maecenas eget dapibus turpis, a finibus justo. Suspendisse pretium lorem non lorem faucibus, non sagittis nisi finibus. Sed efficitur massa ac nibh condimentum interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse luctus, ex ut congue interdum, nibh turpis malesuada orci, vel vulputate arcu velit condimentum orci. Ut sed dictum lacus.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Services overview</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae, pretium eu elit. Integer sagittis eu purus eget venenatis. Ut rhoncus tempor velit vitae consequat. Quisque consequat, enim eu cursus eleifend, velit mi viverra arcu, sed elementum dolor odio eget neque.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Eligibility</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum turpis vitae facilisis tempus. Donec in blandit risus, eget pretium mauris. Aliquam nec venenatis massa. Ut vel nulla id velit dictum rutrum nec vel ex. Phasellus sit amet faucibus massa, in feugiat augue. Maecenas eget dapibus turpis, a finibus justo. Suspendisse pretium lorem non lorem faucibus, non sagittis nisi finibus. Sed efficitur massa ac nibh condimentum interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse luctus, ex ut congue interdum, nibh turpis malesuada orci, vel vulputate arcu velit condimentum orci. Ut sed dictum lacus.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>License & Site access</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae, pretium eu elit. Integer sagittis eu purus eget venenatis. Ut rhoncus tempor velit vitae consequat. Quisque consequat, enim eu cursus eleifend, velit mi viverra arcu, sed elementum dolor odio eget neque.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>With whom your information will be shared</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum turpis vitae facilisis tempus. Donec in blandit risus, eget pretium mauris. Aliquam nec venenatis massa. Ut vel nulla id velit dictum rutrum nec vel ex. Phasellus sit amet faucibus massa, in feugiat augue. Maecenas eget dapibus turpis, a finibus justo. Suspendisse pretium lorem non lorem faucibus, non sagittis nisi finibus. Sed efficitur massa ac nibh condimentum interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse luctus, ex ut congue interdum, nibh turpis malesuada orci, vel vulputate arcu velit condimentum orci. Ut sed dictum lacus.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Account & Registration Obligations</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae, pretium eu elit. Integer sagittis eu purus eget venenatis. Ut rhoncus tempor velit vitae consequat. Quisque consequat, enim eu cursus eleifend, velit mi viverra arcu, sed elementum dolor odio eget neque.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Pricing</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum turpis vitae facilisis tempus. Donec in blandit risus, eget pretium mauris. Aliquam nec venenatis massa. Ut vel nulla id velit dictum rutrum nec vel ex. Phasellus sit amet faucibus massa, in feugiat augue. Maecenas eget dapibus turpis, a finibus justo. Suspendisse pretium lorem non lorem faucibus, non sagittis nisi finibus. Sed efficitur massa ac nibh condimentum interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse luctus, ex ut congue interdum, nibh turpis malesuada orci, vel vulputate arcu velit condimentum orci. Ut sed dictum lacus.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Cancellation by Site / Customer</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Return & Refunds</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>You Agree and Confirm</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Contact Information</h4>
							<ul class="joby-list-dt">
								<li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
								<li><p>Sed ut dui et tellus euismod accumsan.</p></li>
								<li><p>Aenean sed neque vitae nisi commodo ultricies sed ut sapien.</p></li>
								<li><p>Sed euismod urna vel lacus porta imperdiet.</p></li>
								<li><p>Proin id neque condimentum, eleifend ipsum sed, luctus nisi.</p></li>
								<li><p>Ut eu sem eget dolor bibendum tempor.</p></li>
								<li><p>Sed scelerisque purus id nunc semper, in elementum quam fringilla.</p></li>
								<li><p>Donec pulvinar enim vel convallis egestas.</p></li>
							</ul>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Modification of Terms & Conditions of Service</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Governing Law and Jurisdiction</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum turpis vitae facilisis tempus. Donec in blandit risus, eget pretium mauris. Aliquam nec venenatis massa. Ut vel nulla id velit dictum rutrum nec vel ex. Phasellus sit amet faucibus massa, in feugiat augue. Maecenas eget dapibus turpis, a finibus justo. Suspendisse pretium lorem non lorem faucibus, non sagittis nisi finibus. Sed efficitur massa ac nibh condimentum interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse luctus, ex ut congue interdum, nibh turpis malesuada orci, vel vulputate arcu velit condimentum orci. Ut sed dictum lacus.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Copyright & Trademark</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Objectionable Material</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum turpis vitae facilisis tempus. Donec in blandit risus, eget pretium mauris. Aliquam nec venenatis massa. Ut vel nulla id velit dictum rutrum nec vel ex. Phasellus sit amet faucibus massa, in feugiat augue. Maecenas eget dapibus turpis, a finibus justo. Suspendisse pretium lorem non lorem faucibus, non sagittis nisi finibus. Sed efficitur massa ac nibh condimentum interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse luctus, ex ut congue interdum, nibh turpis malesuada orci, vel vulputate arcu velit condimentum orci. Ut sed dictum lacus.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Indemnity</h4>
							<p>Donec maximus lorem vitae risus molestie sollicitudin. Ut sem lorem, consequat et tortor sit amet, viverra porttitor erat. Suspendisse aliquet arcu vel auctor maximus. Nunc in euismod purus. Aliquam non varius quam. Sed eros magna, tempus ullamcorper auctor vitae.</p>
						</div>
						<div class="job-des-dt142 policy-des-dt">
							<h4>Termination</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum turpis vitae facilisis tempus. Donec in blandit risus, eget pretium mauris. Aliquam nec venenatis massa. Ut vel nulla id velit dictum rutrum nec vel ex. Phasellus sit amet faucibus massa, in feugiat augue. Maecenas eget dapibus turpis, a finibus justo. Suspendisse pretium lorem non lorem faucibus, non sagittis nisi finibus. Sed efficitur massa ac nibh condimentum interdum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse luctus, ex ut congue interdum, nibh turpis malesuada orci, vel vulputate arcu velit condimentum orci. Ut sed dictum lacus.</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- Body End -->
	<!-- Footer Start -->
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
						<div class="second-row-item" style="margin-top:47px;"> 
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

	<!-- Footer End -->

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