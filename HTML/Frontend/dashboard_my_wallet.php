﻿<!DOCTYPE html>
<html lang="en">

	<?php
		include('php/verificar_login.php');
		include('php/dados_cliente.php');
	?>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Gambo - My Wallet</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
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
	<!-- Category Model Start-->
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
						<h4>Select Category</h4>
					</div>
                    <ul class="category-by-cat">
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-1.svg" alt="">
								</div>
								<div class="text"> Fruits and Vegetables </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-2.svg" alt="">
								</div>
								<div class="text"> Grocery & Staples </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-3.svg" alt="">
								</div>
								<div class="text"> Dairy & Eggs </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-4.svg" alt="">
								</div>
								<div class="text"> Beverages </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-5.svg" alt="">
								</div>
								<div class="text"> Snacks </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-6.svg" alt="">
								</div>
								<div class="text"> Home Care </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-7.svg" alt="">
								</div>
								<div class="text"> Noodles & Sauces </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-8.svg" alt="">
								</div>
								<div class="text"> Personal Care </div>
							</a>
						</li>
						<li>
							<a href="#" class="single-cat-item">
								<div class="icon">
									<img src="images/category/icon-9.svg" alt="">
								</div>
								<div class="text"> Pet Care </div>
							</a>
						</li>
                    </ul>
					<a href="#" class="morecate-btn"><i class="uil uil-apps"></i>More Categories</a>
                </div>
            </div>
        </div>
    </div>
	<!-- Category Model End-->
	<!-- Search Model Start-->
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
                                Fruits and Vegetables
                            </div>
                        </a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-2.svg" alt="">
							</div>
							<div class="text"> Grocery & Staples </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-3.svg" alt="">
							</div>
							<div class="text"> Dairy & Eggs </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-4.svg" alt="">
							</div>
							<div class="text"> Beverages </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-5.svg" alt="">
							</div>
							<div class="text"> Snacks </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-6.svg" alt="">
							</div>
							<div class="text"> Home Care </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-7.svg" alt="">
							</div>
							<div class="text"> Noodles & Sauces </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-8.svg" alt="">
							</div>
							<div class="text"> Personal Care </div>
						</a>
						<a href="#" class="single-cat">
							<div class="icon">
								<img src="images/category/icon-9.svg" alt="">
							</div>
							<div class="text"> Pet Care </div>
						</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Search Model End-->
	<!-- Cart Sidebar Offset Start-->
	<div class="bs-canvas bs-canvas-left position-fixed bg-cart h-100">
		<div class="bs-canvas-header side-cart-header p-3 ">
			<div class="d-inline-block  main-cart-title">My Cart <span>(2 Items)</span></div>
			<button type="button" class="bs-canvas-close close" aria-label="Close"><i class="uil uil-multiply"></i></button>
		</div> 
		<div class="bs-canvas-body">
			<div class="cart-top-total">
				<div class="cart-total-dil">
					<h4>Gambo Super Market</h4>
					<span>$34</span>
				</div>
				<div class="cart-total-dil pt-2">
					<h4>Delivery Charges</h4>
					<span>$1</span>
				</div>
			</div>
			<div class="side-cart-items">
				<div class="cart-item">
					<div class="cart-product-img">
						<img src="images/product/img-1.jpg" alt="">
						<div class="offer-badge">6% OFF</div>
					</div>
					<div class="cart-text">
						<h4>Product Title Here</h4>
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
						<h4>Product Title Here</h4>
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
							<div class="cart-item-price">$24 <span>$30</span></div>
						</div>	
						<button type="button" class="cart-close-btn"><i class="uil uil-multiply"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="bs-canvas-footer">
			<div class="cart-total-dil saving-total ">
				<h4>Total Saving</h4>
				<span>$11</span>
			</div>
			<div class="main-total-cart">
				<h2>Total</h2>
				<span>$35</span>
			</div>
			<div class="checkout-cart">
				<a href="#" class="promo-code">Have a promocode?</a>
				<a href="#" class="cart-checkout-btn hover-btn">Proceed to Checkout</a>
			</div>
		</div>
	</div>
	<!-- Cart Sidebar Offsetl End-->
	<!-- Header Start -->
	<header class="header clearfix">
		<div class="top-header-group">
			<div class="top-header">
				<div class="res_main_logo">
					<a href="index.php"><img src="images/dark-logo-1.svg" alt=""></a>
				</div>
				<div class="main_logo" id="logo">
					<a href="index.php"><img src="images/logo.svg" alt=""></a>
					<a href="index.php"><img class="logo-inverse" src="images/dark-logo.svg" alt=""></a>
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
						<input class="prompt srch10" type="text" placeholder="Pesquise Produtos..">
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
								<span class="user__name"><?php echo$resultado['nome']?></span>
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
								<a href="dashboard_overview.html" class="item channel_item"><i class="uil uil-apps icon__1"></i>Perfil</a>								
								<a href="dashboard_my_orders.html" class="item channel_item"><i class="uil uil-box icon__1"></i>Ordens de compra</a>
								<a href="dashboard_my_wishlist.html" class="item channel_item"><i class="uil uil-heart icon__1"></i>Lisda de desejos</a>
								<a href="dashboard_my_wallet.html" class="item channel_item"><i class="uil uil-usd-circle icon__1"></i>Carteira</a>
								<a href="dashboard_my_addresses.html" class="item channel_item"><i class="uil uil-location-point icon__1"></i>Endereço</a>
								<a href="offers.html" class="item channel_item"><i class="uil uil-gift icon__1"></i>Ofertas</a>
								<a href="faq.html" class="item channel_item"><i class="uil uil-info-circle icon__1"></i>Perguntas frequentes</a>
								<a href="sign_in.html" class="item channel_item"><i class="uil uil-lock-alt icon__1"></i>Sair</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="sub-header-group">
			<div class="sub-header">
				<div class="ui dropdown">
					<a href="#" class="category_drop hover-btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i><span class="cate__icon">Select Category</span></a>
				</div>
				<nav class="navbar navbar-expand-lg navbar-light py-3">
					<div class="container-fluid">
						<button class="navbar-toggler menu_toggle_btn" type="button" data-target="#navbarSupportedContent"><i class="uil uil-bars"></i></button>
						<div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark1 p-3 p-lg-0 mt1-5 mt-lg-0 mobileMenu" id="navbarSupportedContent">
							<ul class="navbar-nav main_nav align-self-stretch">
								<li class="nav-item"><a href="index.php" class="nav-link active" title="Home">Home</a></li>
								<li class="nav-item"><a href="shop_grid.html" class="nav-link new_item" title="New Products">New Products</a></li>
								<li class="nav-item"><a href="shop_grid.html" class="nav-link" title="Featured Products">Featured Products</a></li>
								<li class="nav-item">
									<div class="ui icon top left dropdown nav__menu">
										<a class="nav-link" title="Pages">Pages <i class="uil uil-angle-down"></i></a>
										<div class="menu dropdown_page">
											<a href="dashboard_overview.php" class="item channel_item page__links">Account</a>
											<a href="about_us.html" class="item channel_item page__links">About Us</a>
											<a href="shop_grid.html" class="item channel_item page__links">Shop Grid</a>
											<a href="single_product_view.html" class="item channel_item page__links">Single Product View</a>
											<a href="checkout.html" class="item channel_item page__links">Checkout</a>
											<a href="request_product.html" class="item channel_item page__links">Product Request</a>										
											<a href="order_placed.html" class="item channel_item page__links">Order Placed</a>										
											<a href="bill.html" class="item channel_item page__links">Bill Slip</a>										
											<a href="sign_in.html" class="item channel_item page__links">Sign In</a>
											<a href="sign_up.html" class="item channel_item page__links">Sign Up</a>
											<a href="forgot_password.html" class="item channel_item page__links">Forgot Password</a>
											<a href="contact_us.html" class="item channel_item page__links">Contact Us</a>
										</div>
									</div>
								</li>
								<li class="nav-item">
									<div class="ui icon top left dropdown nav__menu">
										<a class="nav-link" title="Blog">Blog <i class="uil uil-angle-down"></i></a>
										<div class="menu dropdown_page">
											<a href="our_blog.html" class="item channel_item page__links">Our Blog</a>
											<a href="blog_no_sidebar.html" class="item channel_item page__links">Our Blog Two No Sidebar</a>
											<a href="blog_left_sidebar.html" class="item channel_item page__links">Our Blog with Left Sidebar</a>
											<a href="blog_right_sidebar.html" class="item channel_item page__links">Our Blog with Right Sidebar</a>
											<a href="blog_detail_view.html" class="item channel_item page__links">Blog Detail View</a>
											<a href="blog_left_sidebar_single_view.html" class="item channel_item page__links">Blog Detail View with Sidebar</a>
										</div>
									</div>
								</li>	
								<li class="nav-item"><a href="contact_us.html" class="nav-link" title="Contact">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</nav>
				<div class="catey__icon">
					<a href="#" class="cate__btn" data-toggle="modal" data-target="#category_model" title="Categories"><i class="uil uil-apps"></i></a>
				</div>
				<div class="header_cart order-1">
					<a href="#" class="cart__btn hover-btn pull-bs-canvas-left" title="Cart"><i class="uil uil-shopping-cart-alt"></i><span>Cart</span><ins>2</ins><i class="uil uil-angle-down"></i></a>
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
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">User Dashboard</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="dashboard-group">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="user-dt">
							<div class="user-img">
								<img src="images/avatar/img-5.jpg" alt="">
								<div class="img-add">													
									<input type="file" id="file">
									<label for="file"><i class="uil uil-camera-plus"></i></label>
								</div>
							</div>
							<h4><?php echo$resultado['nome']?></h4>
							<p><?php echo$resultado['telefone']?><a href="#"><i class="uil uil-edit"></i></a></p>
							<div class="earn-points"><img src="images/Dollar.svg" alt="">Points : <span>20</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="left-side-tabs">
							<div class="dashboard-left-links">
								<a href="dashboard_overview.php" class="user-item"><i class="uil uil-apps"></i>Overview</a>
								<a href="dashboard_my_orders.php" class="user-item"><i class="uil uil-box"></i>My Orders</a>
								<a href="dashboard_my_rewards.php" class="user-item"><i class="uil uil-gift"></i>My Rewards</a>
								<a href="dashboard_my_wallet.php" class="user-item active"><i class="uil uil-wallet"></i>My Wallet</a>
								<a href="dashboard_my_wishlist.php" class="user-item"><i class="uil uil-heart"></i>Shopping Wishlist</a>
								<a href="dashboard_my_addresses.php" class="user-item"><i class="uil uil-location-point"></i>My Address</a>
								<a href="/mercado-paid-egua/HTML/frontend/php/logout.php" class="user-item"><i class="uil uil-exit"></i>Logout</a>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-8">
						<div class="dashboard-right">
							<div class="row">
								<div class="col-md-12">
									<div class="main-title-tab">
										<h4><i class="uil uil-wallet"></i>My Wallet</h4>
									</div>
								</div>								
								<div class="col-lg-6 col-md-12">
									<div class="pdpt-bg">
										<div class="reward-body-dtt">
											<div class="reward-img-icon">
												<img src="images/money.svg" alt="">
											</div>
											<span class="rewrd-title">My Balance</span>
											<h4 class="cashbk-price">$120</h4>
											<span class="date-reward">Added : 8 May 2020</span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="pdpt-bg">
										<div class="gambo-body-cash">
											<div class="reward-img-icon">
												<img class="rotate-img" src="images/business.svg" alt="">
											</div>
											<span class="rewrd-title">Gambo Cashback Blance</span>
											<h4 class="cashbk-price">$5</h4>
											<p>100% of thiscan be used for your next order.</p>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="pdpt-bg">
										<div class="pdpt-title">
											<h4>Active Offers</h4>
										</div>
										<div class="active-offers-body">
											<div class="table-responsive">
												<table class="table ucp-table earning__table">
													<thead class="thead-s">
														<tr>
															<th scope="col">Offers</th>
															<th scope="col">Offer Code</th>
															<th scope="col">Expires Date</th>
															<th scope="col">Status</th>								
														</tr>
													</thead>
													<tbody>
														<tr>										
															<td>15%</td>	
															<td>GAMBOCOUP15</td>	
															<td>31 May 2020</td>	
															<td><b class="offer_active">Activated</b></td>	
														</tr>
														<tr>										
															<td>10%</td>	
															<td>GAMBOCOUP10</td>	
															<td>25 May 2020</td>	
															<td><b class="offer_active">Activated</b></td>	
														</tr>
														<tr>										
															<td>25%</td>	
															<td>GAMBOCOUP25</td>	
															<td>20 May 2020</td>	
															<td><b class="offer_active">Activated</b></td>	
														</tr>
														<tr>										
															<td>5%</td>	
															<td>GAMBOCOUP05</td>	
															<td>15 May 2020</td>	
															<td><b class="offer_active">Activated</b></td>	
														</tr>
													</tbody>				
												</table>
											</div>	
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="pdpt-bg">
										<div class="pdpt-title">
											<h4>Add Balance</h4>
										</div>
										<div class="add-cash-body">
											<div class="row">
												<div class="col-lg-6 col-md-12">
													<div class="form-group mt-1">
														<label class="control-label">Holder Name*</label>
														<div class="ui search focus">
															<div class="ui left icon input swdh11 swdh19">
																<input class="prompt srch_explore" type="text" name="holdername" value="" id="holder[name]" required="" maxlength="64" placeholder="Holder Name">															
															</div>
														</div>
													</div>
												</div> 
												<div class="col-lg-6 col-md-12">
													<div class="form-group mt-1">
														<label class="control-label">Card Number*</label>
														<div class="ui search focus">
															<div class="ui left icon input swdh11 swdh19">
																<input class="prompt srch_explore" type="text" name="cardnumber" value="" id="card[number]" required="" maxlength="64" placeholder="Card Number">															
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4">
													<div class="form-group mt-1">																	
														<label class="control-label">Expiration Month*</label>
														<select class="ui fluid search dropdown form-dropdown" name="card[expire-month]">
															<option value="">Month</option>
															<option value="1">January</option>
															<option value="2">February</option>
															<option value="3">March</option>
															<option value="4">April</option>
															<option value="5">May</option>
															<option value="6">June</option>
															<option value="7">July</option>
															<option value="8">August</option>
															<option value="9">September</option>
															<option value="10">October</option>
															<option value="11">November</option>
															<option value="12">December</option>
														  </select>	
													</div>
												</div>
												<div class="col-lg-4 col-md-4">
													<div class="form-group mt-1">
														<label class="control-label">Expiration Year*</label>
														<div class="ui search focus">
															<div class="ui left icon input swdh11 swdh19">
																<input class="prompt srch_explore" type="text" name="card[expire-year]" maxlength="4" placeholder="Year">															
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4">
													<div class="form-group mt-1">
														<label class="control-label">CVV*</label>
														<div class="ui search focus">
															<div class="ui left icon input swdh11 swdh19">
																<input class="prompt srch_explore" name="card[cvc]" maxlength="3" placeholder="CVV">															
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-12 col-md-12">
													<div class="form-group mt-1">
														<label class="control-label">Add Balance*</label>
														<div class="ui search focus">
															<div class="ui left icon input swdh11 swdh19">
																<input class="prompt srch_explore" type="text" name="addbalance" maxlength="3" placeholder="$0">															
															</div>
														</div>
													</div>
												</div>
											</div>
											<a href="#" class="next-btn16 hover-btn mt-3">Add Balance</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="pdpt-bg">
										<div class="pdpt-title">
											<h4>History</h4>
										</div>
										<div class="history-body scrollstyle_4">
											<ul class="history-list">
												<li>
													<div class="purchase-history">
														<div class="purchase-history-left">
															<h4>Purchase</h4>
															<p>Transaction ID <ins>gambo14255896</ins></p>
															<span>6 May 2018, 12.56PM</span>
														</div>
														<div class="purchase-history-right">
															<span>-$25</span>
															<a href="#">View</a>
														</div>
													</div>
												</li>
												<li>
													<div class="purchase-history">
														<div class="purchase-history-left">
															<h4>Purchase</h4>
															<p>Transaction ID <ins>gambo14255895</ins></p>
															<span>5 May 2018, 11.16AM</span>
														</div>
														<div class="purchase-history-right">
															<span>-$21</span>
															<a href="#">View</a>
														</div>
													</div>
												</li>
												<li>
													<div class="purchase-history">
														<div class="purchase-history-left">
															<h4>Purchase</h4>
															<p>Transaction ID <ins>gambo14255894</ins></p>
															<span>4 May 2018, 02.56PM</span>
														</div>
														<div class="purchase-history-right">
															<span>-$30</span>
															<a href="#">View</a>
														</div>
													</div>
												</li>
												<li>
													<div class="purchase-history">
														<div class="purchase-history-left">
															<h4>Purchase</h4>
															<p>Transaction ID <ins>gambo14255893</ins></p>
															<span>3 May 2018, 5.56PM</span>
														</div>
														<div class="purchase-history-right">
															<span>-$15</span>
															<a href="#">View</a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
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
								<li><a href="#">Carnes</a></li>
								<li><a href="#">Eletrônicos</a></li>
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